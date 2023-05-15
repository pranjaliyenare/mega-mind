<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['page']='index';
        echo  view('default/header',$data);
        echo  view('default/navbar');
        echo  view('pages/index');
        echo  view('default/footer');
        //return view('welcome_message');
    }

    //about
    public function about()
    {
        $data['page']='about';
        echo  view('default/header',$data);
        echo  view('default/navbar');
        echo  view('pages/about');
        echo  view('default/footer');
    }

    //courses   
    public function courses()
    {
        $data['page']='courses';
        echo  view('default/header',$data);
        echo  view('default/navbar');
        echo  view('pages/courses');
        echo  view('default/footer');
    }

    //downloadCourses
    public function downloadCourses()
    {
        $data['page']='downloadCourses';
        echo  view('default/header',$data);
        echo  view('default/navbar');
        echo  view('pages/downloadCourses');
        echo  view('default/footer');
    }

    //contactUs
    public function contactUs()
    {
        $data['page']='contactUs';
        echo  view('default/header',$data);
        echo  view('default/navbar');
        echo  view('pages/contactUs');
        echo  view('default/footer');
    }
}
