<?php
require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

try {
  $frontController = new BestMusic\Controllers\FrontController();

  if (isset($_GET['action'])) {
    if ($_GET['action'] == "categoriesPage") {
      $frontController->categoriesPage();

    } else if ($_GET['action'] == "articlePage") {
      $frontController->articlePage();

    } else if ($_GET['action'] == "rgpd") {
      $frontController->rgpd();
    
    } elseif ($_GET['action'] == "mentionslegales") {
      $frontController->mentionslegales();
      
    }
  } else {
    $frontController->home();
  }
  
} catch (Exception $e) {
  require_once 'app/views/errors/oops.php';
}