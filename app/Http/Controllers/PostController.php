<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function create(){
      return view('posts.admin');
  }


    public function store(Request $request )
    {
      //  $this->validate(request(),[
       //     'location'=>'required',
       //     'roomnumber'=> 'required',
        //    'price'=> 'required',
        //    'description'=> 'required',
        //    'url'=> 'required|mimes:jpg,jpeg,gif,png|max:'
       // ]);
       $posts=new Post();
        $image_name=time() .'.'.$request->url->getClientOriginalExtension();
        $posts->location=$request->location;
        $posts->roomnumber=$request->roomnumber;
        $posts->price=$request->price;
        $posts->description=$request->description;
        $posts->url= $image_name;
        $posts->save();

        $request->url->move(public_path('images'),$image_name);
        dd($request->all());
        return response('message sent');

    }
}
