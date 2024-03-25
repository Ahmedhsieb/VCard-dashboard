<?php

namespace Ahmed\Vcard\controller;

use Ahmed\Vcard\core\controller;
use Ahmed\Vcard\model\user;

class vcard extends controller
{
    public function index()
    {
        $user_data = (new user)->getUserData() ;
        $user_social_data = (new user)->getUserSocialData();

        return $this->view("vcard/index", ['user_data' => $user_data, 'user_social_data' => $user_social_data]);
    }
}