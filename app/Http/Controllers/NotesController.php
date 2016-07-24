<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Note;
use App\Card;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class NotesController extends Controller
{
    public function addNote(Request $request, Card $card)
		{
			//validate the body against the request object
			$this->validate($request, [
				'body' => 'required|min:10',
			]);

			//new instance of a note
			$note = new Note($request->all());

			//find current user, from function created in card model
			//adding a new note at post
			$card->addNote($note, 1);

			return back();
		}

		public function edit(Note $note)
		{
			//looking for a note ID, then going to a page to edit
			return view('notes.edit')->withNote($note);
		}

		public function update(Request $request, Note $note)
		{
			//using patch function to update accordingly.
			$note->update($request->all());

			return redirect('cards/' . $note->card->id);
		}
}
