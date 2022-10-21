<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerhitunganSKPController extends Controller
{

    //
    public function index()
    {
        return view('formperhitunganskp');
    }

    public function updatePerhitungan()
    {
        return view('updateperhitunganskp');
    }

    public function detailPerhitungan()
    {
        return view('printperhitunganskp');
    }

    public function PDFPerhitungan()
    {
        return view('perhitunganskppdf');
    }
}
