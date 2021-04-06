<?php

namespace App\Http\Controllers;

use App\Lineup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LineupController extends Controller
{
    public function index(){
        
        $lineups = Lineup::paginate(25);

        return view('lineups.list')->with([
            'lineups' => $lineups
            ]);
    }

    public function show($id){
        $lineup = Lineup::find($id);
        if (empty($lineup)){
            return view('lineups.notfound');
        }else{
            
            //picks
            $lineup_picks=DB::table('lineup_picks')->where('lineup_id',$lineup->id)
            ->leftJoin('heros','lineup_picks.hero_id','heros.id')
            ->select('lineup_picks.position','heros.name','heros.port_url','heros.ico')
            ->get();

            //user
            $user = DB::table('users')->find($lineup->user_id,['id','name','avatar']);

            //comments
            $comments=DB::table('lineup_comments')->where('lineup_id', $id)
            ->leftJoin('users','users.id','lineup_comments.user_id')
            ->select('users.id','users.avatar','users.name','lineup_comments.comment_text')
            ->paginate(50);

            //votes
            $upvotes=DB::table('lineup_votes')->where('lineup_id',$id)->where('upvote', '1')->count();
            $downvotes=DB::table('lineup_votes')->where('lineup_id',$id)->where('upvote','0')->count();
            $totalvotes= $upvotes - $downvotes;
            $authvoted = DB::table('lineup_votes')->where(['lineup_id' => $id, 'user_id' => Auth::id()])->select('upvote')->first();

            return view('lineups.showlineup')->with([
                'lineup' => $lineup,
                'lineup_picks' => $lineup_picks,
                'user' => $user,
                'comments' => $comments,
                'upvotes' => $upvotes,
                'authvoted' => $authvoted,
                'downvotes' => $downvotes,
                'totalvotes' => $totalvotes
            ]);
        }

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //hero list
        $heroes = DB::table('heros')->get();

       return view('lineups.newlineup')->with([
           'heroes' => $heroes
       ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request->all();
    }

}
