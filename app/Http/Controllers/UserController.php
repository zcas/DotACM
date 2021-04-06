<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        if(Auth::check()){
            $id = Auth::id();
            return $this->show($id);
        }else{
         return  redirect('/'); 
        }   
    }

    public function chooseAvatar(Request $request){
        if(Auth::check() && ($request->user_id == Auth::id())){
            $request->validate([
                'user_id' => 'required',
                'avatar' => 'required'
            ]);
            $user = User::find($request->user_id);
            $user->avatar = $request->avatar;
            $user->save();
            return redirect('/profile')->with('success','Avatar Updated');
        }
        else{
            return redirect('/');
        }        
    }

  

    public function show($id){
        $user = User::find($id);
        if (empty($user)){
            return view('user.notfound');
        }else{
            // Last Match
            $lastmatch = DB::table('matchs')->where('r_user' , $user->id)->orWhere('d_user', $user->id)->orderBy('created_at','desc')->first();
            $lmduser = null;
            $lmpicks = null;
            $lmruser = null;
            if(!empty($lastmatch)){
                $lmruser= DB::table('users')->where('id', $lastmatch->r_user)->select('name','id')->first();
                $lmduser= DB::table('users')->where('id', $lastmatch->d_user)->select('name','id')->first();
    
                if ($user->id == $lastmatch->r_user){
                    $lmpicks = DB::table('picks')->where('match_id', $lastmatch->id)->where('side','1')
                    ->leftJoin('heros','picks.hero_id','heros.id')->select('heros.id','heros.name','heros.port_url')
                    ->get();
                }else{
                    $lmpicks = DB::table('picks')->where('match_id', $lastmatch->id)->where('side','2')
                    ->leftJoin('heros','picks.hero_id','heros.id')->select('heros.id','heros.name','heros.port_url')
                    ->get();
                }
            }

            // Last Lineup
            $lastlineup = DB::table('lineups')->where('user_id',$user->id)->orderBy('created_at','desc')->first();
            $lastlineuppicks = null;
            if(!empty($lastlineup)){
                $lastlineuppicks = DB::table('lineup_picks')->where('lineup_id', $lastlineup->id)
            ->leftJoin('heros','lineup_picks.hero_id','heros.id')->select('heros.name','heros.port_url')->get();
            }
            
            // Comments count
            $totalcomments = (DB::table('comments')->where('user_id',$user->id)->count()) + (DB::table('lineup_comments')->where('user_id',$user->id)->count());

            // Lineup count
            $totallineup = DB::table('lineups')->where('user_id',$user->id)->count();

            //match count
            $totalmatch = DB::table('matchs')->where('r_user' , $user->id)->orWhere('d_user', $user->id)->count();

            if($id == Auth::id()){
                $avatars= DB::table('avatars')->get();
                return view('user.profile')->with([
                    'user' => $user,
                    'lastmatch' => $lastmatch,
                    'lmpicks' => $lmpicks,
                    'lmruser' => $lmruser,
                    'lmduser' => $lmduser,
                    'lastlineup' => $lastlineup,
                    'lastlineuppicks' => $lastlineuppicks,
                    'totalcomments' => $totalcomments,
                    'avatars' => $avatars,
                    'totallineup' => $totallineup,
                    'totalmatch' => $totalmatch
                ]);
            }else{
                return view('user.info')->with([
                    'user'=> $user,
                    'lastmatch' => $lastmatch,
                    'lmpicks' => $lmpicks,
                    'lmruser' => $lmruser,
                    'lmduser' => $lmduser,
                    'lastlineup' => $lastlineup,
                    'lastlineuppicks' => $lastlineuppicks,
                    'totalcomments' => $totalcomments,
                    'totallineup' => $totallineup,
                    'totalmatch' => $totalmatch
                ]);
            }
        }
       
    }
}