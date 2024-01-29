<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comicsItems=Comic::all();
        return view('comics.index',compact("comicsItems"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("comics.create");
        // return redirect()->route('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
        [
            'title'=>'required|max:50',
            'description'=>'required|min:20',
            'thumb'=>'required',
            'price'=>'required',
            'series'=>'required|max:50',
            'sale_date'=>'required',
            'type'=>'required|max:50',
        ],
        [
            'title.required'=>'Requisito Necessario',
            'title.max'=>'Numero caratteri consentiti superato',
            'description.required'=>'Requisito Necessario',
            'description.min'=>'Numero caratteri minimi non raggiunto',
            'thumb.required'=>'Requisito Necessario',
            'price.required'=>'Requisito Necessario',
            'series.required'=>'Requisito Necessario',
            'series.max'=>'Numero caratteri consentiti superato',
            'sale_date.required'=>'Requisito Necessario',
            'type.required'=>'Requisito Necessario',
            'type.max'=>'Numero caratteri consentiti superato',
        ]
    );
        $data = $request->all();
        $newComic = new Comic();
        // $newComic->title = $data["title"];
        // $newComic->description = $data["description"];
        // $newComic->type = $data["type"];
        // $newComic->series = $data["series"];
        // $newComic->thumb = $data["thumb"];
        // $newComic->price = $data["price"];
        // $newComic->sale_date = $data["sale_date"];
        $newComic->fill($data); //prende tutti i dati dalla richiesta e li usa per popolare ma prima si validano i dati
        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);  //per non far riaggiungere l'item piu volte al caricamento
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact("comic")); //comic da errore
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit',compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->except('_token' , '_method');
        $comic->update($data);

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
     {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
