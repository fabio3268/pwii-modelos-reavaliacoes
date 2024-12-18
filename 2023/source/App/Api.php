<?php

namespace Source\App;

use Source\Models\User;

class Api
{
    private $user;

    public function __construct()
    {
        header('Content-Type: application/json; charset=UTF-8');
        $this->user = new User();
    }

    public function getUser()
    {
        $this->user = new User();
        echo json_encode($this->user->selectAll());
    }

}
