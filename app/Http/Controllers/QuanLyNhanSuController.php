<?php

namespace App\Http\Controllers;

use App\Models\NhanVien;
use App\Models\PhongBan;
use App\Models\ViTri;
use Illuminate\Http\Request;

class QuanLyNhanSuController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     */

    public function TrangChu()
    {
        //

        return view('trangchu.trangchu');
    }
    public function indexNV()
    {
        //
        $nv = NhanVien::all();
        $pb = PhongBan::all();
        $vt = ViTri::all();
        return view('trangchu.nhanvien', ['nv' => $nv], ['vt' => $vt], ['pb' => $pb]);

        // $nv = NhanVien::with('PhongBan')->get();

        // return view('trangchu.nhanvien.index', compact('nv'));
    }

    public function indexPB()
    {
        //
        $pb = PhongBan::all();
        return view('trangchu.phongban', ['pb' => $pb]);
    }

    public function indexVT()
    {
        //
        $vt = ViTri::all();
        return view('trangchu.vitri', ['vt' => $vt]);
    }
}
