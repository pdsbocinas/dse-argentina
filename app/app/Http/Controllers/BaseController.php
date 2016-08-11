<?php
	namespace App\Http\Controllers;

	use Illuminate\Foundation\Bus\DispatchesJobs;
	use Illuminate\Routing\Controller as BaseControllerLaravel;
	use Illuminate\Foundation\Validation\ValidatesRequests;
	use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
	use Illuminate\Foundation\Auth\Access\AuthorizesResources;
	use TwigBridge\Facade\Twig;

	class BaseController extends BaseControllerLaravel
	{
	    public function renderizar($plantilla, $parametros = [])
	    {
	    	//echo file_get_contents(base_path() . '/resources/views/' . $plantilla . '.html');
	    	return Twig::render($plantilla, $parametros);
	    } 
	}