<?php
require_once('base_controller.php');
include 'model/attributes.php';
include 'model/Product.php';

class ProductsController extends BaseController
{
  function __construct()
  {
    $this->folder = 'products';
  }

  // public function home()
  // {
  //   $data = array(
  //     'name' => 'Sang Beo',
  //     'age' => 22
  //   );
  //   $this->render('home', $data);
  // }

  public function create()
  {
      $atrr = new Attributes();
      $productSimple = new Product('simple',[]);
      $data = array(
        'attrColor' => $atrr->getAttributes('color'),
        'attrSize' => $atrr->getAttributes('size'),
        'productSimple' => $productSimple->getSimpleProduct()
      );
      $this->render('create', $data);
  }

  public function store()
  {
      //store product to database

  }

  public function error()
  {
    $this->render('error');
  }
}