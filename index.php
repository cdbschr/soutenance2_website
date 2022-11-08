<?php
require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

try {
  $frontController = new \BestMusic\controllers\FrontController();

  if (isset($_GET['action'])) {
    // if ($_GET['action'] == "rgpd") {
    //   $frontController->rgpd();
    
    // } elseif ($_GET['action'] == "mentionslegales") {
    //   $frontController->mentionslegales();
    // }

  } else {
    $frontController->home();
  }
  
} catch (Exception $e) {
  require_once 'app/views/errors/oops.php';
}