<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    
    public function store(Request $request): RedirectResponse
{
    
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
        'personalities' => ['nullable', 'in:建築家,論理学者,指揮官,討論者,提唱者,仲介者,主人公,広報運動家,管理者,擁護者,幹部,領事館,巨匠,冒険者,起業家'],
        'gender' => ['nullable', 'in:male,female'],
        'birthday' => ['nullable', 'date_format:Y-m-d'],
        'profile_image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
    ]);

    if(request('profile_image')){
        $original=request()->file("profile_image")->getClientOriginalName();
        $name=date("Ymd_His")."_".$original;
        request()->file("profile_image")->move("storage/profile_images",$name);
        $imagePath = 'profile_images/' . $name;
    }

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'personalities' => $request->input('personalities') ?? '',
        'gender' => $request->gender,
        'birthday' => $request->birthday,
        'profile_image'=> $imagePath,
    ]);

    event(new Registered($user));

    Auth::login($user);

    return redirect(RouteServiceProvider::HOME);
 }
 
 public function showPersonalities(Request $request)
{
    $personalities = $request->input('personalities') ?? '';
    return view('personalities', ['personalities' => $personalities]);
}

    
}