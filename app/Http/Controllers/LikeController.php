<?php

namespace App\Http\Controllers;

use App\Model\Like;
use App\Model\Reply;
use Illuminate\Http\Request;

class LikeController extends Controller
{

    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('JWT');
    }

    public function likeIt(Reply $reply)
    {
        $reply->likes()->create([
            'user_id' => '1'
        ]);
        //$reply->like()->create(['user_id' =>auth()->id()]);
    }

    public function unLikeIt(Reply $reply)
    {
        //$reply->like()->where(['user_id', auth()->id()])->first()->delete();
        $reply->likes()->where('user_id', '1')->first()->delete();
    }
        
}
