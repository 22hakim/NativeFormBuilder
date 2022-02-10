<?php 

require_once 'Classe/Form.php';
require_once 'Classe/FormType/UserType.php';

(new UserType)->login();



require_once 'View/Login.php';