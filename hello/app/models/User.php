<?php

class User extends Eloquent
{

	public function groups()
	{
		return $this->belongsToMany('Group', 'users_groups');
	}
}
