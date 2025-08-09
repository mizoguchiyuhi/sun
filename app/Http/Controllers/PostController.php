<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // Postモデルをインポート

class PostController extends Controller
{
    public function index(Post $post)
    {
        return $post->get(); // postsテーブルの全データを取得
    }
}
