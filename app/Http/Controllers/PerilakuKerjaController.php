<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerilakuKerjaController extends Controller
{
    //
    public function index()
    {
        return view('formperilakukerja');
    }


    public function updatePerilakuKerja()
    {
        return view('updateperilakukerja');
    }

    public function detailPerilakuKerja()
    {
        return view('printperilakukerja');
    }
}
