<?php

namespace Source\Models;

class Purchase
{
    private $id;
    private $productId;
    private $userId;
    private $createdAt;

    public function __construct($id = null, $productId = null, $userId = null, $createdAt = null)
    {
        $this->id = $id;
        $this->productId = $productId;
        $this->userId = $userId;
        $this->createdAt = $createdAt;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getProductId()
    {
        return $this->productId;
    }

    public function setProductId($productId): void
    {
        $this->productId = $productId;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function setUserId($userId): void
    {
        $this->userId = $userId;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setCreatedAt($createdAt): void
    {
        $this->createdAt = $createdAt;
    }

}
