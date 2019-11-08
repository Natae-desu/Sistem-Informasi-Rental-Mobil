<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\supir;

class supircontroller extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = supir::paginate(10);
        return view("pages.supir.list",compact("data"));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.supir.form");
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
            'nama' => 'required|max:50',
            'telepon' => 'required|max:25',
            'email' => 'required|email|max:50'
        ]);
        supir::create($request->except("_token"));
        $request->session()->flash("info","Berhasil Tambah Data Supir");
        return redirect()->route("supir.index");
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = supir::find($id);
        return view("pages.supir.form",compact("data"));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $request->validate([
            'nama' => 'required|max:50',
            'telepon' => 'required|max:25',
            'email' => 'required|email|max:50'
        ]);
        supir::where("id",$id)
                ->update($request->except(["_token","_method"]));
        $request->session()->flash("info","Berhasil Rubah Data supir");
        return redirect()->route("supir.index");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        supir::destroy($id);
        return redirect()->route("supir.index")
            ->with("info","Berhasil Hapus Data supir");
    }
}
