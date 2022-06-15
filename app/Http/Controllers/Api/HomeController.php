<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DB::table('posts')->get();
        return response()->json($posts);
        // return $posts;      //['this return you can also use insted of avob return method']
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    // for single data store this code ----------------->
        
        // $this->validate($request, [
        //     'title' => 'required',
        //     'body' => 'required',
    
        // ]);


        // $post['title'] = $request->title;
        // $post['body'] = $request->body;

        // DB::table('posts')->insert($post);
        // return response('Succeded');


    // for multiple data store this code ----------------->

        $Post = json_decode($request->post);
        $post_c = $Post->posts;

        $validator = Validator::make($post_c, [
            'title' => 'required',
            'body' => 'required',

        ]);

        foreach($Post->posts as $post){
            $postStore['title'] = $post->title;
            $postStore['body'] = $post->body;

            DB::table('posts')->insert($postStore);

        }
        return response('Succeded');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = DB::table('posts')->where('id', $id)->first();
        return response()->json($show);
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
       $post['title'] = $request->title;
        $post['body'] = $request->body;

        DB::table('posts')->where('id', $id)->update($post);
        return response('Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('posts')->where('id' , $id)->delete();
        return response('Deleted');
    }
}
