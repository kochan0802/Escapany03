<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\Coach;
use Auth;


class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    // $reservations = Admin::query()
    //   ->find(Auth::user()->id)
    //   ->userreservations()
    //   ->orderBy('updated_at','desc')
    //   ->get();
      
    // $users = User::query();

    // return response()->view('userreservation', compact('reservations','users'));
    // }
    
      public function index()
    {
 
    if (Auth::guard('admin')->check()) {
        $reservations = Admin::query()
            ->find(Auth::user()->id)
            ->userreservations()
            ->orderBy('updated_at', 'desc')
            ->get();
        $users = User::query()->get();

        return response()-> view('userreservation', compact('reservations', 'users'));
        
    } elseif (Auth::guard('web')->check()) {
        $reservations = User::query()
            ->find(Auth::id())
            ->coachreservations()
            ->orderBy('updated_at', 'desc')
            ->get();
        $admins = Admin::query()->get();
        return response()-> view('coachreservation', compact('reservations', 'admins'));
    }
}




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = Admin::query()
          ->find(Auth::user()->id)
          ->users()->get();
        return response()->view('create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // // バリデーションを行う
        // $request->validate([
        //     'user_id' => 'required|exists:users,id',
        //     'date' => 'required|date',
        //     'task' => 'required|string',
        // ]);

        // 新しい予約インスタンスを作成
        $reservation = new Reservation();
        $reservation->admin_id = Admin::find(Auth::id())->id;
        $reservation->user_id = $request->input('user_id');
        $reservation->datetime = $request->input('datetime');
        $reservation->task = $request->input('task');

        // 予約を保存
        $reservation->save();

        // メッセージを表示してリダイレクト
        return view("admin.dashboard");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
