<?php

namespace Ahmed\Vcard\core\saas;

class saas_helper
{
    public static function handle_host($username){
        //this method is responsible for add host domain to hosts file in windows for mention to subdomain in browser
        file_put_contents(
            "C:\Windows\System32\drivers\\etc\hosts",
            "  127.0.0.1     $username.vcard.vc",
            FILE_APPEND | LOCK_EX
        );
    }

    public static function generate_db($username)
    {
        //create db with username
        $create_db_query = "CREATE DATABASE `$username`";
        $db_connection = mysqli_connect("localhost", "root", "", "");
        mysqli_query($db_connection, $create_db_query);
        static::generate_user_db($username);
    }

    public static function delete_db($dbname)
    {

        $delete_db_query = "DROP DATABASE `$dbname`";
        $db_connection = mysqli_connect("localhost", "root", "", "");
        mysqli_query($db_connection, $delete_db_query);
    }

    public static function generate_user_db($username)
    {
        //execute the sql file query in user db
        $db_file_content =  file_get_contents(dirname(__FILE__)."\database\\vcard_user.sql");
        $db_connection =  mysqli_connect("localhost","root","",$username);
        mysqli_multi_query($db_connection, $db_file_content);
    }

    public static function saas_controller()
    {
        //if the url is subdomain return it to vcard view if not return to home view
        return ((new saas)->isSubDomain()) ? 'vcard' : 'home';
    }



}