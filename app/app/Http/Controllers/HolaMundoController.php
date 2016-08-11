<?php
	namespace App\Http\Controllers;

	use App\Http\Controllers\BaseController;
	
	class HolaMundoController extends BaseController {
		
		public function holaMundo()
	    {
	    	return $this->renderizar('welcome.twig');
	    }

	    public function home()
	    {
	    	return $this->renderizar('Home.twig');
	    }
	}
	

