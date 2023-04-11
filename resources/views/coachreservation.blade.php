
<!-- resources/views/tweet/index.blade.php -->

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-grey-200 dark:border-gray-800">
          <table class="text-center w-full border-collapse">
            <thead>
              <tr>
                <th class="py-4 px-6 bg-gray-lightest dark:bg-gray-darkest font-bold uppercase text-lg text-gray-dark dark:text-gray-200 border-b border-grey-light dark:border-grey-dark">予約一覧</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($reservations as $reservation)
  <tr class="hover:bg-gray-lighter">
    <td class="py-4 px-6 border-b border-gray-light dark:border-gray-600">
      <div class="flex">
        <h3>{{ $coaches->find($reservation->coach_id)->name}}</h3>
        <h3>{{ $reservation->datetime}}</h3>
        <h3>{{ $reservation->task}}</h3>
      </div>
    </td>
  </tr>
@endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
