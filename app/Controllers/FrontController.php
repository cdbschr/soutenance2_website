<?php

namespace BestMusic\Controllers;

class FrontController extends Controller {
  public function home(): void {
    require_once $this->viewFrontend('home');
  }

  public function categoriesPage(): void {
    require_once $this->viewFrontend('categoriesPage');
  }

  public function articlePage(): void {
    require_once $this->viewFrontend('articlePage');
  }

  public function rgpd(): void {
    require_once $this->viewFrontend('legals/rgpd');
  }

  public function mentionslegales(): void {
    require_once $this->viewFrontend('legals/mentionslegales');
  }
}