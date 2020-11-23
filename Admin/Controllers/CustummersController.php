<?php
namespace Mvc\Controllers;

use Mvc\Core\Controller;

use Mvc\Models\CheckoutModel;

use Mvc\Models\CheckoutRepository;

use Mvc\Models\CustommerModel;

use Mvc\Models\CustommerRepository;

use Mvc\Models\LedModel;

use Mvc\Models\LedRepository;

class CustummersController extends Controller
{

    private $CustommerRepository;

    public function __construct(){
        $this->CustommerRepository = new CustommerRepository();
    }

    function cus($id)
    {
        $newLed = new LedModel();
        $req = new LedRepository();
        $d['led'] = $req->showAll($newLed);
        $this->set($d);

        $Cus = new CustommerModel();
        $d['cus'] = $this->CustommerRepository->getId($id);
        $this->set($d);

        $Check = new CheckoutModel();
        $rep = new CheckoutRepository();
        $d['check'] = [];

        $arrCheck = $rep->showAll();

        foreach ($arrCheck as $key => $value) {
            if($value['cus_id'] == $id) {
                $d['check'][$key] = $value;
            } 
        }
        $this->set($d);
   
        $this->render("cusdetails");   
    }

    function home($page)
    {
        $Cus = new CustommerModel();
        $d['cus'] = $this->CustommerRepository->showAll($Cus);
        $this->set($d);

        $Check = new CheckoutModel();
        $rep = new CheckoutRepository();
        $d['check'] = $rep->showAll();

        $this->set($d);

        if($page == 'home') {
            $this->render("home");

        } else {
            $this->render("cus");
        }
    }
}


