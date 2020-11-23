<?php
namespace Mvc\Models;

use Mvc\Core\ResourceModel;

use Mvc\Models\LedModel;

class LedResourceModel extends ResourceModel {
    public function __construct(){
        $this->_init("led","",new LedModel());
    }
}
