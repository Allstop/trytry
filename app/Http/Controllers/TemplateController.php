<?php namespace App\Http\Controllers;

class TemplateController extends Controller
{

    public static $template = null;
    
    public function __construct()
    {
        self::$template = new Template(implode('/', array(dirname(dirname(dirname(__DIR__))), 'public')));
    }

    public function index()
    {
        return self::$template->render();
    }
}
