<?php

namespace Ahmed\Vcard\model;

use Ahmed\Vcard\core\registry;

class user
{
    public function getUserData()
    {
      return registry::get("user_connection")->select("user", "*")->getRow();
    }
    public function getUserSocialData()
    {
      return registry::get("user_connection")->select("social", "*")->getAll();
    }

    public function getUserByEmailAndPassword($email,$password){
        return registry::get("user_connection")->select("user","*")->where("email","=",$email)->andWhere("password","=",$password)->getRow();
    }

    public function updateData($data, $id){
        registry::get("user_connection")->update("user",$data)->where("id","=",$id)->excu();
    }

    public function updateSocial($data, $id){
        registry::get("user_connection")->update("social",$data)->where("id","=",$id)->excu();
    }
    public function deleteSocial($id){
        registry::get("user_connection")->delete("social")->where("id","=",$id)->excu();
    }
    public function addSocial($data){
        registry::get("user_connection")->insert("social",$data)->excu();
    }
}