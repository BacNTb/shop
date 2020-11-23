<?php
namespace Mvc\Models;

use Mvc\Core\ResourceModel;

use Mvc\Models\CheckoutModel;

class CheckoutResourceModel extends ResourceModel {
    public function __construct(){
        $this->_init("checkout","",new CheckoutModel());
    }
}