<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Coach;
use App\Models\Admin;
use App\Models\User;
use Auth;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
//   public function index($admin)
// {
//     $favoriteCoaches = Auth::user()->favoriteCoaches;
//     $user = User::find(Auth::id());
//     $user->admins()->attach($admin, ['user_id' => Auth::id()]);
//     dd($favoriteCoaches);
    
//     return view('favorites.index', compact('favoriteCoaches', 'coaches'));
// }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     
 public function store(Request $request)
{
    $user = User::find(Auth::id());
    $admin = Admin::find($request->id);

    $user->admins()->attach($admin, ['user_id' => Auth::id()]);

    return redirect()->route('admin.show', ['admin' => $admin->id]);
}

 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     
    public function show($id)
{
    // $coach = Admin::find($id);
    // $url = $coach->url;
    // $profile_image = $coach->profile_image;

    // return view('favorites.index', compact('coach', 'url', 'profile_image'));
}
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Rsponse
     */
    
    public function destroy(Request $request)
  {  
       $user = User::find(Auth::id());
        // dd($user);
        
        $admin = Admin::find($request->id);
        // dd($admin);
     $user->admins()->detach($admin->id, ['admin_id' => $admin->id, 'user_id' => Auth::id()]);
        
        return redirect()->route('admin.show', ['admin' => $admin->id]);
  }
  
public function mydata()
{
    $admins = DB::table('admins')
        ->join('categories', 'admins.category_id', '=', 'categories.category_id')
        ->join('user_admin', 'admins.id', '=', 'user_admin.admin_id')
        ->where('user_admin.user_id', Auth::user()->id)
        ->select('admins.*', 'categories.category_name')
        ->orderBy('admins.id', 'desc')
        ->get();

    return response()->view('favorites.index', compact('admins'));
}


}

