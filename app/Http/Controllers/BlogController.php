<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;
class BlogController extends Controller
{
   public function view(){
       $article= new Blog;
       $article->title='Bài viết 1';
       $article->content='Nội dung bài viết 1';
       $article->save();
       
   }
   public function result(){
    $article= Blog::find(1);
    echo $article ->title;  
}
}
