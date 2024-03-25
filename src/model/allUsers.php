<?php

namespace Ahmed\Vcard\model;

use Ahmed\Vcard\core\registry;
use Ahmed\Vcard\core\saas\saas_helper;

class allUsers
{

    public function getAllUsers()
    {
        //get all users data
        return registry::get("allUsers")->select("users", "*")->getAll();
    }

    public function deleteUser($id, $dbname)
    {
        //delete user data and database
        registry::get("allUsers")->delete("users")->where("id", "=", $id)->excu();
        registry::get("main")->delete("users")->where("id", "=", $id+2)->excu();
        saas_helper::delete_db($dbname);
    }

}