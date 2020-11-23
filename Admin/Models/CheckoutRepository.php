<?php
namespace Mvc\Models;

use Mvc\Models\CheckoutResourceModel;

class CheckoutRepository
{
    private $CheckoutResourceModel;

    public function __construct() {
        $this->CheckoutResourceModel = new CheckoutResourceModel();
    }

    public function add($model) {      
        return $this->CheckoutResourceModel->save($model);
    }

    public function update($model)  {       
        return $this->CheckoutResourceModel->save($model);
    }

    public function getId($id) {
        return $this->CheckoutResourceModel->getId($id);
    }

    public function showAll() {
        return $this->CheckoutResourceModel->showAll();
    }

}