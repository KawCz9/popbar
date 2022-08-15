<?php

namespace App\Http\Controllers;

use App\Models\Bartables;
use Illuminate\Http\Request;

class BarTableController extends Controller
{
    public function bartable(){
        $query = Bartables::all();
        $data = [
            'table_data' => $query
        ];
        return view('home',$data);
    }
}
