<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComicsRequest;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComicsRequest $request)
    {
        // $data = $request->all();

        //  $request->validate([
        //     'title' => 'required|Unique:comics|max:160',
        //     'type' => 'max:255|nullable',
        //     'sale_date' => 'date|nullable',
        //     'price' => 'integer|nullable',
        //     'thumb' => 'nullable'
        //  ]);
        $data = $request->validated(); //attenzione alla forma verbale
        $comic = new Comic();
        

            // $comic->title = $data['title'];
            // $comic->description = $data['description'];
            // $comic->thumb = $data['thumb'];
            // $comic->price = $data['price'];
            // $comic->series = $data['series'];
            // $comic->sale_date = $data['sale_date'];
            // $comic->type = $data['type'];
            // $comic->artists = $data['artists'];
            // $comic->writers = $data['writers'];
        $comic->fill($data);
        
        $comic->save();
        

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comics = Comic::find($id);
        return view('comics.show', compact('comics'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {    
        $comics = Comic::findOrFail($id);
        return view('comics.edit', compact('comics'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $comic = Comic::findOrFail($id);
        $data = $this->validation($request->all());
        $comic->update($data);


        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = Comic::findOrFail($id);

        $comic->delete();
        return redirect()->route('user', $comic->id);
    }

    // public function validation($data) {
    //     $validation =Validator::make($data, [
    //         'title' => 'required|Unique:comics|max:160',
    //         'type' => 'max:255|nullable',
    //         'sale_date' => 'date|nullable',
    //         'price' => 'integer|nullable',
    //         'thumb' => 'nullable'
    //     ], [
    //         'title.required' => 'Titolo Obbligatorio',
    //         'date' => 'Inserire una data valida',
    //         'type' => 'descrizione troppo lunga',
    //         'price' => 'Il prezzo deve essere un numero'

    //     ])->validate();

    //     return $validation;
    // }
}
 