<?php

namespace BestMusic\Controllers;

class FrontController extends Controller {
  public function home(): void {
    require_once $this->viewFrontend('home');
  }

  public function rgpdPage(): void {
    require_once $this->viewFrontend('legals/rgpd');
  }

  public function mentionsPage(): void {
    require_once $this->viewFrontend('legals/mentionslegales');
  }
}