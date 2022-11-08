<?php

namespace BestMusic\Controllers;

class Controller {
	public function viewFrontend($view): string	{
		return 'app/Views/frontend/' . $view . '.php';
	}
}