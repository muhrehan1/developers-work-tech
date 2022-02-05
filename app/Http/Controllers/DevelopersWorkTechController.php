<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevelopersWorkTechController extends Controller
{

    public function index()
    {
        $dynamic = [
            'title' =>'Developers Work Tech'
        ];
        return view('Front-end.partials.master-layout',$dynamic);
    }

}
