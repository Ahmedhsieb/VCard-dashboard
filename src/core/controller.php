<?php

namespace Ahmed\Vcard\core;

use Ahmed\Vcard\core\auth\auth;

class controller
{
    //for check if the user logging or not to access superAdmin settings
    use auth;

    //that's method call the view
    public function view($path, $data)
    {
        //divide the data into key and value
        extract($data);

        //go to view path
        include dirname(__DIR__)."/view/{$path}.php";
    }
}