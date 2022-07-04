<?php

namespace App\Http\Controllers;

use App\Comics;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics_list = Comics::all();
        return view('comics/index', compact('comics_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->getValidationRules());
        $data = $request->all();

        $new_comics = new Comics();
        $new_comics->title = $data['title'];
        $new_comics->series = $data['series'];
        $new_comics->type = $data['type'];
        $new_comics->price = $data['price'];
        $new_comics->save();

        return redirect()->route('comics.show', ['comics'=> $new_comics->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comics = Comics::find($id);
        return view('comics.show', compact('comics'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comics_to_update= Comics:: findOrFail($id);
        return view('comics.edit', compact('comics'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $comics_to_update = Comics::findOrFail($id);
        // return view('comics.edit', compact('comics_to_update'));
        $request->validate($this->getValidationRules());
        $data = $request->all();
        $comics_to_update = comics::finOrFail($id);
        $comics_to_update->update($data);

        return redirect()->route('comics.show', ['comics'=> $comics_to_update->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Array
     */
    public function destroy($id)
    {
        $comics = comics::findOrFail($id);
        $comics->delete();
        return redirect()->route('comics.index');
    }

    private function getValidationRules() {
        return [
            'title'=> 'required|max:100|min:3',
            'type' => 'required|max: 50|min:3',
            'descrpition' => 'required',
            'price' => 'required'
        ];
    }
}
