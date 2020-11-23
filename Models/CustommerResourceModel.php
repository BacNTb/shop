<?php
namespace Mvc\Models;

use Mvc\Core\ResourceModel;

use Mvc\Models\CustommerModel;

class CustommerResourceModel extends ResourceModel {
    public function __construct(){
        $this->_init("custummer","",new CustommerModel());
    }
}