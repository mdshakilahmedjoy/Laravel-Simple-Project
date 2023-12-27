<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function Index(){
        return view('post/add_post');
    }

    public function Store(Request $request){
        $data['title'] = $request->title;
        $data['details'] = $request->details;

        DB::table('post')->insert($data);

        // dd(DB::table('post')->get());
        // return redirect('add-post');
        return redirect()->route('add.post');
    }

    public function AllPost(){
        $data['show'] = DB::table('post')->get();
        // dd($data);
        // return $data;  //(json format data view)
        return view('post/all_post', $data);
    }

    public function ViewPost($id){
        $data['view'] = DB::table('post')->where('id',$id)->first();
        // dd($data)
        return view('post/view_post', $data);
    }

    public function DeletePost($id){
        DB::table('post')->where('id',$id)->delete();
        // dd($data)
        // return redirect('all-post');
        return redirect()->route('all.post');
    }
    
    public function EditPost($id){
        $data['edit'] = DB::table('post')->where('id',$id)->first();
        // dd($data)
        return view('post/edit_post', $data);
    }

    public function UpdatePost(Request $request, $id){
        $data['title'] = $request->title;
        $data['details'] = $request->details;

        DB::table('post')->where('id',$id)->update($data);

        // dd(DB::table('post')->get());
        // return redirect('all-post');
        return redirect()->route('all.post');
    }

}
