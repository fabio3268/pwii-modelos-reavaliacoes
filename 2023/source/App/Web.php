<?php

namespace Source\App;

use League\Plates\Engine;
use Source\Models\Category;
use Source\Models\Faq;
use Source\Models\Project;
use Source\Models\User;

class Web
{
    private $view;
    private $categories;

    public function __construct()
    {
        $this->view = new Engine(CONF_VIEW_WEB,'php');
    }

    public function home() : void
    {
        echo $this->view->render(
            "home",[]
        );
    }

    public function register(array $data) : void
    {
        if(!empty($data)){
            echo json_encode($data,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
            return;
        }

        echo $this->view->render(
            "register",[]
        );
    }

    public function userList(array $data) : void
    {
        $users = new User();
        echo $this->view->render("user-list",["users" => $users->selectAll()]);
    }

    public function error(array $data) : void
    {
        echo $this->view->render("404", [
            "title" => "Erro {$data["errcode"]} | " . CONF_SITE_NAME,
            "error" => $data["errcode"]
        ]);
    }

}
