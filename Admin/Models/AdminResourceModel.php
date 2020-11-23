<?php
namespace Mvc\Models;

use Mvc\Core\ResourceModel;

use Mvc\Models\AdminModel;

class AdminResourceModel extends ResourceModel {
    public function __construct(){
        $this->_init("admin","",new AdminModel());
    }
}