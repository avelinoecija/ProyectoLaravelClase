<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use App\Games;
use Illuminate\Http\Request;

class CatalogController extends Controller {

	public function getIndex() {
		return view('catalog.index')->with('juegos', Games::all());
	}

	public function getShow($id) {
		return view('catalog.show')->with('juego', Games::findOrFail($id));
	}

	public function getCreate() {
		return view('catalog.create');
	}

	public function getEdit($id) {
		return view('catalog.edit')->with('juego', Games::findOrFail($id));
	}
	public function postCreate(Request $request) {
		$p = new Games;
		$p->name = $request->input('name');
		$p->price = $request->input('price');
		$p->category = $request->input('category');
		$p->image = $request->input('image');
		$p->video = $request->input('video');
		$p->key = $request->input('key');
		$p->description = $request->input('description');
		$p->save();
		
		return redirect()->action('CatalogController@getIndex'.$id);

	}
	public function putEdit(Request $request, $id) {
		$p = Games::findOrFail($id);
		$p->name = $request->input('name');
		$p->price = $request->input('price');
		$p->category = $request->input('category');
		$p->image = $request->input('image');
		$p->video = $request->input('video');
		$p->key = $request->input('key');
		$p->description = $request->input('description');
		$p->save();
		
		return view('catalog.show')->with('pelicula', Games::findOrFail($id));
	}
}

?>