<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NilaiSKPController extends Controller
{
    //
    public function FormInputSKP(){
        return view('forminputnilaiskp');
    }

    public function UpdateInputSKP(){
        return view('updateinputnilaiskp');
    }

    public function detailSKP(){
        return view('printinputnilaiskp');
    }

}
