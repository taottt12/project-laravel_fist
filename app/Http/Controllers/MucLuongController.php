<?php

namespace App\Http\Controllers;

use App\Models\MucLuong;
use Illuminate\Http\Request;


class MucLuongController extends Controller
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
        $mucluong = MucLuong::all();
        return view('mucluong.index', ['mucluong' => $mucluong]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mucluong.create');
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
        MucLuong::create($input);
        return redirect('mucluong')->with('flash_message', 'Mức lương Addedd!');
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
        $mucluong = MucLuong::find($id);
        return view('mucluong.show')->with('mucluong', $mucluong);
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
        $mucluong = MucLuong::find($id);
        return view('mucluong.edit')->with('mucluong', $mucluong);
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
        $mucluong = MucLuong::find($id);
        $input = $request->all();
        $mucluong->update($input);
        return redirect('mucluong')->with('flash_message', 'Mức lương Updated!');
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
        MucLuong::destroy($id);
        return redirect('mucluong')->with('flash_message', 'Mức lương deleted!');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $mucluong = MucLuong::where('Mucthap', 'like', '%' . $query . '%')
            ->orWhere('Muccao', 'like', '%' . $query . '%')
            ->get();

        return view('mucluong.index', ['mucluong' => $mucluong]);
    }
}
