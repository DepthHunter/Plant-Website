<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Plant;

class AdminController extends Controller
{
    public function user()
    {
        $data = user::all();
return view("admin.users", compact("data"));
    }

    public function deleteuser($id)
    {
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function deletecatalog($id){
        $data = plant::find($id);
        $data->delete();
        return redirect()->back();
    }


    public function plantscatalog()
    {
        $data = plant::all();

        return view("admin.plantscatalog", compact("data"));
    }

    public function updatecatalog($id)
    {
        $data = plant::find($id);
        return view("admin.updatecatalog", compact("data"));
    }

    public function update(Request $request , $id)
    {
        $data = plant::find($id);

        $image=$request->image;

        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->image->move('plantimage',$imagename);

        $data->image=$imagename;

        $data->title=$request->title;

        $data->price=$request->price;

        $data->description=$request->description;

        $data->save();
        return redirect()->back();

    }

    public function upload(Request $request)
    {
$data = new plant;

$image=$request->image;

$imagename = time().'.'.$image->getClientOriginalExtension();

$request->image->move('plantimage',$imagename);

        $data->image=$imagename;

        $data->title=$request->title;

        $data->price=$request->price;

        $data->description=$request->description;

        $data->save();
        return redirect()->back();

    }


}
