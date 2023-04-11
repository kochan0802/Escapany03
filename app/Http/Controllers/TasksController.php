<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Requests\TasksRequest;  
use Auth;
use App\Models\User;



class TasksController extends Controller
{
    public function index()
        {
          $user_id = Auth::id();
          $tasks = Task::where('user_id', $user_id)->orderBy('updated_at', 'desc')->get();
            return view('tasks.index', compact('tasks'));
        }
        
        public function show($id)
        {
            $task = Task::find($id);
            return view('tasks.detail', compact('task'));
        }
        
        public function add()
        {
            return view ('tasks.add');
        }
        
        public function store(TasksRequest $request)
        {
                    
            $data = $request->merge(['user_id' => Auth::user()->id])->all();
            $result = Task::create($data);
            
            return redirect()->route('tasks.index');
        }
        
        public function edit($id)
        {
            $task = Task::find($id);
            return view('tasks.edit', compact('task'));
        }
        
        public function update(TasksRequest $request, $id)
        {
            $task = Task::find($id);
            $task->name = $request->name;
            $task->content = $request->content;
            $task->save();
        
            return redirect()->route('tasks.index');
        }
        
        public function delete($id)
        {
            $task = Task::destroy($id);
            return redirect()->route('tasks.index');
        }
        
            public function mydata()
      {
        // Userモデルに定義したリレーションを使用してデータを取得する．
        $tasks = User::query()
          ->find(Auth::user()->id)
          ->userTasks()
          ->orderBy('created_at','desc')
          ->get();
        return response()->view('tasks.index', compact('tasks'));
      }
      
      
}
