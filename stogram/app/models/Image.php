<?php

class Image extends Eloquent
{
	public function comments()
	{
		return $this->hasMany('Comment');
	}	
}
