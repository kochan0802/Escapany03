
<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('コーチプロフィール詳細') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800">
          <div class="mb-6">
            <div class="flex flex-col mb-4">
                    <!--{{$coach -> id}}-->
                     <!-- favorite 状態で条件分岐 -->
                    @if($coach->users()->where('user_id', Auth::id())->exists())
                    
                    <!-- unfavorite ボタン -->
                    <form action="{{ route('unfavorites') }}" method="POST" class="text-left">
                      @csrf
                      <input type='hidden' name='id' value="{{$coach->id}}">
                      
                      <x-primary-button class="ml-3">
                        <svg class="h-6 w-6 text-red-500" fill="red" viewBox="0 0 24 24" stroke="red">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                        {{ $coach->users()->count() }}
                      </x-primary-button>
                    </form>
                    @else
                    <!-- favorite ボタン -->
                    <form action="{{ route('favorites') }}" method="POST" class="text-left">
                      @csrf
                      <input type='hidden' name='id' value="{{$coach->id}}">
                      <x-primary-button class="ml-3">
                        <svg class="h-6 w-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="gray">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                        {{ $coach->users()->count() }}
                      </x-primary-button>
                    </form>
                    @endif
                   　
            </div>
                  @if ($profile_image)
              <img src="{{ asset($profile_image) }}" alt="profile_image" width="100" height="0" style="float:right;"/>
                   @endif
                                     
            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">名前</p>
              <p class="py-2 px-3 text-gray-800 dark:text-gray-200" id="name">
                {{$coach->name}}
              </p>
            </div>
            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">ジャンル</p>
              <p class="py-2 px-3 text-gray-800 dark:text-gray-200" id="category_name">
            @foreach ($category as $cat)
              <div>{{ $cat->category_name }}</div>
          @endforeach             
              </p>
            </div>
            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">キャリア</p>
              <p class="py-2 px-3 text-gray-800 dark:text-gray-200" id="career">
                {{$coach->career}}
              </p>
            </div><div class="flex flex-col mb-4">
              <p class="mb-2 uppercase font-bold text-lg text-gray-800 dark:text-gray-200">資格</p>
              <p class="py-2 px-3 text-gray-800 dark:text-gray-200" id="license">
                {{$coach->license}}
              </p>
            </div>
            
            
            
          <div class="flex items-center mt-4">
              <a href="{{ $url }}">
                  <x-secondary-button class="ml-3">
                      {{ __('コーチを予約する') }}
                  </x-primary-button>
              </a>
          </div>
            
            
            <div class="flex items-center justify-end mt-4">
            <a href="{{ url('admin/list') }}">
              <x-secondary-button class="ml-3">
                {{ __('戻る') }}
              </x-primary-button>
            </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>