<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function Index(){
        return view('order/add_order');
    }

    public function Store(Request $request){
        $data['title'] = $request->title;
        $data['details'] = $request->details;

        DB::table('order')->insert($data);

        // dd(DB::table('order')->get());
        // return redirect('add-post');
        return redirect()->route('add.order');
    }

    public function AllOrder(){
        $data['show'] = DB::table('order')->get();
        // dd($data);
        return view('order/all_order', $data);
    }

    public function ViewOrder($id){
        $data['view'] = DB::table('order')->where('id',$id)->first();
        // dd($data)
        return view('order/view_order', $data);
    }
    
    public function EditOrder($id){
        $data['edit'] = DB::table('order')->where('id',$id)->first();
        // dd($data)
        return view('order/edit_order', $data);
    }

    public function UpdateOrder(Request $request, $id){
        $data['title'] = $request->title;
        $data['details'] = $request->details;

        DB::table('order')->where('id',$id)->update($data);

        // dd(DB::table('post')->get());
        // return redirect('all-post');
        return redirect()->route('all.order');
    }

    public function DeleteOrder($id){
        DB::table('order')->where('id',$id)->delete();
        // dd($data)
        // return redirect('all-post');
        return redirect()->route('all.order');
    }
}
