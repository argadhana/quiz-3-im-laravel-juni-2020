<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = ArtikelModel::get_all();
        return view('artikel.index', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artikel.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $isi = $request->all();
        unset($isi['_token']);
        $slug = strtolower($isi['judul']);
        $slug = str_replace(" ", "-", $slug);
        $isi += ['slug'=>$slug, 'user_id'=>1];
        $cek = ArtikelModel::save($isi);
        if ($cek){
            return redirect('/artikel');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikel = ArtikelModel::find_by_id($id);
        return view('artikel.info', compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = ArtikelModel::find_by_id($id);
        return view('artikel.edit', compact('artikel'));
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
        $isi = $request->all();
        unset($isi['_token']);
        unset($isi['_method']);
        $slug = strtolower($isi['judul']);
    	$slug = str_replace(" ", "-", $slug);
    	$isi['slug'] = $slug;
        $artikel = ArtikelModel::update($id, $isi);
        return redirect('/artikel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = ArtikelModel::delete($id);
        return redirect('/artikel');
    }
}
