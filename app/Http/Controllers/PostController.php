<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
    * 新ブログポスト作成フォームの表示
    * 
    * @return Response
    */
    
    public function create()
    {
        return view('post.create');
    }
}
