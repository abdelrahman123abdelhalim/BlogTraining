<?php

namespace App\Http\Services;
use App\Models\Post;

class PostService{
    
    public function list(){
    $data = Post::get();
    return response()->json(['msg'=>"succecss",'data'=>$data]);
    }
}