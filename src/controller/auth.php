<?php

namespace Ahmed\Vcard\controller;

use Ahmed\Vcard\core\controller;
use Ahmed\Vcard\core\registry;
use Ahmed\Vcard\core\saas\saas;
use Ahmed\Vcard\core\saas\saas_helper;
use Ahmed\Vcard\core\session;
use Ahmed\Vcard\model\user;

class auth extends controller
{
    public function index()
    {
        //call the signup view --> index view
        return $this->view("auth/index", []);
    }

    public function create()
    {
        //check the validation of user input
        registry::get("validation")->input("username")->string()->min(3)->required();
        registry::get("validation")->input("domainname")->string()->min(3)->required();
        registry::get("validation")->input("email")->email()->required();
        registry::get("validation")->input("password")->min(3)->required();

        //check if there is db with this name or not
        $data = registry::get("main")->select("users", "user_db")->where("user_db", "=", $_POST['username'])->getRow();
        $check_exists = $data ? true :false;

        //check if validation is success or not
        if (registry::get("validation")->success() && !$check_exists){
            session::set("username", $_POST['domainname']);
            
            //make host and create db with user name
            saas_helper::handle_host($_POST['domainname']);
            saas_helper::generate_db($_POST['domainname']);

            //insert user db name and user subdomain to main db (vcard)
            registry::get("main")->insert("users",[
                "subdomain" => $_POST['domainname'].".vcard.vc",
                "user_db" => $_POST['domainname']
            ])->excu();

            //insert user db name and user subdomain to allUser db for superAdmin
            registry::get("allUsers")->insert("users",[
                "name" => $_POST['username'],
                "email" => $_POST['email'],
                "password" => $_POST['password'],
                "subdomain" => $_POST['domainname'].".vcard.vc",
                "user_db" => $_POST['domainname']
            ])->excu();

            //sleep for 1 second to refresh the database
            sleep(1);

            //check if there is db with this name or not
            if (registry::get("main")->select("users", "*")->where("user_db", "=", $_POST['domainname'])->getRow()){
                //make object from user db
                $saas = new saas();
                $saas->setSubdomain($_POST['domainname']);

                //get the image of user from files temp and put in user_img folder
                $tmp = $_FILES['img']['tmp_name'];
                $file_name = $_FILES['img']['name'];
                move_uploaded_file($tmp, realpath(dirname(__DIR__)."/public/")."user_img/$file_name");

                //insert user data in his db
                registry::get("user_connection")->insert("user",[
                    "name" => $_POST['username'],
                    "email" => $_POST['email'],
                    "password" => $_POST['password'],
                    "address" => $_POST['address'],
                    "title" => addslashes($_POST['title']),
                    "job_title" => $_POST['job_title'],
                    "phone" => $_POST['phone'],
                    "img" => $file_name
                ])->excu();

                //sleep for 1 second to refresh the database
                sleep(1);

                //go to success view to pass to vcard view
                return $this->view("auth/success", ['domainname'=>$_POST['domainname'], 'username'=>$_POST['username']]);

            }else{
                //if the
                echo "database not exist";

            }


        }else{
            if ($check_exists){
                return $this->view("errors/db_exist_error", ['error_title'=>'DomainName Already Exist!', 'error'=>'Sorry the DomainName that you have chosen is already exists please choose another one  ']);
            }else {
                return $this->view("errors/db_exist_error", ['error_title'=>'Validation Error!', 'error'=>"Sorry ".registry::get("validation")->showErorr()]);

            }
        }
    }




    public function login()
    {
        //call the login view for access the superAdmin settings
        return $this->view("auth/login", []);
    }

    public function postLogin()
    {
        //get the login data and check it to access the admin dashboard
            $email = $_POST['email'];
            $password = $_POST['password'];
            $res = (new user)->getUserByemailAndPassword($email, $password);
            if (!empty($res)) {
                session::set("auth", $res);
                redirect("/admin/index");
            } else {
                redirect("login");
            }
    }

}