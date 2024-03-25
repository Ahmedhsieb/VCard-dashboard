<?php

namespace Ahmed\Vcard\controller;

use Ahmed\Vcard\core\controller;
use Ahmed\Vcard\model\allUsers;

class superAdmin extends controller
{
    public function index($pass)
    {
        if ($this->superAdmin($pass)){
            $users = (new allUsers)->getAllUsers();
             return $this->view("superAdmin/index", ['users' => $users]);
        }else{
             return $this->view("errors/page_error", []);
        }

    }

    public function deleteUser($id, $dbname)
    {
        (new allUsers)->deleteUser($id, $dbname);
        $users = (new allUsers)->getAllUsers();
        return $this->view("superAdmin/index", ['users' => $users]);
    }
}