<?php

namespace App\Http\Controllers;

use App\Room;

class RoomController extends Controller
{
    public function getIndex($url=null){
		if(isset($_COOKIE[$url])){
			$text = 'Ожидаем ... ';	
            $t_user = 'me';			
		}
		else {
				$text = 'Таймер включен';
				$t_user = 'competitor';
				$obj=Room::find($url);
				if($obj->user_ip_second == ''){
				$obj->user_ip_second = $_SERVER['REMOTE_ADDR'];
				$obj->save();
				}else {
					return redirect('/');
				}
			}
		return view('room', compact('url', 'text', 't_user'));
	}
	public function getStart(){
		
		$obj = new Room;
		$obj->user_ip_first = $_SERVER['REMOTE_ADDR'];
		$obj->user_ip_second = '';
		$obj->status = 'new';
		$obj->user_id = 0;
		$obj->save();
		setcookie($obj->id,$obj->id,time()+3800,'/');
	return redirect('/room/'.$obj->id);
		
	}
}