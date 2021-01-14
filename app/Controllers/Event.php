<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Event extends Controller 
{
    public function single(){
        return view('templates/event-single');
    }

    public function list(){
        return view('templates/events-list');
    }

}