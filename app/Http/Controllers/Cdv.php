<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Cdv extends Controller
{
    public function index() {
        // $data = DB::table('user')->count();
        // echo $data;

        // return DB::select('SELECT COUNT(*) FROM user');
        
        // return DB::table('user')
        // ->where('surname', 'Nowak')
        // ->get();

        // $data = DB::table('user')->first();
        // echo $data->name;
        // print_r($data);

        // return DB::table('user')
        // ->where('id', 2)
        // ->delete();

        // return DB::table('user')
        // ->insert(['name'=>'John', 
        // 'surname'=>'Snow', 
        // 'birthday'=>'1990-01-01']);

        // $data = DB::table('user')
        // ->where('surname', 'Nowak')
        // ->update(['surname'=> 'Pawlak']);
        // print_r($data);

        // $data = DB::table('user')->max('height');
        // $data = DB::table('user')->min('height');
        // $data = DB::table('user')->sum('height');
        // $data = DB::table('user')->count('height');
        // print_r (round($data,2));
        
        
        // $data = DB::table('user')
        // ->join('city', 'cityid', 'city.id')
        // ->get();
        // echo '<pre>';
        //     print_r ($data);
        // echo '</pre>';      
        
        
        $data = DB::table('user')
        ->select('user.name', 'user.surname', 'city.city', 'state.state')
        ->join('city', 'cityid', 'city.id')
        ->join('state', 'stateid', 'state.id')
        ->where('city','Poznań')
        ->get();
        echo '<pre>';
            print_r ($data);
        echo '</pre>';

        
        
        
    }
}
