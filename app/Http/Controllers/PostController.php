<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\post;
use DB;
use File;

class PostController extends Controller
{
    public function store(Request $request){

            $post=new post;

            $post->title = $request->title;
            $post->description = $request->description;
            $post->save();
            $data=post::all();
            return redirect('postdetails')->with('newdata', $data);
            // return redirect()->back();

    }
    public function searchpost(){
        $search = $_GET['search'];
        $post= post::where('title', 'Like', '%' . $search . '%')->get();
        return view('postdetails',compact('post'));
     }
     public function deletepost($id){
    $post=post::find($id);
    $post->delete();
    // return redirect()->back();
    return redirect('allpost');
}
public function updatepostmethod($id){
    $post=post::find($id);
    return view('updatepost')->with('postdata',$post);
}

public function update(Request $request){
    $this->validate($request,['title'=>'required|max:100|min:1',]);
    $id=$request->id;
    $title = $request->title;
    $description = $request->description;
    $data = post::find($id);
    $data->title=$title;
    $data->description=$description;
    $data->save();
    $data=post::all();
    return redirect('allpost');
    return view('allpost')->with('post',$data);
}

}
