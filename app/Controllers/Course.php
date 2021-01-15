<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Course extends Controller 
{
    public function single(){

        return view('templates/course-single');
    }

    public function list(){
        return view('templates/courses-list');
    }

}