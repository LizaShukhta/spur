<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;//подключение модели

class AjaxController extends Controller
{
  public function postIndex(){
   $objs = Room::where('user_ip_second', '')->orderBy('id','DESC')->limit(10)->get();
   return view('ajax.rooms',compact('objs'));
 }
 public function postRoom(){
	 $id = (int)$_POST['id'];
	 $obj = Room::find($id);
	 if($obj->user_ip_second != ''){
		$t = 60-date('s');
		if($t==0){
			echo 'start';
		}
	 }else {
		 $t = 'Ожидаем ...';
	 }
	 echo $t;
 }
}
