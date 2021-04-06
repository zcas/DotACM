<?php

namespace App\Http\Controllers;

use App\Match;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matches = Match::paginate(25);
        
       return view('matchs.list')->with([
            'matches' => $matches
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $match = Match::find($id);
        if(empty($match)){
            return view('matchs.notfound');
        }
        else{

            //picks info
            
            $picks = DB::table('picks')->where('match_id',$id)
            ->leftJoin('heros','picks.hero_id','heros.id')
            ->select('picks.side','picks.pick_order','picks.position','heros.name','heros.port_url','heros.ico')
            ->get();
            
            //match info
     
            $users[0] = $match->ruser;
            $users[1] = $match->duser;

            //bans info

            $bans = DB::table('bans')->where('match_id',$id)
            ->leftJoin('heros','bans.hero_id','heros.id')
            ->select('bans.side','bans.ban_order','heros.name','heros.port_url')
            ->get();


            //comments info
            $comments=DB::table('comments')->where('match_id', $id)
            ->leftJoin('users','users.id','comments.user_id')
            ->select('users.id','users.avatar','users.name','comments.comment_text')
            ->paginate(50);

            //votes  
            $votes[0] = DB::table('votes')->where(['match_id' => $id])->where('side','1')->count();
            $votes[1] = DB::table('votes')->where(['match_id' => $id])->where('side','2')->count();
            $authvoted = DB::table('votes')->where(['match_id' => $id, 'user_id' => Auth::id()])->select('side')->first();

            return view('matchs.showmatch')->with([
                'match' => $match,
                'users' => $users,
                'picks' => $picks,
                'bans'  => $bans,
                'comments' => $comments,
                'votes' => $votes,
                'authvoted' => $authvoted
            ]);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
