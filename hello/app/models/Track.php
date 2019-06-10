<?php

class Track extends Eloquent
{
	protected $table = 'Track';
	protected $primaryKey = 'TrackId';
	public $timestamps = false;

	public function album()
	{
		return $this->belongsTo('Album', 'AlbumId', 'AlbumId');
	}
}
