<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
         $abc = User::all();
        // $abc=DB::select('select * from users'); ##SQL
        // $abc=DB::select('select * from users where id = 5'); 
        // $abc = DB::table('users')->where('id', 5)->get()->toArray();
        // dd($abc);
        return view('welcome',[
            'users' => $abc
        ]);
       
    }
}
