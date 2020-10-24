<?php

namespace App\Http\Controllers\Frontend;

class FrontendController
{
    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

}
