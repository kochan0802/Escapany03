<?php

namespace App\Http\Controllers;

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
    public function index()
    {
        //
    }

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
    // dd($request->id);
      
    // $coachId = $request->input('id');
    // dd($request->input('id'));
    
    // $request->user()->attach(Auth::id());
    
        $user = User::find(Auth::id());
        // dd($user);
        
        $admin = Admin::find($request->id);
        // dd($admin);
      $user->admins()->attach($admin->id, ['admin_id' => $admin->id, 'user_id' => Auth::id()]);
        
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
        //
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
}

