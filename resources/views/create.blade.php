<x-app-layout>
       <div class="py-12">
        <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800 ">
                <form action="{{ route('reservation.store') }}" method="POST">
                  @csrf
                  <select name="user_id" class="w-full px-3 py-2 text-gray-700 dark:text-gray-300 bg-transparent focus:outline-none">
                     <option value="">ユーザー名を選択してください</option>
                      @foreach ($users as $user)
                          <option value="{{ $user->id }}">
                              {{ $user->name }}
                          </option>
                      @endforeach
                  </select>
                  <div class="form-group">
                      <x-input-label for="datetime" :value="__('ユーザーが指定した予約日時を入力してください')" />
                      <x-text-input id="datetime" class="block mt-1 w-full" type="datetime-local" name="datetime"/>
                  </div>
                  <div class="form-group">
                      <x-input-label for="task" :value="__('コーチング終了後、ユーザーの課題を入力してください')" />
                      <x-text-input id="task" class="block mt-1 w-full" type="text" name="task"/>
                  </div>
                    <div class="flex items-center justify-end mt-4">
                      <x-primary-button class="ml-3">
                        {{ __('送信する') }}
                      </x-primary-button>
                    </div>
                </form>
            </div>
          </div>
        </div> 
     </div>
 </x-app-layout>  