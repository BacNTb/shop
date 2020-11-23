<?php
namespace Mvc\Models;

use Mvc\Core\ResourceModel;

use Mvc\Models\ImgModel;

class ImgResourceModel extends ResourceModel {
    public function __construct(){
        $this->_init("image","",new ImgModel());
    }
}
