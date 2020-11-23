<?php
namespace Mvc\Controllers;

use Mvc\Core\Controller;

use Mvc\Models\AdminModel;

use Mvc\Models\AdminRepository;


class AdminsController extends Controller
{

    private $AdminRepository;

    public function __construct(){
        $this->AdminRepository = new AdminRepository();
    }

    function admin($page)
    {   
        $newAdmin = new AdminModel();

        if(isset($_POST['delete'])) {

            $id = $_POST['delete'];

            $newAdmin->setId($id);

            if ($this->AdminRepository->delete($newAdmin))
            {
                $d['admin'] = $this->AdminRepository->showAll($newAdmin);
                $this->set($d);
    
                $this->render("admin");
            }

        } else {
            $d['admin'] = $this->AdminRepository->showAll($newAdmin);
            $this->set($d);

            if($page == 'home') {
                $this->render("home");
    
            } else {
                $this->render("admin");
            }
        }

    }

    function create()
    {
        if (isset($_POST["name"])) {
            $pass = $_POST['password'];
            $repass = $_POST['repassword'];

            if($pass == $repass) {

                if (isset($_FILES["image"])) {
                                    
                    $fileUpload = $_SERVER['DOCUMENT_ROOT'] . '/Admin/Views/Imgadmin/';
    
                    $file = $_FILES["image"]['name'];
                    $tmp = $_FILES["image"]["tmp_name"];
    
                    $filename = implode($file);
                    $tmpname = implode($tmp);
    
                    if ($filename == UPLOAD_ERR_OK && $filename != '') {
    
                        $tmp_name = $tmpname;
                        $name = basename($filename);
                        move_uploaded_file($tmp_name, "$fileUpload/$name");
    
                        $Admin= new AdminModel();
                        $Admin->setName($_POST["name"]);
                        $Admin->setImg($name);
                        $Admin->setUsername($_POST["username"]);
                        $Admin->setPassword(sha1($_POST["password"]));
                        $Admin->setEmail($_POST["email"]);
                        $Admin->setTell($_POST["tell"]);
                        $Admin->setCreate_at(date("Y-m-d h:i:s"));
            
                        if ($this->AdminRepository->add($Admin)) {
            
                            header("Location: " . WEBROOT . "Admins/admin/");
                        }

                    } else {
                        $d["message"] = 'Thông báo * Hãy thêm ảnh Admin';
    
                    }
                } 

            } else {
                $d["message"] = 'Thông báo * Mật khẩu không trùng khớp';
            }
            $this->set($d);
        }

        $this->render("create");
    }

    function edit($id)
    {
        $Admin = new AdminModel();

        if (isset($_POST["name"])) {

            $pass = $_POST['password'];
            $repass = $_POST['repassword'];

            if($pass == $repass) {

                if (isset($_FILES["image"])) {
                                        
                    $fileUpload = $_SERVER['DOCUMENT_ROOT'] . '/Admin/Views/Imgadmin/';
        
                    $file = $_FILES["image"]['name'];
                    $tmp = $_FILES["image"]["tmp_name"];
        
                    $filename = implode($file);
                    $tmpname = implode($tmp);
        
                    if ($filename == UPLOAD_ERR_OK && $filename != '') {
                  
                        $tmp_name = $tmpname;
                        $name = basename($filename);
                        move_uploaded_file($tmp_name, "$fileUpload/$name");
        
                        $Admin= new AdminModel();
                        $Admin->setId($id);
        
                        $Admin->setName($_POST["name"]);
                        $Admin->setImg($name);
                        $Admin->setUsername($_POST["username"]);
                        $Admin->setPassword(sha1($_POST["password"]));
                        $Admin->setEmail($_POST["email"]);
                        $Admin->setTell($_POST["tell"]);
                        $Admin->setUpdate_at(date("Y-m-d h:i:s"));
            
                        if ($this->AdminRepository->update($Admin)) {
            
                            header("Location: " . WEBROOT . "Admins/admin/");
                        }

                    } else {
                        $d["message"] = 'Thông báo * Hãy thêm ảnh Admin';
    
                    }
                }         
            } else {
                $d["message"] = 'Thông báo * Mật khẩu không trùng khớp';
            }
            $this->set($d);
        }

        $d["admin"] = $this->AdminRepository->getId($id);

        $this->set($d);
        $this->render("edit");
    }

    function login($out)
    {
        if(isset($_POST['submit'])) {
            $repone = new AdminRepository();
            $resuft =  $repone->check($_POST['username'], sha1($_POST['password']));
            if($resuft) {
                $_SESSION['username'] = $resuft['username'];
                $_SESSION['name'] = $resuft['name'];
                $_SESSION['img'] = $resuft['img'];
                
                header('Location: /Admin/Leds/index');
            } else {
                $d['message'] = 'Tài khoản hoặc mật khẩu không chính xác!';
                $this->set($d);

                $d['login'] = 'Đăng nhập lại';
                $this->set($d);
            }
            
        }
        if($out == 'out') {
            unset($_SESSION['username']);
        }
        
        $this->render("login");
    }
}

