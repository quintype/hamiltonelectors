<?php

namespace App\Http\Controllers;

use App\Http\Controllers\QuintypeController;

class PreviewController extends QuintypeController
{
    public function home()
    {
        return view('previews/preview_home', $this->toView([]));
    }

    public function story()
    {
        return view('previews/preview_story', $this->toView([]));
    }

    public function takeaction()
    {
        return view('action/index', $this->toView([]));
    }

    public function whoare()
    {
        return view('who/index', $this->toView([]));
    }

    public function faq()
    {
        return view('faq/index', $this->toView([]));
    }
     public function stayintouch()
    {
        return view('contact/index', $this->toView([]));
    }
    
    


}
