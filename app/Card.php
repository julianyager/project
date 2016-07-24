<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function notes()
	{
		//one to many
		return $this->hasMany(Note::class);
	}

	public function addNote(Note $note, $userId)
	{
		//note belongs to user Id value we are passing through from controller
		$note->user_id = $userId;

		//save note
		return $this->notes()->save($note);
	}
}
