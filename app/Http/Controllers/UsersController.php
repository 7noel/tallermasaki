<?php namespace App\Http\Controllers;

use App\User;

class UsersController extends Controller {


	public function getIndex()
	{
        $user=User::first();
        dd($user->profile->age);
		$result=\DB::table('users')
		->select('users.*','user_profiles.id as profile_id','user_profiles.twitter')
		//->where('first_name','<>','Noel')
		->orderBy('id','asc')
		->leftJoin('user_profiles','users.id','=','user_profiles.user_id')
		->get();
		dd($result);
		return $result;
	}


}
