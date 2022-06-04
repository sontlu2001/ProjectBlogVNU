<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Blog;

class BlogControllerResource extends Controller
{

    public function index()
    {
        //Get all blogs
        $blogs = Blog::paginate(10);
        return view('blog.list')->with('blogs', $blogs);
    }

    public function create()
    {
        // Show the form for creating a new blog.
        return view('blog.add');
    }

    public function store(Request $request)
    {
        //Add new blog to 
        //$request là một Object lưu giữ liệu từ client gửi lên

        $validated = $request->validate([
            'title' => 'required|min:10'
        ]);

        $result = 'Đăng bài thất bại !';
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->content = $request->txtContent;
        if ($blog->save())
            $result = 'Đăng bài thành công !';
        return redirect()->route('blog.index')->with('mess', 'Thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
