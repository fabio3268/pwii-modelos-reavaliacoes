<?php

namespace Source\Models;

class Category
{
    private $id;
    private $description;

    public function __construct($id, $description)
    {
        $this->id = $id;
        $this->description = $description;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description): void
    {
        $this->description = $description;
    }

}
