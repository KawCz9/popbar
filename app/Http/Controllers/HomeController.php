<?php

namespace App\Http\Controllers;

use App\Models\Bartables;
use App\Models\Bookingtables;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminhome(){
        $query = Bookingtables::all();
        $data = [
            'booking_data' => $query,
        ];
        return view('index_admin',$data);
    }

    public function userhome(){
        $query = Bartables::all();
        $data = [
            'table_data' => $query
        ];
        return view('index_user',$data);
    }

    public function home(){
        $query = Bartables::all();
        $data = [
            'table_data' => $query
        ];
        return view('index_user',$data);
    }

    
}
