<?php

namespace Mvc\Controllers;

use Mvc\Config\Database;

use Mvc\Core\Controller;

use Mvc\Models\LedModel;

use Mvc\Models\LedRepository;

use Mvc\Models\CateModel;

use Mvc\Models\CateRepository;

use Mvc\Models\CheckoutModel;

use Mvc\Models\CheckoutRepository;

use Mvc\Models\CustommerModel;

use Mvc\Models\CustommerRepository;

use Mvc\Models\ImgModel;

use Mvc\Models\ImgRepository;

use Mvc\PHPMailer\PHPMailer;

use Mvc\PHPMailer\Exception;

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
            $d['led'] = $this->LedRepository->showAllLed($newLed);
            $this->set($d);

            $newCate = new CateModel();
            $rep = new CateRepository();

            $newImg = new ImgModel();
            $req = new ImgRepository();
            $d['img'] = $req->showAll($newImg);;
            $this->set($d);


        if(isset($_POST['search'])) {
            $search = $_POST['search'];

            $searchNew = trim($search);
            $arr_searchNew = explode(' ', $searchNew);
            $searchNew = implode('%', $arr_searchNew);
            $searchNew = '%'.$searchNew.'%';

            $newCate->setName($searchNew);
            $d['cate'] = $rep->getCate($searchNew);
            $this->set($d);

            $d['message'] = $search;
            $this->set($d);

            $this->render("search");

        } else {

            $d['top'] = $this->LedRepository->showTop5($newLed);
            $this->set($d);

            $d['cate'] = $rep->showAll($newCate);
            $this->set($d);

            $this->render("index");
        }
    }


    function contact()
    {
            $newLed = new LedModel();
            $d['led'] = $this->LedRepository->showAllLed($newLed);
            $this->set($d);

            $newCate = new CateModel();
            $rep = new CateRepository();

            $newImg = new ImgModel();
            $req = new ImgRepository();
            $d['img'] = $req->showAll($newImg);;
            $this->set($d);

        if(isset($_POST['search'])) {
            $search = $_POST['search'];
            
            $searchNew = trim($search);
            $arr_searchNew = explode(' ', $searchNew);
            $searchNew = implode('%', $arr_searchNew);
            $searchNew = '%'.$searchNew.'%';

            $newCate->setName($searchNew);
            $d['cate'] = $rep->getCate($searchNew);
            $this->set($d);

            $d['message'] = $search;
            $this->set($d);

            $this->render("search");

        } else {

            if (isset($_POST['toAddress'])) {
    
                if (empty($_POST['addName'])) {
                    $d['error'] = "Vui lòng nhập họ tên của bạn !";
                } elseif (empty($_POST['addReplyTo'])) {
                    $d['error'] = "Vui lòng nhập tiêu đề Email của bạn !";
                } elseif (empty($_POST['title'])) {
                    $d['error'] = "Vui lòng nhập tiêu đề tiêu đề của bạn !";
                } elseif (empty($_POST['content'])) {
                    $d['error'] = "Vui lòng nhập nội dung nội dung của bạn !";
                } else {
                    $mail = new PHPMailer(true);
                    try {
                        $mail->CharSet = "UTF-8";
                        $mail->SMTPDebug = 0;
                        $mail->isSMTP();
                        $mail->Host = 'smtp.gmail.com';
                        $mail->SMTPAuth = true;
                        $mail->Username = 'binzzz1101@gmail.com';
                        $mail->Password = 'Nthebac99';
                        $mail->SMTPSecure = 'ssl';
                        $mail->Port = '465';
    
                        $mail->setFrom($_POST['addReplyTo'], $_POST['addName']);
                        $mail->addAddress($_POST['toAddress']);
                        $mail->addReplyTo($_POST['addReplyTo'], $_POST['addName']);
                        //    $mail->addCC('CCemail@gmail.com');
                        //    $mail->addBCC('BCCemail@gmail.com');
                        $mail->isHTML(true);
                        $mail->Subject = $_POST['title'];
                        $mail->Body = $_POST['content'];
                        $mail->AltBody = $_POST['content'];
                        $result = $mail->send();
                        if (!$result) {
                            $d['error'] = "Lỗi trong quá trình gửi Mail !";
                        } else {
                            $d['error'] = "true";
                        }
    
                        $this->set($d);
                    } catch (Exception $e) {
                        $d['error'] = 'Lỗi không thực hiện được: ' . $mail->ErrorInfo;
                    }
                }
            }
    
            $d['top'] = $this->LedRepository->showTop5($newLed);
            $this->set($d);
    
            $d['cate'] = $rep->showAll($newCate);;
            $this->set($d);

    
            $this->render("contact");
        }
    }

    function categori($id)
    {
        $newLed = new LedModel();
        $d['led'] = $this->LedRepository->showAllLed($newLed);
        $this->set($d);

        $newCate = new CateModel();
        $rep = new CateRepository();

        $newImg = new ImgModel();
        $req = new ImgRepository();
        $d['img'] = $req->showAll($newImg);;
        $this->set($d);

        if(isset($_POST['search'])) {
            $search = $_POST['search'];
            
            $searchNew = trim($search);
            $arr_searchNew = explode(' ', $searchNew);
            $searchNew = implode('%', $arr_searchNew);
            $searchNew = '%'.$searchNew.'%';

            $newCate->setName($searchNew);
            $d['cate'] = $rep->getCate($searchNew);
            $this->set($d);

            $d['message'] = $search;
            $this->set($d);

            $this->render("search");

        } else {
            $d['cate'] = $rep->showAll($newCate);;
            $this->set($d);
    
            $d['cateAll'] = $rep->showAll($newCate);;
            $this->set($d);
        
            $d['ledAll'] = $this->LedRepository->showAll($newLed);
            $this->set($d);
    
            $d['top'] = $this->LedRepository->showTop5($newLed);
            $this->set($d);
    
            if ($id == 'all') {
                $d['message'] = 'Tất Cả Sản Phẩm';
                $this->set($d);
            } else {
                $arr = $this->LedRepository->showAllLed($newLed);
    
                $d['led'] = [];
    
                foreach ($arr as $key => $value) {
    
                    if ($value['categori_id'] == $id) {
                        $d['led'][$key] = $value;
                    }
                }
    
                $this->set($d);
    
                $d['cateMessage'] = $rep->getId($id);
                $this->set($d);
            }
    
            $this->render("categori");
        }

    }


    public function cart($id, $quantity)
    {
        $newLed = new LedModel();
        $d['led'] = $this->LedRepository->showAllLed($newLed);
        $this->set($d);

        $newCate = new CateModel();
        $rep = new CateRepository();

        $newImg = new ImgModel();
        $req = new ImgRepository();
        $d['img'] = $req->showAll($newImg);;
        $this->set($d);

        if(isset($_POST['search'])) {
            $search = $_POST['search'];
            
            $searchNew = trim($search);
            $arr_searchNew = explode(' ', $searchNew);
            $searchNew = implode('%', $arr_searchNew);
            $searchNew = '%'.$searchNew.'%';

            $newCate->setName($searchNew);
            $d['cate'] = $rep->getCate($searchNew);
            $this->set($d);

            $d['message'] = $search;
            $this->set($d);

            $this->render("search");

        } else {

            if (isset($_SESSION['cart'][$id])) {
    
                if (isset($_POST['sum'])) {
    
                    foreach ($_POST['sum'] as $id => $sum) {
                        if ($sum == 0) {
                            unset($_SESSION['cart'][$id]);
                        } elseif ($sum > 0) {
    
                            $_SESSION['quantity'][$id] = $sum;
                        }
                    }
                } else {
    
                    if ($quantity != '0') {
                        $_SESSION['quantity'][$id] = $_SESSION['quantity'][$id] + $quantity;
                    }
                }
            } else {
                $_SESSION['cart']['all'] = 1;
    
    
                $_SESSION['cart'][$id] = 1;
                $_SESSION['quantity'][$id] = $quantity;

            }
    
            if (isset($_SESSION['cart'])) {
    
                $arrId = [];
    
                foreach ($_SESSION['cart'] as $id => $value) {
                    if ($id != 'all') {
                        $arrId[] = $id;
                    }
                }
    
                $newLed->setId($id);
                $arrLed = $this->LedRepository->showAll($newLed);
    
                $d['led'] = [];
                foreach ($arrLed as $keyLed => $valueLed) {
    
                    foreach ($arrId as $keyArr => $valueArr) {
    
                        if ($valueLed['id'] == $valueArr) {
    
                            $d['led'][$keyArr] = $valueLed;
                        }
                    }
                }
                $this->set($d);
    
                $d['top'] = $this->LedRepository->showTop5($newLed);
                $this->set($d);
            }
    
            $this->render("cart");
        }
    }

    function checkout()
    {
        $newLed = new LedModel();
        $d['led'] = $this->LedRepository->showAllLed($newLed);
        $this->set($d);

        $newCate = new CateModel();
        $rep = new CateRepository();

        $newImg = new ImgModel();
        $req = new ImgRepository();
        $d['img'] = $req->showAll($newImg);;
        $this->set($d);

        if(isset($_POST['search'])) {
            $search = $_POST['search'];
            
            $searchNew = trim($search);
            $arr_searchNew = explode(' ', $searchNew);
            $searchNew = implode('%', $arr_searchNew);
            $searchNew = '%'.$searchNew.'%';

            $newCate->setName($searchNew);
            $d['cate'] = $rep->getCate($searchNew);
            $this->set($d);

            $d['message'] = $search;
            $this->set($d);

            $this->render("search");

        } else {

            $d['top'] = $this->LedRepository->showTop5($newLed);
            $this->set($d);
    
            if (isset($_SESSION['cart'])) {
    
                $arrId = [];
    
                foreach ($_SESSION['cart'] as $id => $value) {
                    $arrId[] = $id;
                }
    
                $newLed->setId($id);
                $arrLed = $this->LedRepository->showAll($newLed);
    
                $d['led'] = [];
                foreach ($arrLed as $keyLed => $valueLed) {
    
                    foreach ($arrId as $keyArr => $valueArr) {
    
                        if ($valueLed['id'] == $valueArr) {
    
                            $d['led'][$keyArr] = $valueLed;
                        }
                    }
                }
    
                $this->set($d);
            }
    
            if (isset($_POST['name'])) {
    
                $quantitys = $_POST['quantity'];
                $prices = $_POST['price'];
                $priceOnes = $_POST['priceone'];
    
                $address = $_POST["village"] . '-' . $_POST["district"] . '-' . $_POST["city"];
    
                $Cus = new CustommerModel();
                $req = new CustommerRepository();
    
                $Cus->setName($_POST["name"]);
                $Cus->setAddress($address);
                $Cus->setEmail($_POST["email"]);
                $Cus->setTell($_POST["tell"]);
                $Cus->setCreate_at(date("Y-m-d h:i:s"));
    
                if ($req->add($Cus)) {
                    $conn = new Database();
    
                    $cus_id = $conn->getBdd()->lastInsertId();
    
                    foreach ($quantitys as $keyQuantity => $valueQuantity) {
                        foreach ($prices as $keyPrice => $valuePrice) {
                            if ($keyQuantity == $keyPrice) {
                                $quantity = $valueQuantity;
    
                                foreach ($priceOnes as $keyPriceOne => $valuePriceOne) {
                                    if ($keyPrice == $keyPriceOne) {
                                        $priceOne = $valuePriceOne;
                                        $price = $valuePrice;
                                    }
                                }
                            }
                        }
    
                        $Check = new CheckoutModel();
                        $rep = new CheckoutRepository();
    
                        $Check->setLed_id($keyQuantity);
                        $Check->setCus_id($cus_id);
                        $Check->setCount($quantity);
                        $Check->setPrice($priceOne);
                        $Check->setTotal_price($price);
                        $Check->setCreate_at(date("Y-m-d h:i:s"));
    
                        $result = $rep->add($Check);
                    }
    
                    if ($result) {
                        unset($_SESSION['cart']);
    
                        $d['notification'] = "Đã đặt hàng thành công !";
                        $this->set($d);
                    }
                }
            }
    
            $this->render("checkout");
        }
    }

    function product($id)
    {
        $newLed = new LedModel();

        $newCate = new CateModel();
        $rep = new CateRepository();

        $newImg = new ImgModel();
        $req = new ImgRepository();
        $d['img'] = $req->showAll($newImg);;
        $this->set($d);

        if(isset($_POST['search'])) {
            $search = $_POST['search'];
            
            $searchNew = trim($search);
            $arr_searchNew = explode(' ', $searchNew);
            $searchNew = implode('%', $arr_searchNew);
            $searchNew = '%'.$searchNew.'%';

            $newCate->setName($searchNew);
            $d['cate'] = $rep->getCate($searchNew);
            $this->set($d);

            $d['message'] = $search;
            $this->set($d);

            $d['led'] = $this->LedRepository->showAllLed($newLed);
            $this->set($d);

            $this->render("search");

        } else {

            $newLed->setId($id);
            $d["led"] = $this->LedRepository->getId($id);
            $this->set($d);
    
            $d['top'] = $this->LedRepository->showTop5($newLed);
            $this->set($d);
    
            $this->render("product");
        }
    }
}
