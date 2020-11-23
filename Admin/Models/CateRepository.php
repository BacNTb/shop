<?php
namespace Mvc\Models;

use Mvc\Models\CateResourceModel;

class CateRepository
{
    private $CateResourceModel;

    public function __construct() {
        $this->CateResourceModel = new CateResourceModel();
    }

    public function add($model) {      
        return $this->CateResourceModel->save($model);
    }

    public function update($model)  {       
        return $this->CateResourceModel->save($model);
    }

    public function delete($model) {
        return $this->CateResourceModel->delete($model);
    }

    public function getId($id) {
        return $this->CateResourceModel->getId($id);
    }

    public function showAll() {
        return $this->CateResourceModel->showAll();
    }
}