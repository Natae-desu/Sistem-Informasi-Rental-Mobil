<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mobil;
class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mobil::paginate(10);
        return view("pages.mobil.list",compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.mobil.form");
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
            'kode' => 'required|max:5',
            'merek' => 'required|max:50',
            'type' => 'required|max:50',
            'tahun' => 'required|max:4',
            'bbm' => 'required|max:50',
            'harga' => 'required|max:50'

        ]);
        Mobil::create($request->except("_token"));

        $request->session()->flash("info","Berhasil Tambah Data Mobil");

        return redirect()->route("mobil.index");
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $data = Mobil::find($id);
    
        return view("pages.mobil.form",compact("data"));
    
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
                'kode' => 'required|max:5',
                'merek' => 'required|max:50',
                'type' => 'required|max:50',
                'tahun' => 'required|max:4',
                'bbm' => 'required|max:50',
                'harga' => 'required|max:50'
            ]);

        Mobil::where("id",$id)
                ->update($request->except(["_token","_method"]));

                $request->session()->flash("info","Berhasil Rubah Data Mobil");

        return redirect()->route("mobil.index");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mobil::destroy($id);

        return redirect()->route("mobil.index")
            ->with("info","Berhasil Hapus Data Mobil");
    }
}