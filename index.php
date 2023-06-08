<?php
use vendor\autoload;
use Classes\Models\Brand;
use Classes\Models\BrandManager;
use Classes\Models\BrandController;

require_once('conf/constantes.php');

require_once ROOT . '/vendor/autoload.php';
require_once 'classes\Models\Brand.php';
require_once 'classes\Models\BrandController.php';
require_once 'classes\Models\BrandManager.php';

$brand = new Brand();
$brand->hydrate(['name'=>'une marque en ECF']);

//var_dump($brand->isNew());

//var_dump($brand);
$manager = new BrandController();
var_dump($manager->index());
//var_dump($manager->findAll());
//var_dump($manager->find(2));
// var_dump($manager->create($brand));