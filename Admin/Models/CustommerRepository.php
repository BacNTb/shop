<?php
namespace Mvc\Models;

use Mvc\Models\CustommerResourceModel;

class CustommerRepository
{
    private $CustommerResourceModel;

    public function __construct() {
        $this->CustommerResourceModel = new CustommerResourceModel();
    }

    public function add($model) {      
        return $this->CustommerResourceModel->save($model);
    }

    public function update($model)  {       
        return $this->CustommerResourceModel->save($model);
    }

    public function getId($id) {
        return $this->CustommerResourceModel->getId($id);
    }

    public function showAll() {
        return $this->CustommerResourceModel->showAll();
    }

    public function delete($id) {
        return $this->CustommerResourceModel->delete($id);
    }
}