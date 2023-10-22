<?php

namespace App\Http\Controllers;

use App\Models\NhanVien;
use App\Models\PhongBan;
use App\Models\ViTri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NhanVienController extends Controller
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
        // $nhanvien = NhanVien::all();

        // $nhanvien = DB::table('nhan_vien')
        //     ->leftJoin('vi_tri', 'nhan_vien.MaVT',  'vi_tri.id')
        //     ->leftJoin('phong_ban', 'nhan_vien.MaPB', 'phong_ban.id')
        //     ->select(
        //         'nhan_vien.*',
        //         'vi_tri.mota as mota',
        //         'phong_ban.TenPB as TenPB'
        //     )
        //     ->get();
        $NV = DB::table('nhan_vien')
            ->join('vi_tri', 'nhan_vien.MaVT', '=', 'vi_tri.MaVT')
            ->join('phong_ban', 'nhan_vien.MaPB', '=', 'phong_ban.MaPB')
            ->select(
                'nhan_vien.*',
                'nhan_vien.id',
                'nhan_vien.TenNV',
                'vi_tri.mota',
                'phong_ban.TenPB',
                'nhan_vien.Luong',
                'nhan_vien.NgayVL'
            )
            ->get();

        return view('nhanvien.index', ['NV' => $NV]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $phongban = PhongBan::all();
        $vitri = ViTri::all();
        return view('nhanvien.create', compact('phongban'), compact('vitri'));
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
        NhanVien::create($input);
        return redirect('nhanvien')->with('flash_message', 'Nhân viên Addedd!');
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
        $nhanvien = NhanVien::find($id);
        return view('nhanvien.show')->with('nhanvien', $nhanvien);
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
        $phongban = PhongBan::all();
        $vitri = ViTri::all();
        $nhanvien = NhanVien::find($id);
        return view('nhanvien.edit', compact('nhanvien', 'phongban'), compact('nhanvien', 'vitri'));
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
        $nhanvien = NhanVien::find($id);
        $input = $request->all();
        $nhanvien->update($input);
        return redirect('nhanvien')->with('flash_message', 'Nhân viên Updated!');
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
        NhanVien::destroy($id);
        return redirect('nhanvien')->with('flash_message', 'Nhân viên deleted!');
    }
    public function search(Request $request)
    {
        $query = $request->input('query');

        $nhanvien = NhanVien::where('TenNV', 'like', '%' . $query . '%')
            ->orWhere('MaVT', 'like', '%' . $query . '%')
            ->orWhere('MaPB', 'like', '%' . $query . '%')
            ->orWhere('Luong', 'like', '%' . $query . '%')
            ->orWhere('NgayVL', 'like', '%' . $query . '%')
            ->get();

        return view('nhanvien.index', ['nhanvien' => $nhanvien]);
    }
}
