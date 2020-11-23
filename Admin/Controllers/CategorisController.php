<?php
namespace Mvc\Controllers;

use Mvc\Core\Controller;

use Mvc\Models\CateModel;

use Mvc\Models\CateRepository;
use Mvc\Models\LedModel;
use Mvc\Models\LedRepository;

class CategorisController extends Controller
{

    private $CateRepository;

    public function __construct(){
        $this->CateRepository = new CateRepository();
    }

    function cate($page)
    {
        $newCate = new CateModel();

        $newLed = new LedModel();
        $req = new LedRepository();
        $d['led'] = $req->showAll($newLed);
        $this->set($d);

        if(isset($_POST['delete'])) {
            $action = $_SESSION['action'];

            if($action == 1) {
                $id = $_POST['delete'];
    
                $newCate->setId($id);
    
                if ($this->CateRepository->delete($newCate))
                {
                    $d['cate'] = $this->CateRepository->showAll($newCate);
                    $this->set($d);

                    $d['message'] = "Xóa danh mục thành công !";
                    $this->set($d);
                }

            } else {

                $d['cate'] = $this->CateRepository->showAll($newCate);
                $this->set($d);

                $d['message'] = "Bạn không đủ quyền để xóa danh mục này !";
                $this->set($d);
            }

            $this->render("cate");

        } else {
            $d['cate'] = $this->CateRepository->showAll($newCate);
            $this->set($d);

            if($page == 'home') {
                $this->render("home");
    
            } else {
                $this->render("cate");
            }
        }
    }

    function create()
    {
        if (isset($_POST["name"]))
        {
            $Cate= new CateModel();
            $Cate->setName($_POST["name"]);
            $Cate->setDescription($_POST["description"]);
            $Cate->setStatus($_POST["status"]);
            $Cate->setCreate_at(date("Y-m-d h:i:s"));

            if ($this->CateRepository->add($Cate))
            {
                header("Location: " . WEBROOT . "Categoris/cate/home");
            }
        }

        $this->render("create");
    }

    function edit($id)
    {
        $Cate= new CateModel();
        $Cate->setId($id);

        if (isset($_POST["name"]))
        {
            $Cate->setName($_POST["name"]);
            $Cate->setName($_POST["name"]);
            $Cate->setDescription($_POST["description"]);
            $Cate->setStatus($_POST["status"]);
            $Cate->setUpdate_at(date("Y-m-d h:i:s"));

            if ($this->CateRepository->update($Cate))
            {
                header("Location: " . WEBROOT . "Categoris/cate/");
            }
        }

        $d["Cate"] = $this->CateRepository->getId($id);

        $this->set($d);
        $this->render("edit");
    }
}


