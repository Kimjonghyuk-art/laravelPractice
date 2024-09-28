<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getAllPost() 
    {
        $posts = DB::table('posts')->get();

        return view('posts',compact('posts'));
    }

    public function insertPost() 
    {
        return view('insertPost');
    }

    public function postSubmit(Request $request) 
    {
        DB::table('posts')->insert([
            'subject' => $request -> subject,
            'content' => $request -> content,
        ]);
        return redirect()->route('post.getallpost')->with('post_created', '글이 성공적으로 등록되었습니다.');
    }
}
