<?php

namespace App\Http\Controllers;

use App\Models\PhongBan;
use Illuminate\Http\Request;

class PhongBanController extends Controller
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
        $phongban = PhongBan::all();
        return view('phongban.index', ['phongban' => $phongban]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('phongban.create');
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
        PhongBan::create($input);
        return redirect('phongban')->with('flash_message', 'Phòng ban Addedd!');
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
        $phongban = PhongBan::find($id);
        return view('phongban.show')->with('phongban', $phongban);
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
        $phongban = PhongBan::find($id);
        return view('phongban.edit')->with('phongban', $phongban);
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
        $phongban = PhongBan::find($id);
        $input = $request->all();
        $phongban->update($input);
        return redirect('phongban')->with('flash_message', 'Phòng ban Updated!');
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
        PhongBan::destroy($id);
        return redirect('phongban')->with('flash_message', 'Phòng ban deleted!');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $phongban = PhongBan::where('TenPB', 'like', '%' . $query . '%')
            ->orWhere('DiaChi', 'like', '%' . $query . '%')
            ->orWhere('NgayTL', 'like', '%' . $query . '%')
            ->get();

        return view('phongban.index', ['phongban' => $phongban]);
    }
}
