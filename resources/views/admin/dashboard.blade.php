<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h1 class="text-white">コーチマイページ</h1>
                {{ __("ログインしました。") }}
                <br>
                {{ __("アイテマスを経由し、ユーザーから予約がくるのをお待ちください。") }}
                </br>
                <div>{{ Auth::user()->name }}</div>
                
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="ml-3">
                        {{ __('ログアウト') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
