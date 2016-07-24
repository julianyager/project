<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
	//can be mass assigned within artisans tinker
	protected $fillable = ['body'];

	public function by(User $user)
	{
		$this->user_id= $user->id;
	}


	//note belongs to one card
    public function card()
	{
		return $this->belongsTo(Card::class);
	}

	//note also belongs to a user
	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
