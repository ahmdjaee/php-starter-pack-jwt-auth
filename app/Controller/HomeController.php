<?php

namespace Root\PHP\MVC\Controller;

use Root\PHP\MVC\App\View;

class HomeController extends Controller
{
    public function index()
    {
        View::render('index');
    }
}
