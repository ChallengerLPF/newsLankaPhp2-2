<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use DB;
use Input;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $posts = DB::table('posts')->paginate(2); //all posts of  page

        $leftBarPosts = Post::orderBy('views','desc')->take(4)->get();

        // DB::table('posts')->chunk(4,function($users) {
        //     foreach ($posts as $post) {
        //            leftBarPosts[] =   $post;   
        //     } 
        // );

        return view('home',['posts'=>$posts , 'leftBarPosts'=>$leftBarPosts]);
    }

   



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate
        $imageTempName = $request->file('file')->getPathname();
                $imageName = $request->file('file')->getClientOriginalName();
        



        
        if(Input::hasFile('file'))
        {
                
                $file = Input::file('file');
                $file->move('images',$file->getClientOriginalName());
                
                
        }
        $path = Input::file('file')->getRealPath();
        $this->validate($request, array(
                'title'=>'required|max:255',
                'body'=>'required'
        ));    


        //store
        $post =new Post;

        $post->title= $request->title;
        $post->body= $request->body;
        $post->image_url=$request->file;
        $post->save();
        echo "<script type='text/javascript'>alert('$path');</script>";
        //redirect

     //   return redirect()->routes('posts.show',$post->id);

        DB::table('posts')
            ->where('image_url', $imageTempName)
            ->update(['image_url' => $imageName]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        $post->views++;
        $post->save();
        
        return view('posts.full_article',['post'=>$post]);
    }

    // public function full()
    // {
    //     $post = Post::findOrFail(1);

    //     return view('posts.full_article',['post'=>$post]);
    // }

    // public function full($id)
    // {
    //     $post = Post::findOrFail($id);

    //     $post->views++;
    //     $post->save();
    //     return view('posts.full_article',['post'=>$post]);
    // }

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
