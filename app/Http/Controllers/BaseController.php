<?php

namespace App\Http\Controllers;

use App\Room;

class BaseController extends Controller
{
    public function getIndex (){
		
		$objs = Room::where('user_ip_second', '')
		->orderBy('id','DESC')
		->limit(100)->get();
		return view('welcome', compact('objs'));
	}
}
