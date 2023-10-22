<?php

namespace App\Http\Controllers;


use App\Models\ViTri;
use Illuminate\Http\Request;


class ViTriController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vitri = ViTri::all();
        return view('vitri.index', ['vitri' => $vitri]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('vitri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        ViTri::create($input);
        return redirect('vitri')->with('flash_message', 'Vị trí Addedd!');
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
        $vitri = ViTri::find($id);
        return view('vitri.show')->with('vitri', $vitri);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Lấy thông tin student có id tương ứng
        $vitri = ViTri::find($id);
        return view('vitri.edit')->with('vitri', $vitri);
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
        //
        $vitri = ViTri::find($id);
        $input = $request->all();
        $vitri->update($input);
        return redirect('vitri')->with('flash_message', 'Vị trí Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        ViTri::destroy($id);
        return redirect('vitri')->with('flash_message', 'Vị trí deleted!');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $vitri = ViTri::where('mota', 'like', '%' . $query . '%')
            ->get();

        return view('vitri.index', ['vitri' => $vitri]);
    }
}
