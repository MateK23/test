<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem;

use App\User;

class HomeController extends Controller
{
    public function index()
    {
    	$cooks = MenuItem::all();
    	foreach($cooks as $cook) {
    		echo $cook->cook_name;
    	}die;


    	return view('index');
    }
}


