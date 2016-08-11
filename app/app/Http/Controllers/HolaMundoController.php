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

	    public function pagina1()
	    {
	    	return $this->renderizar('Home/component-home.twig');
	    }
	}
	

