<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $anm = Anime::where('title', 'like', '%' . $request->search . '%')
                ->orWhere('sinopsis', 'like', '%' . $request->search . '%')
                ->orWhere('genre', 'like', '%' . $request->search . '%')
                ->orWhere('studio', 'like', '%' . $request->search . '%')
                ->orWhere('year', 'like', '%' . $request->search . '%')
                ->paginate(5);
            return view('Anime.anime')
                ->with('anm', $anm);
        }

        $anm = Anime::paginate(5);
        return view('Anime.anime')
        ->with('anm', $anm);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Anime.create_anime')
        ->with('url_form', url('/anime'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'sinopsis' => 'required|string',
            'genre' => 'required|string',
            'studio' => 'required|string',
            'year' => 'required|numeric',
        ]);

        Anime::create($request->all());
        return redirect('/anime')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anime  $anime
     * @return \Illuminate\Http\Response
     */
    public function show(Anime $anime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anime  $anime
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anm = Anime::find($id);
        return view('Anime.create_anime')
            ->with('anm', $anm)
            ->with('url_form',url('/anime/'.$id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Anime  $anime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'sinopsis' => 'required|string',
            'genre' => 'required|string',
            'studio' => 'required|string',
            'year' => 'required|numeric',
        ]);

        $data = Anime::where('id', '=', $id)->update($request->except('_token', '_method'));
        return redirect('/anime')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anime  $anime
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Anime::where('id', '=', $id)->delete();
        return redirect('anime')
        ->with('success', 'Data berhasil dihapus');
    }
}
