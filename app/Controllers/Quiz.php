<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Quiz extends Controller 
{
    public function index($course , $quiz){
        $data = [
            'course' => $course,
            'quiz' => $quiz
        ];
        return view('templates/quiz' , $data);
    }

}