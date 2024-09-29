<?php

namespace App\Http\Controllers;

use App\Models\Post;
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
    
    public function getPostById($id)
    {
        $post = DB::table('posts')->where('id', $id)->first();
        return view('readPost',compact('post'));
    }

    public function updatePost($id)
    {
        $post = DB::table('posts')->where('id', $id)->first();
        return view('updatePost', compact('post'));
    }

    public function updatePostSubmit(Request $request)
    {
        DB::table('posts')->where('id', $request->id)
        ->update([
            'subject' => $request -> subject,
            'content' => $request -> content,
        ]);
        return redirect()->route('post.getallpost')->with('post_created', '글이 성공적으로 수정되었습니다.');
    }

    public function deletePost($id) 
    {
        DB::table('posts')->where('id', $id)->delete();

        return back()->with('post_deleted', '글이 성공적으로 삭제되었습니다.');
    }

    public function innerJoin()
    {
        $posts = DB::table('users')
        ->select('users.name','users.email','posts.id', 'posts.subject', 'posts.content')
        ->join('posts', 'users.id', '=', 'posts.user_id')
        ->get();

        return view('joinView',compact('posts'));

    }

    public function getAllPostUsingModel()
    {
        $posts = Post::all();

        return $posts;
    }

}
