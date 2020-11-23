<?php
namespace Mvc\Models;

use Mvc\Models\AdminResourceModel;

class AdminRepository
{
    private $AdminResourceModel;

    public function __construct() {
        $this->AdminResourceModel = new AdminResourceModel();
    }

    public function add($model) {      
        return $this->AdminResourceModel->save($model);
    }

    public function update($model)  {       
        return $this->AdminResourceModel->save($model);
    }

    public function delete($model) {
        return $this->AdminResourceModel->delete($model);
    }

    public function getId($id) {
        return $this->AdminResourceModel->getId($id);
    }

    public function showAll() {
        return $this->AdminResourceModel->showAll();
    }

    public function check($username, $password) {
        return $this->AdminResourceModel->checkLogin($username, $password);
	    
    }
}