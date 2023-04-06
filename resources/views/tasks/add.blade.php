<style>
   
    .form {
        max-width: 600px;
        margin: 0 auto;
        text-align: center;
        background-color: #B19CD9;
        padding: 30px;
        border-radius: 10px;
    }
    .form-group {
        margin-bottom: 30px;
        text-align: left;
    }
    label {
        text-align: center;
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
        color: white;
    }
    span {
        color: orange;
    }
    input[type="text"],
    textarea {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
    }
    input[type="submit"] {
        background-color: white;
        color: #B19CD9;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #f5f5f5;
    }
        
    .error {
        text-align: center;
    }
    
    .error__message {
        color: orange;
        font-weight: bold;
    }
    
    .link {
        text-align: center;
        margin-bottom: 20px;
    }
    
    .link__back a {
        color: white;
        font-weight: bold;
        text-decoration: none;
    }
    
    .link__back a:hover {
        text-decoration: underline;
    }
    
</style>
<div class="link">
    <div class="link__back">
        <a href="{{ route('tasks.index') }}">戻る</a>
    </div>
</div>

<div class="form">
    <div class="error">
        @foreach ($errors->all() as $error)
            <p class="error__message">{{$error}}</p>
        @endforeach
    </div>

    <form action="{{ route('tasks.store') }}" method="POST">    
        @csrf
        <div class="form-group">
            <label for="name">タスク<span>(必須)</span></label>
            <input type="text" name="name" maxlength="30" placeholder="タスクは30文字で書きましょう。" value="{{ old('name') }}">   
        </div>
        <div class="form-group">
            <label for="content">タスク内容<span>(必須)</span></label>
            <textarea rows="5" name="content" placeholder="タスク内容を具体的に書きましょう">{{ old('content') }}</textarea>    
        </div>
        <button type="submit">追加する</button>
    </form>
</div>
