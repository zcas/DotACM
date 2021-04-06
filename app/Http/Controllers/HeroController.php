<?php

namespace App\Http\Controllers;

use App\Hero;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        $agi_h = Hero::get()->where('attribute','AGI');
        $int_h = Hero::get()->where('attribute','INT');
        $str_h = Hero::get()->where('attribute','STR');
        
        return view('herolist')->with([
            'agi_h' => $agi_h,
            'int_h' => $int_h,
            'str_h' => $str_h
        ]);
    }
}
