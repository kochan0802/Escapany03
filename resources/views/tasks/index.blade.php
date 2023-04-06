
  <style>
    

h1 {
  font-size: 30px;
  text-align: center;
  padding: 1em; /*文字周りの余白*/
  color: #010101; /*文字色*/
  background: #eaf3ff; /*背景色*/
  border-bottom: solid 3px #516ab6; /*下線*/
  }
  
.h1_title{
 font-weight: bold; /*文字を太くする*/
 }

.container {
        width: 80%;
        margin: 0 auto;
    }

  .task__add {
  display: flex;
  justify-content: center;
  align-items: center;
  
}

.task__add button {
  background-color: #B19CD9; /* 薄い紫色の背景色 */
  border: none; /* 枠線を非表示 */
  color: white; /* ボタンの文字色 */
  padding: 16px 32px; /* ボタン内の余白 */
  text-align: center; /* ボタン内のテキストを中央揃え */
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  border-radius: 50px; /* 角丸を50pxに指定 */
}


    
    table {
        border-spacing: 0;
        border-collapse: collapse;
        border-bottom: 1px solid #aaa;
        color: #555;
        width: 100%;
    }

    th {
        background-color: #B19CD9; /*紫色の背景色*/
        border-top: 1px solid #aaa;
        padding: 10px 0 10px 6px;
        text-align: center;
        font-weight: bold;
        text-transform: uppercase;
    }

    td {
        
        border-top: 1px solid #aaa;
        padding: 10px 0 10px 6px;
        text-align: center;
    }

    td:last-child {
        display: flex;
        justify-content: center;
    }

    a {
        margin-right: 20px;
        text-decoration: none;
        color: #555;
    }

    button {
        background-color: transparent;
        border: none;
        color: #555;
        cursor: pointer;
    }

    button:hover {
        text-decoration: underline;
    }
</style>
 
</style>
<x-app-layout>
      <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
           Todo リスト
        </h2>
    </x-slot>
<!--<h1><div class="h1_title">Todo リスト</div></h1>-->
<div class="container">
    
    <br>
    <div class="task__add">
      <button type="button" onclick="location.href='{{route('tasks.add')}}'">タスクを追加する</button>
    </div>
    </br>
   
    <table>
        <tr>
            <th>タスク</th>
            <th>アクション</th>
        </tr>
        @foreach ($tasks as $task)
        <tr>
            <td>{{ $task->name }}</td>
            <td>
                <a href="{{route('tasks.show',['id' => $task->id])}}">詳細</a>
                <a href="{{route('tasks.edit', ['id' => $task->id]) }}">編集</a>  
                <form action="{{ route('tasks.delete', ['id' => $task->id]) }}" method="POST">
                @csrf
                    <button type="submit">削除</button>
                </form>
            </td>
        </tr>
        
        @endforeach
    </table>
</div>
</x-app-layout>