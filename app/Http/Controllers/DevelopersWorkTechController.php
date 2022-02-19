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

        $data = [
            'title'=>'About | Developers Work Tech',
            'breadcrumb_about'=>'About',
            'section1smallheading'=>'About',
            'sectiononemainheading'=>'We Are Increasing Business Success With Technology',
            'sectiononebtn'=>'Learn More',
            'sectiontwosmallheading'=>'Team',
            'sectiontwomainheaing'=>'Expert IT Consultants',
            'sectionthreesmallheading'=>'Process',
            'sectionthreemainheading'=>'Our Working Process',
            ''
        ];
        return view('Front-end.about',$data);
    }


    public function services()
    {
        $title ='Developers Work Tech';
        return view('Front-end.partials.services');

    }


    public function service_detail()
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


    public function software_development()
    {
        $data = [
            'title'=>'Software Development'

        ];

        return view('Front-end.software-development',$data);
    }


    public function website_development()
    {
        $data =  [
            'title'=>'Web Development'
        ];
        return view('Front-end.web-development',$data);
    }

    public function analytics_solutions()
    {
        $data  = [
            'title'=>'Analytic Solutions'
        ];

        return view('Front-end.analytics-solutions',$data);

    }

    public function cloud_and_devop()
    {
        $data  =['title' =>'Cloud And DevOps'];
        return view('Front-end.cloud-and-devops',$data);

    }

    public function product_design()
    {
        $data = [

            'title'=>'Product Design'
        ];
        return view('Front-end.product-design',$data);
    }

    public function data_center()
    {
        $data = [
          'title'=>'Data Center'
        ];

        return view('Front-end.data-center',$data);

    }

    public function our_team()
    {
        $data= ['title'=>'Our Team'];
        return view('Front-end.our-team',$data);


    }

    public function single_team()
    {
        $data = [
            'title'=>'Single Team'
        ];

        return view('Front-end.single-team',$data);

    }

    public function case_studies()
    {
        $data = [
            'title'=>'Case Studies'
        ];

        return view('Front-end.case-studies',$data);
    }

    public function our_pricing ()
    {
            $data = [
                'title'=>'Our Pricing'
            ];

            return view('Front-end.our-pricing',$data);

    }

    public function  Packages()
    {
        $data = [
            'title'=>'Pacakages',
            'breadcrumb_pacakages'=>'Packages'
        ];
        return view('Front-end.packages-all',$data);
    }
}
