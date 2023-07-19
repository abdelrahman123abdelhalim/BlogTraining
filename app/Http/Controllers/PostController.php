<?php

namespace App\Http\Controllers;

use App\Http\Services\PostService;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(){
        $PostService = new PostService();
        return $PostService->list();
    }
}