
<x-guest-layout>

    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf
    <div style="text-align: center;">
        <div style="display: inline-block;">
            <x-input-label :value="__('ユーザー新規登録')" />
        </div>
    </div>
            
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('名前')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('パスワード')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('パスワードの確認')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        
        <!-- Birthday -->
         <div class="mt-4">
        <x-input-label for="birthday" :value="__('生年月日')" />
        <x-text-input id="birthday" class="block mt-1 w-full" type="date" name="birthday" :value="old('birthday')" required />
        <x-input-error :messages="$errors->get('birthday')" class="mt-2" />
    </div>

        
        <!-- Gender -->
         <div class="mt-4">
    <x-input-label for="gender" :value="__('性別')" />

    <select id="gender" name="gender"
            class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow-sm text-gray-700 leading-tight focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:bg-white focus:outline-none">
        <option value="">-- 選択してください --</option>
        <option value="male" {{ old('gender') === 'male' ? 'selected' : '' }}>男性</option>
        <option value="female" {{ old('gender') === 'female' ? 'selected' : '' }}>女性</option>
       
    </select>
    </div>
    
    <!-- Personality_type -->
    <div class="mt-4">
    <x-input-label for="personalities" :value="__('16personalities 診断結果')" />

    <select id="personalities" name="personalities" class="block mt-1 w-full">
       
<option value="">--性格診断結果 --</option>
<optgroup label="分析家">
<option value="建築家" {{ old('personalities') === '建築家' ? 'selected' : '' }}>建築家</option>
<option value="論理学者" {{ old('personalities') === '論理学者' ? 'selected' : '' }}>論理学者</option>
<option value="指揮官" {{ old('personalities') === '指揮官' ? 'selected' : '' }}>指揮官</option>
<option value="討論者" {{ old('personalities') === '討論者' ? 'selected' : '' }}>討論者</option>
<optgroup label="外交官">
    <option value="提唱者" {{ old('personalities') === '提唱者' ? 'selected' : '' }}>提唱者</option>
    <option value="仲介者" {{ old('personalities') === '仲介者' ? 'selected' : '' }}>仲介者</option>
    <option value="主人公" {{ old('personalities') === '主人公' ? 'selected' : '' }}>主人公</option>
    <option value="広報運動家" {{ old('personalities') === '広報運動家' ? 'selected' : '' }}>広報運動家</option>
</optgroup>
<optgroup label="番人">
    <option value="管理者" {{ old('personalities') === '管理者' ? 'selected' : '' }}>管理者</option>
    <option value="擁護者" {{ old('personalities') === '擁護者' ? 'selected' : '' }}>擁護者</option>
    <option value="幹部" {{ old('personalities') === '幹部' ? 'selected' : '' }}>幹部</option>
    <option value="領事館" {{ old('personalities') === '領事館' ? 'selected' : '' }}>領事館</option>
</optgroup>
<optgroup label="探検家">
    <option value="巨匠" {{ old('personalities') === '巨匠' ? 'selected' : '' }}>巨匠</option>
    <option value="冒険者" {{ old('personalities') === '冒険者' ? 'selected' : '' }}>冒険者</option>
    <option value="起業家" {{ old('personalities') === '起業家' ? 'selected' : '' }}>起業家</option>
</optgroup>
        </select>
        <x-input-error :messages="$errors->get('personalities')" class="mt-2" />
        </div>
        <br>
            <a href="https://www.16personalities.com/ja/%E6%80%A7%E6%A0%BC%E8%A8%BA%E6%96%AD%E3%83%86%E3%82%B9%E3%83%88" target="_blank">
                <x-input-label :value="__('ー性格診断テストがまだの方はこちらー')" for="personality-test" />
            </a>
         </br>
         
         <br>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSflBJpIgXvA15W5mXYbbzkcF5nTdOhGDwxh_hXs73Hq4NFH8w/viewform" target="_blank">
                <x-input-label :value="__('ー初回ヒアリングシートにご記入はこちらー')" for="personality-test" />
            </a>
         </br>
    
      
        
        
        <!-- プロフィール画像アップロード -->
        <div class="mt-4">
    <x-input-label for="profile_image" :value="__('プロフィール画像登録')" />
    <input id="profile_image" type="file" name="profile_image" />
    <x-input-error :messages="$errors->get('profile_image')" class="mt-2" />
</div>
   
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 text-gray-400 hover:text-gray-900 hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('すでに登録していますか?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('登録する') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>