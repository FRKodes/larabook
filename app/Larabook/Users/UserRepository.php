<?php namespace Larabook\Users;

use Larabook\Users\User;

class UserRepository
{
	
	/**
	* Persist a user
	*/	
	public function save(User $user){

		return $user->save();

	}

}