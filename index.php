<?php 

require_once 'Classe/Form.php';
require_once 'Classe/FormType/UserType.php';
require_once 'Classe/FormType/ProductType.php';


$loginForm = (new UserType)->build();

$productForm = (new ProductType)->build();



require_once 'View/TestView.php';