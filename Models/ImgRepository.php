<?php
namespace Mvc\Models;

use Mvc\Models\ImgResourceModel;

class ImgRepository
{
    private $ImgResourceModel;

    public function __construct() {
        $this->ImgResourceModel = new ImgResourceModel();
    }

    public function add($model) {      
        return $this->ImgResourceModel->save($model);
    }

    public function update($model)  {       
        return $this->ImgResourceModel->save($model);
    }

    public function getId($id) {
        return $this->ImgResourceModel->getId($id);
    }

    public function showAll() {
        return $this->ImgResourceModel->showAll();
    }

}