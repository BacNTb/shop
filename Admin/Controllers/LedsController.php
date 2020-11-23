<?php
namespace Mvc\Controllers;

use Mvc\Config\Database;

use Mvc\Core\Controller;

use Mvc\Models\AdminModel;

use Mvc\Models\AdminRepository;

use Mvc\Models\LedModel;

use Mvc\Models\LedRepository;

use Mvc\Models\CateModel;

use Mvc\Models\CateRepository;

use Mvc\Models\CustommerModel;

use Mvc\Models\CustommerRepository;

use Mvc\Models\ImgModel;

use Mvc\Models\ImgRepository;

class LedsController extends Controller
{

    private $LedRepository;

    public function __construct()
    {
        $this->LedRepository = new LedRepository();
    }

    function index()
    {
        $newLed = new LedModel();
        $d['led'] = $this->LedRepository->showAll($newLed);
        $this->set($d);

        $newCate = new CateModel();
        $rep = new CateRepository();
        $d['cate'] = $rep->showAll($newCate);;
        $this->set($d);

        $newAdmin = new AdminModel();
        $rep = new AdminRepository();
        $d['admin'] = $rep->showAll($newCate);;
        $this->set($d);

        $newCate = new CustommerModel();
        $rep = new CustommerRepository();
        $d['cus'] = $rep->showAll($newCate);;
        $this->set($d);

        $this->render("index");
    }

    function login()
    {
        $this->render("login");
    }

    function home()
    {
        $newLed = new LedModel();

        $newCate = new CateModel();
        $rep = new CateRepository();
        $d['cate'] = $rep->showAll($newCate);;
        $this->set($d);

        $newImg = new ImgModel();
        $rep = new ImgRepository();
        $d['img'] = $rep->showAll($newImg);;
        $this->set($d);

        if(isset($_POST['delete'])) {

            $idDel = $_POST['delete'];

            $newLed->setId($idDel);

            $newImg->setId($idDel);

            if ($this->LedRepository->delete($newLed))
            {
                if ($rep->deleteImg($newImg)) {

                    $d['led'] = $this->LedRepository->showAll($newLed);
                    $this->set($d);
        
                    $this->render("home");
                }
            }

        } else {
            $d['led'] = $this->LedRepository->showAll($newLed);
            $this->set($d);

            $this->render("home");
        }
    }

    function homeCateId($id)
    {
        $newLed = new LedModel();

        $newCate = new CateModel();
        $rep = new CateRepository();
        $d['cate'] = $rep->showAll($newCate);;
        $this->set($d);

        foreach ($d['cate'] as $key) {
            if($key['id'] == $id) {
                $d['message'] = $key['name'];
            }
        }
        $this->set($d);

        $newImg = new ImgModel();
        $rep = new ImgRepository();
        $d['img'] = $rep->showAll($newImg);;
        $this->set($d);

        if(isset($_POST['delete'])) {

            $idDel = $_POST['delete'];

            $newLed->setId($idDel);

            $newImg->setId($idDel);

            if ($this->LedRepository->delete($newLed))
            {
                if ($rep->deleteImg($newImg)) {
                    if($id != 'all') {
                        $arr = $this->LedRepository->showAll($newLed);
                
                        $d['led'] = [];
                
                        foreach ($arr as $key => $value) {
                            
                            if($value['categori_id'] == $id) {
                                $d['led'][$key] = $value;
                            }       
                        }
            
                    } else {
                        $d['led'] = $this->LedRepository->showAll($newLed);
                    }
                    $this->set($d);
    
                    $this->render("homeCateId");
                }
            }

        } else {
            if($id != 'all') {
                $arr = $this->LedRepository->showAll($newLed);
        
                $d['led'] = [];
        
                foreach ($arr as $key => $value) {
                    
                    if($value['categori_id'] == $id) {
                        $d['led'][$key] = $value;
                    }       
                }
    
            } else {
                $d['led'] = $this->LedRepository->showAll($newLed);
            }
            $this->set($d);
    
            $this->render("homeCateId");
        }
    }

    function create()
    {
        if (isset($_POST["name"])) {

            $Led = new LedModel();
            $Img = new ImgModel();
            $req = new ImgRepository();

            $Led->setName($_POST["name"]);
            $Led->setDescription($_POST["description"]);
            $Led->setPrice($_POST["price"]);
            $Led->setCategori_id($_POST["categori_id"]);
            $Led->setCreate_at(date("Y-m-d h:i:s"));

            if ($this->LedRepository->add($Led)) {
                $conn = new Database();

                $id = $conn->getBdd()->lastInsertId();

                if (isset($_FILES["image"])) {
                    
                    $fileUploadAdmin = $_SERVER['DOCUMENT_ROOT'] . '/Admin/Views/Img/';
                    $fileUploadShop = $_SERVER['DOCUMENT_ROOT'] . '/Views/Layouts/img/product/';

                    $file = $_FILES["image"]['name'];
   
                    foreach ($file as $key => $name) {
                        
                        if ($name == UPLOAD_ERR_OK) {
                            
                            $tmp_name = $_FILES["image"]["tmp_name"][$key];
                            $name = basename($_FILES["image"]["name"][$key]);

                            move_uploaded_file($tmp_name, "$fileUploadAdmin/$name");
                     
                            copy($fileUploadAdmin . '/' . $name, $fileUploadShop . '/' . $name);


                            $Img->setLed_id($id);
                            $Img->setName($name);
                            $Img->setCreate_at(date("Y-m-d h:i:s"));

                            $req->add($Img);
                        }
                    }

                    header("Location: " . WEBROOT . "Leds/home/");
                }
            }
        }

        $newCate = new CateModel();
        $rep = new CateRepository();
        $d['cate'] = $rep->showAll($newCate);;
        $this->set($d);

        $this->render("create");
    }

    function edit($id)
    {
        $Led = new LedModel();
        $Led->setId($id);

        $Img = new ImgModel();
        $rep = new ImgRepository();
        $Img->setId($id);
        $Img->setLed_id($id);


        if (isset($_POST["name"])) {
            $Led->setCategori_id($_POST["categori_id"]);
            $Led->setName($_POST["name"]);
            $Led->setDescription($_POST["description"]);
            $Led->setPrice($_POST["price"]);
            $Led->setUpdate_at(date("Y-m-d h:i:s"));

            if ($this->LedRepository->update($Led)) {
           
                if (isset($_FILES["image"])) {

                    $rep->deleteImg($Img);
                    
                    $fileUploadAdmin = $_SERVER['DOCUMENT_ROOT'] . '/Admin/Views/Img/';
                    $fileUploadShop = $_SERVER['DOCUMENT_ROOT'] . '/Views/Layouts/img/product/';

                    $file = $_FILES["image"]['name'];
   
                    foreach ($file as $key => $name) {
                        
                        if ($name == UPLOAD_ERR_OK) {
                            
                            $tmp_name = $_FILES["image"]["tmp_name"][$key];
                            $name = basename($_FILES["image"]["name"][$key]);

                            move_uploaded_file($tmp_name, "$fileUploadAdmin/$name");
                     
                            copy($fileUploadAdmin . '/' . $name, $fileUploadShop . '/' . $name);


                            $Img->setLed_id($id);
                            $Img->setName($name);
                            $Img->setCreate_at(date("Y-m-d h:i:s"));

                            $rep->add($Img);
                        }
                    }

                    header("Location: " . WEBROOT . "Leds/home/");
                }
            }
        }

        $d["Led"] = $this->LedRepository->getId($id);
        $this->set($d);

        $d["img"] = $rep->showAll($Img);
        $this->set($d);

        $Cate = new CateModel();
        $req = new CateRepository();

        $d['cate'] = $req->showAll($Cate);
        $this->set($d);

        $this->render("edit");
    }
}
