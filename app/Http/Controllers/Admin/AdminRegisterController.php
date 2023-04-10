<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class AdminRegisterController extends Controller
{
    public function create(): View
    {
        return view('admin.auth.register');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.Admin::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'license' => ['string', 'max:255'],
            'career' => ['string', 'max:65535'],
            'url' => ['string', 'max:255'],
            'personalities' => ['nullable', 'in:建築家,論理学者,指揮官,討論者,提唱者,仲介者,主人公,広報運動家,管理者,擁護者,幹部,領事館,巨匠,冒険者,起業家,エンターテイナー'],
            'profile_image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ]);

         if(request('profile_image')){
        $original=request()->file("profile_image")->getClientOriginalName();
        $name=date("Ymd_His")."_".$original;
        request()->file("profile_image")->move("storage/profile_images/",$name);
        $imagePath = 'storage/profile_images/' . $name;
        
    // プロフィール画像のパスをデータベースに保存するなどの処理を行う
}


        $admin = Admin::create([
            'category_id' => $request->input('category_id'),
            'genre_id' => $request->input('genre_id'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'email_verified_at' => null,
            'password' => Hash::make($request->input('password')),
            'remember_token' => null,
            'license' => $request->input('license'),
            'career' => $request->input('career'),
            'personalities' => $request->input('personalities') ?? '',
            'url' =>$request->input('url'),
            'profile_image' => isset($imagePath) ? $imagePath : '',
        ]);

        event(new Registered($admin));

        Auth::guard('admin')->login($admin);

        return redirect('/admin/dashboard');
    }
}