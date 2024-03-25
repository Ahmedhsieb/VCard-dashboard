<?php

namespace Ahmed\Vcard\core\auth;

use Ahmed\Vcard\core\session;

trait auth
{
    public function check(){

        if(session::has("auth") == false){
            exit("this methods not allow");
        }

    }

    public function superAdmin($pass){
        return ($pass == 'ahmed20012@123@') ? true : false;
    }

}