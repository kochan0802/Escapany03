<style>
table {
  border-collapse: collapse;
  width: 100%;
}

table td, table th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
}

table th {
  background-color: #f2f2f2;
  font-weight: bold;
}

table td:last-child, table th:last-child {
  border-right: 1px solid #ddd;
}

table tfoot tr:last-child td {
  border-bottom: none;
}

table tfoot tr:first-child th {
  border-top: none;
}

table tfoot {
  background-color: #f2f2f2;
}

table caption {
  caption-side: top;
  font-weight: bold;
}

table {
  border: 1px solid #ddd;
  border-collapse: collapse;
}

table th, table td {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
}

table th:last-child, table td:last-child {
  border-right: none;
}

table td:first-child, table th:first-child {
  border-left: none;
}

table td:last-child {
  border-right: none;
}

table td, table th {
  border-bottom: none;
}

table tfoot td, table tfoot th {
  border-top: 1px solid #ddd;
}

a {
  display: inline-block;
  margin-top: 1rem;
  padding: 0.5rem 1rem;
  background-color: #4a5568;
  color: #fff;
  text-decoration: none;
  border-radius: 0.25rem;
}

a:hover {
  background-color: #718096;
}


</style>

<div class="py-12">
  <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">
    <div class="bg-white dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg">
      <div class="p-6 bg-white dark:bg-gray-700 border-b border-gray-300 dark:border-gray-600">
        <table class="text-center w-full border-collapse">
          <thead>
            <tr>
              <th class="py-4 px-6 bg-gray-200 dark:bg-gray-800 font-bold uppercase text-lg text-gray-800 dark:text-gray-200 border-b border-gray-300 dark:border-gray-600 border-r">ユーザー名</th>
              <th class="py-4 px-6 bg-gray-200 dark:bg-gray-800 font-bold uppercase text-lg text-gray-800 dark:text-gray-200 border-b border-gray-300 dark:border-gray-600 border-r">コーチ名</th>
              <th class="py-4 px-6 bg-gray-200 dark:bg-gray-800 font-bold uppercase text-lg text-gray-800 dark:text-gray-200 border-b border-gray-300 dark:border-gray-600 border-r">予約日時</th>
              <th class="py-4 px-6 bg-gray-200 dark:bg-gray-800 font-bold uppercase text-lg text-gray-800 dark:text-gray-200 border-b border-gray-300 dark:border-gray-600">メモ</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($reservations as $reservation)
              <tr class="hover:bg-gray-100 dark:hover:bg-gray-600 border-b border-gray-300 dark:border-gray-600">
                <td class="py-4 px-6 border-r">
                  {{ $users->find($reservation->user_id)->name}}
                </td>
                <td class="py-4 px-6 border-r">
                  {{ $admins->find($reservation->admin_id)->name}}
                </td>
                <td class="py-4 px-6 border-r">
                  {{ $reservation->datetime}}
                </td>
                <td class="py-4 px-6">
                  {{ $reservation->task}}
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        <div class="mt-6 text-center">
        <a href="javascript:history.back()" class="text-blue-500 underline">戻る</a>

        </div>
      </div>
    </div>
  </div>
</div>
