<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\LineupVote;

class LineupVoteController extends Controller
{
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $voted = DB::table('lineup_votes')->where(['user_id'=> Auth::id(), 'lineup_id' => $request->lineup_id])->get()->isEmpty();
        if(Auth::check() && $voted){
            
            $request ->validate([
                'lineup_id' => 'required',
                'user_id' => 'required',
                'upvote' => 'required'
            ]);
            
            $vote = new LineupVote([
                'lineup_id' => $request->lineup_id,
                'user_id' => $request->user_id,
                'upvote' => $request->upvote
            ]);
            
            $vote->save();

            return redirect('/lineups/'.$request->lineup_id)->with('success','Vote Saved');
        }else{
            return redirect('/lineups');
        }
    }
}
