<?php

namespace Ahmed\Vcard\core\saas;

use Ahmed\Vcard\core\Database\mysqli\db;
use Ahmed\Vcard\core\registry;
use Ahmed\Vcard\core\saas\contract\ISaas;


class saas implements ISaas
{

    public function run($subdomain)
    {
        //this method is for run the getSubdomain method and get the user_db and pass it to setSubdomain method
        if (count(explode(".", $subdomain)) > 2){
            $user_db = $this->getSubdomain($subdomain);
            $this->setSubdomain($user_db);
        }
    }

    public function setSubdomain($dbname)
    {
        //make an object from the user_db
        if (!empty($dbname))
            registry::set("user_connection", new db($dbname));
    }

    public function getSubdomain($subdomain)
    {
        //get the user_db from the main db and return it
        $user_db = registry::get("main")->select("users", "user_db")->where("subdomain", "=", $subdomain)->getRow();
        if (!empty($user_db)){
            return $user_db['user_db'];
        }
        return false;
    }

    public function isSubDomain()
    {
        //check if the HTTP_HOST is subdomain or main domain
       return (count(explode(".", $_SERVER['HTTP_HOST'])) > 2) ? true : false;
    }
}