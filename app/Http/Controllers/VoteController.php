<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Vote;

class VoteController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $voted = DB::table('votes')->where(['user_id'=> Auth::id(), 'match_id' => $request->match_id])->get()->isEmpty();
        if(Auth::check() && $voted){
            
            $request ->validate([
                'match_id' => 'required',
                'user_id' => 'required',
                'side' => 'required'
            ]);
            
            $vote = new Vote([
                'match_id' => $request->match_id,
                'user_id' => $request->user_id,
                'side' => $request->side
            ]);
            
            $vote->save();

            return redirect('/matches/'.$request->match_id)->with('success','Vote Saved');
        }else{
            return redirect('/matches');
        }
    }

}
