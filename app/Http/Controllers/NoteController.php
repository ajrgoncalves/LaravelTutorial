<?php namespace App\Http\Controllers;


use App\Note;
use App\Card;
use Illuminate\Http\Request;

class NoteController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request, Card $card)
	{
		$this->validate($request, [
			'body' => 'required|min:10',
			]);

		$note = new Note($request->all());
		
		$card->addNote($note, 1);

		// $note = new Note;
		// $note->body = $request->body;
		//$card->addNote(new Note($request->all()));

		return back();		
		//return $request->all();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Note $note)

	{
		 //$note = Note::fidn($id);
		return view('notes.edit', compact('note'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, Note $note)
	{
		
		$note->update($request->all());

		return back();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
