<?php

namespace Source\Models;

class Product
{
    private $id;
    private $description;
    private $price;
    private $categoryId;

    public function __construct($id =null, $description = null, $price = null, $categoryId = null)
    {
        $this->id = $id;
        $this->description = $description;
        $this->price = $price;
        $this->categoryId = $categoryId;
    }

    /**
     * @return mixed|null
     */
    public function getId(): mixed
    {
        return $this->id;
    }

    public function setId(mixed $id): void
    {
        $this->id = $id;
    }

    public function getDescription(): mixed
    {
        return $this->description;
    }

    public function setDescription(mixed $description): void
    {
        $this->description = $description;
    }

    public function getPrice(): mixed
    {
        return $this->price;
    }

    public function setPrice(mixed $price): void
    {
        $this->price = $price;
    }

    public function getCategoryId(): mixed
    {
        return $this->categoryId;
    }

    public function setCategoryId(mixed $categoryId): void
    {
        $this->categoryId = $categoryId;
    }

}
