<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\category;

class CategoryController extends Controller
{
    public function store(Request $request){
        $category=new category;
        $this->validate($request,['type'=>'required|max:100|min:1',]);
        $category->type = $request->type;
        $category->description = $request->description;
        $category->save();
        $data=category::all();
        return redirect('category');

    }

    public function searchcategory(){
        $search = $_GET['search'];
        $category= category::where('type', 'Like', '%' . $search . '%')->get();
        return view('category',compact('category'));
}

public function deletecategory($id){
    $category=category::find($id);
    $category->delete();
    // return redirect()->back();
    return redirect('category');
}

public function updatecategorymethod($id){
    $category=category::find($id);
    return view('updatecategory')->with('categorydata',$category);
}

public function update(Request $request){
    $this->validate($request,['type'=>'required|max:100|min:1',]);
    $id=$request->id;
    $type = $request->type;
    $description = $request->description;
    $data = category::find($id);
    $data->type=$type;
    $data->description=$description;
    $data->save();
    $data=category::all();
    return redirect('category');
    return view('category')->with('category',$data);
}
}
