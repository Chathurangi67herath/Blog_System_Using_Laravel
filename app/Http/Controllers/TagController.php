<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\tag;

class TagController extends Controller
{
    public function store(Request $request){
        $tag=new tag;
        $this->validate($request,['title'=>'required|max:100|min:1',]);
        $tag->title = $request->title;
        $tag->description = $request->description;
        $tag->save();
        $data=tag::all();
        return redirect('tag');

    }

    public function searchtag(){
        $search = $_GET['search'];
        $tag= tag::where('title', 'Like', '%' . $search . '%')->get();
        return view('tag',compact('tag'));
}

public function deletetag($id){
    $tag=tag::find($id);
    $tag->delete();
    // return redirect()->back();
    return redirect('tag');
}

public function updatetagmethod($id){
    $tag=tag::find($id);
    return view('updatetag')->with('tagdata',$tag);
}

public function update(Request $request){
    $this->validate($request,['title'=>'required|max:100|min:1',]);
    $id=$request->id;
    $title = $request->title;
    $description = $request->description;
    $data = tag::find($id);
    $data->title=$title;
    $data->description=$description;
    $data->save();
    $data=tag::all();
    return redirect('tag');
    return view('tag')->with('tag',$data);
}

}
