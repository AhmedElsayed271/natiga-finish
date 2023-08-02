<?php

namespace App\Http\Controllers;

use App\Models\ReslutAdady;
use App\Models\ResultMhany;
use App\Imports\ResultMahan;
use Illuminate\Http\Request;
use App\Imports\Adadayahrara;
use App\Imports\NatigaImport;
use App\Imports\ThanwayAhrara;
use App\Imports\ThawanwayNazamy;
use App\Models\ResultThwanayAhrar;
use App\Imports\AdadayAhraraNazamy;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function import(Request $request)
    {
        Excel::import(new AdadayAhraraNazamy(), $request->file('file'));
    }

}
