<?php
namespace Mvc\Models;

use Mvc\Models\LedResourceModel;

class LedRepository
{
    private $LedResourceModel;

    public function __construct() {
        $this->LedResourceModel = new LedResourceModel();
    }

    public function add($model) {      
        return $this->LedResourceModel->save($model);
    }

    public function update($model)  {       
        return $this->LedResourceModel->save($model);
    }

    public function getId($id) {
        return $this->LedResourceModel->getId($id);
    }

    public function showAll() {
        return $this->LedResourceModel->showAll();
    }

    public function showTop5() {
        return $this->LedResourceModel->showTop5();
    }

    public function showAllLed() {
        return $this->LedResourceModel->showAllLed();
    }
}