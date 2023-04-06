<style>
    h1 {
        text-align: center;
        font-size: 30px;
        padding: 10px;
        background-color: #eaf3ff; 
        border-radius: 10px;
        width: 50% 50%;
    }
    .container {
        width: 60%;
        margin: 0 auto;
        background-color: #B19CD9; 
        padding: 20px;
        border-radius: 10px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        background-color: #FCE0E6;
        border-radius: 10px;
    }
  
    table th,table td {
        color: #777777;
        padding: 10px 0;
        text-align: center;
    }
  
    table tr:nth-child(odd){
        background-color: 
    }
    .link {
        display: flex;#e6e6fa; 
        justify-content: space-between;
        margin-top: 20px;
    }
    
    .link__delete button {
        background-color: orange;
        color: white;
        border-radius: 10px;
        padding: 5px 15px;
        border: none;
        cursor: pointer;
    }
    
    .link__delete button:hover {
        opacity: 0.8;
    }
</style>
<div class="container">
    <table>
        <tr>
            <th>タスク</th>
            <td>{{ $task->name }}</td>
        </tr>
        <tr>
            <th>タスク内容</th>
            <td>{{ $task->content }}</td>
        </tr>
        <tr>
            <th>作成日時</th>
            <td>{{ $task->created_at->format('Y年m月d日 H:i') }}</td>
        </tr>
        <tr>
            <th>更新日時</th>
            <td>{{ $task->updated_at->format('Y年m月d日 H:i') }}</td>
        </tr>
    </table>
    <div class="link">
        <div class="link__back">
            <a href="{{ route('tasks.index') }}">戻る</a>
        </div>
        <div class="link__edit">
            <a href="{{ route('tasks.edit', ['id' => $task->id]) }}">編集する</a>
        </div>
        <div class="link__delete">
            <form action="{{ route('tasks.delete', ['id' => $task->id]) }}" method="POST">
                @csrf
                <button type="submit">削除</button>
            </form>
        </div>
    </div>
</div>