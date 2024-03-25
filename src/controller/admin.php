<?php

namespace Ahmed\Vcard\controller;

use Ahmed\Vcard\core\controller;
use Ahmed\Vcard\core\registry;
use Ahmed\Vcard\core\session;
use Ahmed\Vcard\model\user;

class admin extends controller
{
    public function __construct()
    {
        $this->check();
    }

    public function index()
    {
        $user_data = (new user)->getUserData() ;
        return $this->view("admin/index", ['user_data' => $user_data]);
    }

    public function connection()
    {
        $user_social_data = (new user)->getUserSocialData();$user_data = (new user)->getUserData();
        return $this->view("admin/connections", [ 'user_social_data' => $user_social_data,'user_data'=>$user_data, 'cond' => false]);
    }

    public function updateDate(){

        //get the image of user from files temp and put in user_img folder
        $tmp = $_FILES['img']['tmp_name'];
        $file_name = $_FILES['img']['name'];
        move_uploaded_file($tmp, realpath(dirname(__DIR__)."/public/")."user_img/$file_name");

        //update the user data
        if(!empty($file_name)) {
            (new user)->updateData([
                'img' => $file_name,
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'address' => $_POST['address'],
                'phone' => $_POST['phone'],
                'job_title' => $_POST['job_title'],
                'title' => addslashes($_POST['title'])
            ], 1);
        }else{
            (new user)->updateData([
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'address' => $_POST['address'],
                'phone' => $_POST['phone'],
                'job_title' => $_POST['job_title'],
                'title' => addslashes($_POST['title'])
            ], 1);
        }
        $user_data = (new user)->getUserData();
        return $this->view("admin/index", ['user_data' => $user_data]);
    }

    public function getSocial(){
        $user_social_data = (new user)->getUserSocialData();
        $user_data = (new user)->getUserData();
        return $this->view("admin/connections", [
            'user_social_data' => $user_social_data,
            'social_key' => $_POST['social_key'],
            'social_value' => $_POST['social_value'],'user_data'=>$user_data,
            'id' => $_POST['id'],
            'cond' => true]);
    }
    public function updateSocial(){

        (new user)->updateSocial([
            'social_key' => $_POST['social_key'],
            'social_value' => $_POST['social_value']
        ],
            $_POST['id']);

        $user_social_data = (new user)->getUserSocialData();
        $user_data = (new user)->getUserData();
        return $this->view("admin/connections", [
            'user_social_data' => $user_social_data,
            'social_key' => $_POST['social_key'],
            'social_value' => $_POST['social_value'],'user_data'=>$user_data,
            'cond' => false]);
    }

    public function deleteSocial(){
        (new user)->deleteSocial($_POST['id']);
        $user_social_data = (new user)->getUserSocialData();
        $user_data = (new user)->getUserData();
        return $this->view("admin/connections", [ 'user_social_data' => $user_social_data,'user_data'=>$user_data, 'cond' => false]);
    }

    public function addSocial()
    {
        (new user)->addSocial([
            'social_key' => $_POST['social_key'],
            'social_value' => $_POST['social_value']
        ]);

        $user_social_data = (new user)->getUserSocialData();
        $user_data = (new user)->getUserData();
        return $this->view("admin/connections", [ 'user_social_data' => $user_social_data,'user_data'=>$user_data, 'cond' => false]);
    }

    public function logout()
    {
        session::remove("auth");
        $user_data = (new user)->getUserData();
        $user_social_data = (new user)->getUserSocialData();
        return $this->view("vcard/index", ['user_social_data' => $user_social_data, 'user_data' => $user_data]);
    }

}