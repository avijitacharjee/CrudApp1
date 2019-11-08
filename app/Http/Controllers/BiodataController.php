<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Biodata;

class BiodataController extends Controller
{
    //
    public function index()
    {
        $biodata= Biodata::latest()->paginate(5);
        return view('biodata.index',compact($biodata))->with('i',(request()->input('page',1)-1)*5);
    }
    
}
