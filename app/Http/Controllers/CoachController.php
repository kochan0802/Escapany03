<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\Coach;

class CoachController extends Controller {
    
    public function show($id)
    {
        $coach = Admin::find($id);
        $url = $coach->url;
        $profile_image = $coach->profile_image;
       
        return view('admin.show', compact('coach', 'url' ,'profile_image'));
    }
  
    public function store(Admin $admin)
    {
        $coach->admins()->attach(Auth::id());
        return redirect()->route('admin.show');
    }
  
  
    public function index()
    {
        $coaches = Coach::all();
        return view('admin.list', compact('coaches'));
    }

    public function select(Request $request)
    {
        $category_name = $request->input('category_name');
        $personality = $request->input('personality');
        $query = Admin::query();
        $query->join('categories', function ($query) {
            $query->on('admins.category_id', '=', 'categories.category_id');
        });

        if (!empty($personality)) {
            $query->where('personalities', 'like', '%' . $personality . '%');
        }

        if (!empty($category_name)) {
            $query->where('category_name', 'like', '%' . $category_name . '%');
        }

        $coaches = $query->paginate(5);

        return view('admin.list', compact('coaches', 'category_name', 'personality'));
    }
     
}