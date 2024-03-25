<?php

namespace Ahmed\Vcard\controller;

use Ahmed\Vcard\core\controller;

class home extends controller
{
    public function index()
    {
        //call the index home view
        return $this->view("index", []);
    }
}