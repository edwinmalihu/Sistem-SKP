<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SKPController extends Controller
{
    //tabel data skp view
    public function index()
    {
        return view('tabeldataskp');
    }

    // data skp view
    public function DataSKPView()
    {
        return view('formdataskp');
        
    }

    // Print data skp
    public function PrintDataSKP()
    {
        return view('printdataskp');
        
    }

    // Update data skp
    public function UpdateDataSKP()
    {
        return view('updatedataskp');
        
    }
}
