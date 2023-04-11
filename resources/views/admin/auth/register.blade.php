

<x-guest-layout>
   <div style="text-align: center;">
        <div style="display: inline-block;">
            <x-input-label :value="__('コーチ新規登録')" />
        </div>
    </div>
    <form method="POST" action="{{ route('admin.register') }}" enctype="multipart/form-data">
        @csrf

        <!-- Name -->
        <div class="mt-4 w-full">
            <x-input-label for="name" :value="__('お名前')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4 w-full">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4 w-full">
            <x-input-label for="password" :value="__('パスワード')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
       <div class="mt-4 w-full">
            <x-input-label for="password_confirmation" :value="__('パスワードの確認')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        
    <!-- License -->
    <div class="mt-4 w-full">
    <x-input-label for="license" :value="__('カウンセリング資格')" />
    <x-text-input id="license" class="block mt-1 w-full" type="text"
                  name="license"
                  :value="old('license')"
                  required autofocus autocomplete="license" />
    <x-input-error :messages="$errors->get('license')" class="mt-2" />
    </div>

            
        <!-- Career -->
        <div class="mt-4 w-full">
        <x-input-label for="career" :value="__('経歴')" />
            
        <x-text-input id="career" class="block mt-1 w-full" type="text"
            name="career"
             :value="old('career')"
            required  autofocus autocomplete="career" />
        <x-input-error :messages="$errors->get('career')" class="mt-2" />
    </div>

    <div class="mt-4 w-full">
    <x-input-label for="category_id" :value="__('得意ジャンル')" />
    <select id="category_id" name="category_id" class="block mt-1 w-full">
        <option value="">-- 選択してください --</option>   
        <option value="1" {{ old('category_id') === '1' ? 'selected' : '' }}>やりたいこと探し</option>
        <option value="2" {{ old('category_id') === '2' ? 'selected' : '' }}>起業</option>
        <option value="3" {{ old('category_id') === '3' ? 'selected' : '' }}>副業</option>
        <option value="4" {{ old('category_id') === '4' ? 'selected' : '' }}>資格取得</option>
        <option value="5" {{ old('category_id') === '5' ? 'selected' : '' }}>パラレルワーク</option>
        <option value="6" {{ old('category_id') === '6' ? 'selected' : '' }}>クリエイター</option>
        <option value="7" {{ old('category_id') === '7' ? 'selected' : '' }}>自分に合った働き方</option>
        <option value="8" {{ old('category_id') === '8' ? 'selected' : '' }}>趣味</option>
        <option value="9" {{ old('category_id') === '9' ? 'selected' : '' }}>海外移住</option>
        <option value="10" {{ old('category_id') === '10' ? 'selected' : '' }}>その他</option>
    </select>
    <x-input-error :messages="$errors->get('career')" class="mt-2" />
</div>
        <!--  16 personalities -->
               
        <div class="mt-4 w-full">
            <x-input-label for="personalities" :value="__('16personalities 診断結果')" />
        
            <select id="personalities" name="personalities" class="block mt-1 w-full">
               
        <option value="">-- 選択してください --</option>
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
            <option value="エンターテイナー" {{ old('personalities') === 'エンターテイナー' ? 'selected' : '' }}>エンターテイナー</option>
        </optgroup>
                </select>
                <x-input-error :messages="$errors->get('personalities')" class="mt-2" />
                </div>
                
            <a href="https://www.16personalities.com/ja/%E6%80%A7%E6%A0%BC%E8%A8%BA%E6%96%AD%E3%83%86%E3%82%B9%E3%83%88" target="_blank">
                <x-input-label :value="__('ー性格診断テストはこちらからー')" for="personality-test" />
            </a>
           <!--URL -->
    <div class="mt-4 w-full">
    <x-input-label for="url" :value="__('')" />
    <a href="https://aitemasu.me/">作成したアイテマスURLを記入</a>
    <x-text-input id="url" class="block mt-1 w-full" type="text"
                  name="url"
                  :value="old('url')"
                  required autofocus autocomplete="url" />
    <x-input-error :messages="$errors->get('url')" class="mt-2" />
    </div>
             <a href="https://docs.google.com/document/d/1quVNhpH1UmWbipTuR7TPM3oev4IrOeU_QcQZMYnj1bc/edit?usp=sharing" target="_blank">
                <x-input-label :value="__('ーアイテマスURL作成方法はこちらー')" for="personality-test" />
            </a>
        
                 <!--プロフィール画像アップロード -->
                        <div class="mt-4">
                    <x-input-label for="profile_image" :value="__('プロフィール画像登録')" />
                    <input id="profile_image" type="file" name="profile_image" />
                    <x-input-error :messages="$errors->get('profile_image')" class="mt-2" />
                </div>
   
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('admin.login') }}">
                {{ __('すでに登録されていますか?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('登録') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>