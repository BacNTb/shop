<?php
namespace Mvc\Models;

use Mvc\Core\ResourceModel;

use Mvc\Models\CateModel;

class CateResourceModel extends ResourceModel {
    public function __construct(){
        $this->_init("categori","",new CateModel());
    }
}