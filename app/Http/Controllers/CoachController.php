<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Coach;

class CoachController extends Controller {
    
    public function show($id)
    {
      $coach = Admin::find($id);
      $url = $coach->url;
      return response()->view('admin.show', compact('coach', 'url'));
    }
    
    public function index(){
      $coaches = Coach::all();
      return response()->view('admin.list',compact('coaches'));
    }

    public function select(Request $req){
        $category_name = $req->input('category_name');
        $personality = $req->input('personality');
        
        $query = Admin::query();
        $query->join('categories', function ($query) use ($req) {
            $query->on('admins.category_id', '=', 'categories.category_id');
        });

        if(!empty($personalities)){
            $query->where('personalities','like','%'.$personalities.'%');
        }

        if(!empty($category_name)){
            $query->where('category_name','like','%'.$category_name.'%');
        }

        $coaches = $query->paginate(5);

        $hash = array(
            'category_name' => $category_name,
            'personality' => $personality,
            'coaches' => $coaches,
        );

        return view('admin.list')->with($hash);
    }
     
}