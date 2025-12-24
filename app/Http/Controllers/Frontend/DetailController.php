<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailController extends Controller
{
        public function rice(){
        return view('frontend.rice-detail');
    }

          public function coffee(){
        return view('frontend.coffee-detail');
    }

          public function corn(){
        return view('frontend.corn-detail');
    }

    public function cashewnuts(){
        return view('frontend.cashewnuts-detail');
    }

    public function potatocassava(){
        return view('frontend.potatocassava-detail');
    }

    public function mango(){
        return view('frontend.mango-detail');
    }
}
