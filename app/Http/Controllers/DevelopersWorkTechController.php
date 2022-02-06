<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevelopersWorkTechController extends Controller
{

    public function index()
    {
        $title ='Developers Work Tech';
        return view('Front-end.index',compact('title'));
    }

    public function about()
    {

        $title ='Developers Work Tech';
        return view('Front-end.about',compact('title'));
    }


    public function services()
    {
        $title ='Developers Work Tech';
        return view('Front-end.partials.services');

    }


    public function services_detail()
    {
        $title ='Developers Work Tech';
        return view('Front-end.partials.services_detail');
    }


    public function contact()
    {
        $data =[

            'title'=>'Contact Us' ,
            'contact'=> 'Contact'
        ];
        return view('Front-end.contact',$data);
    }
}
