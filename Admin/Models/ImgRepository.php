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

    public function deleteImg($model) {
        return $this->ImgResourceModel->deleteImg($model);
    }

    public function deletex($model) {
        return $this->ImgResourceModel->deletex($model);
    }

    public function getId($id) {
        return $this->ImgResourceModel->getId($id);
    }

    // public function getLedId($ledId) {
    //     return $this->ImgResourceModel->deleteImg($ledId);
    // }

    public function showAll() {
        return $this->ImgResourceModel->showAll();
    }
}