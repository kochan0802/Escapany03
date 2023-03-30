<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Coach;

class CoachController extends Controller {
    
    
     public function show($id)
    {
      $coach = Coach::find($id);
      return response()->view('admin.show', compact('coach'));
    }
    
    
    
    
    public function index(){
  // 🔽 編集
  $coaches = [];
  return response()->view('admin.show',compact('coach'));
}

    public function select(Request $req){

        //値を取得
        $category_name = $req->input('category_name');
        $personalities = $req->input('personalities');
        // dd($personalities);
        
        // 検索QUERY
        $query = Admin::query();

        //結合
        $query->join('categories', function ($query) use ($req) {
            $query->on('admins.category_id', '=', 'categories.category_id');
        });


        // もし「16personality」があれば
        if(!empty($personalities)){
            $query->where('personalities','like','%'.$personalities.'%');
       
        }

        // もし「ジャンル名」があれば
        if(!empty($category_name)){
            $query->where('category_name','like','%'.$category_name.'%');
        }

        // ページネーション
        $coach = $query->paginate(5);

        // ビューへ渡す値を配列に格納
        $hash = array(
            'category_name' => $category_name, //pass parameter to pager
            'personality' => $personalities, //pass parameter to pager
            'coaches' => $coach, //Eloquent
        );
        
        
        
        
        $result = Coach::create($request->all());
        return view('admin.list')->with($hash);
    }
    
     
}
