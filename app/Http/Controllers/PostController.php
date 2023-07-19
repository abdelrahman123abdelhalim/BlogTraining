<?php
namespace App\Http\Controllers;
use App\Http\Requests\Posts\PostsRequest;
use App\Http\Services\PostService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(){
        $PostService = new PostService();
        return $PostService->list();
    }

    public function create(PostsRequest $request){
        $PostService = new PostService();
        return  $PostService->create($request);
    }

    public function update(PostsRequest $request ,$id){
        $PostService = new PostService();
        return  $PostService->update($request,$id);
    }
}