<style>
.py-12 {
    padding-top: 3rem;
    padding-bottom: 3rem;
}
.max-w-7xl {
    max-width: 80rem;
}
.mx-auto {
    margin-left: auto;
    margin-right: auto;
}
.sm\:px-6 {
    padding-left: 1.5rem;
    padding-right: 1.5rem;
}
.lg\:px-8 {
    padding-left: 2rem;
    padding-right: 2rem;
}
.bg-white {
    background-color: #fff;
}
.dark\:bg-gray-800 {
    background-color: #1f2937;
}
.overflow-hidden {
    overflow: hidden;
}
.shadow-sm {
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
}
.sm\:rounded-lg {
    border-radius: 0.5rem;
}
.p-6 {
    padding: 1.5rem;
}
.text-gray-900 {
    color: #1f2937;
}
.dark\:text-gray-100 {
    color: #f9fafb;
}
.text-white {
    color: #fff;
}
form button {
    background-color: #374151;
    color: #fff;
    border: 2px solid #374151;
    border-radius: 0.25rem;
    padding: 0.5rem 1rem;
    font-size: 1rem;
}
form button:hover {
    background-color: #1f2937;
    border-color: #1f2937;
    cursor: pointer;
}
</style>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h1 class="text-white">コーチマイページ</h1>
                <p>{{ __("ログインしました。") }}</p>
                <p>{{ __("アイテマスを経由し、ユーザーから予約がくるのをお待ちください。") }}</p>
                <p>{{ Auth::user()->name }}</p>
                <a href="{{ route('reservation.create') }}">
                    予約作成
                </a>
                <a href="{{ route('reservation.index') }}">
                    予約一覧
                </a>
                <form action="{{ route('adminlogout') }}" method="POST">
                    @csrf
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-300 disabled:opacity-25 transition">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>


