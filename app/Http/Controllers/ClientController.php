<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function getAllPost() : array
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $response->json();
    }

    public function getPostById($id) : array
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts/' .$id);
        return $response->json();
    }

    public function addPost() :array
    {
        $post = Http::post('https://jsonplaceholder.typicode.com/posts/', [
            'userId' => 1,
            'title' => 'new Post Title',
            'body' => 'new Post Description'
        ]);
        return $post->json();
    }

}
