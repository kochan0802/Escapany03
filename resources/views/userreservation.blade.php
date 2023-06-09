
<!-- resources/views/tweet/index.blade.php -->
<style>
table th:nth-child(1) {
  text-align: left;
}
table th:nth-child(2) {
  text-align: center;
}
table th:nth-child(3) {
  text-align: center;
}
table th:nth-child(4) {
  text-align: left;
}

tbody {
  color: #999999;
}

</style>

<x-app-layout>  
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-grey-200 dark:border-gray-800">
          
          <table class="text-center w-full border-collapse">
            <thead>
              <tr>
                <th class="py-4 px-6 bg-gray-lightest dark:bg-gray-darkest font-bold uppercase text-lg text-gray-dark dark:text-gray-200 border-b border-grey-light dark:border-grey-dark">名前</th>
                <th class="py-4 px-6 bg-gray-lightest dark:bg-gray-darkest font-bold uppercase text-lg text-gray-dark dark:text-gray-200 border-b border-grey-light dark:border-grey-dark">予約日時</th>
                <th class="py-4 px-6 bg-gray-lightest dark:bg-gray-darkest font-bold uppercase text-lg text-gray-dark dark:text-gray-200 border-b border-grey-light dark:border-grey-dark">ユーザー用メモ</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($reservations as $reservation)
              <tr class="hover:bg-gray-lighter">
                <td class="py-4 px-6 border-b border-gray-light dark:border-gray-600">{{ $users->find($reservation->user_id)->name}}</td>
                <td class="py-4 px-6 border-b border-gray-light dark:border-gray-600">{{ $reservation->datetime}}</td>
                <td class="py-4 px-6 border-b border-gray-light dark:border-gray-600">{{ $reservation->task}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <button onclick="location.href='{{ url()->previous() }}'" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">戻る</button>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>  
