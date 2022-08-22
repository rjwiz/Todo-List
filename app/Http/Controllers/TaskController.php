<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\StoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        return view('index', compact('tasks'));
        if(Auth::attempt(['email'=>$email,
        'password'=>$password])){
        $text = Auth::user()->name.'でログイン中';
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        Task::create($request->all());
        return redirect()->route('home');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
        public function edit(Request $request, $id)
    {
        $task = Task::find($request->id);
        return view('update', ['form' => $task]);
    }
    
    public function update(Request $request ,$id)
    {
        $form = $request->all();
        unset($form['_token']);
        Task::where('id', $request->id)->update($form);
        Task::where('category', $request->category)->update($form);
        return redirect()->route('home');
    }

    public function delete($id)
    {
        $task = Task::destroy($id);
        return redirect()->route('home');
    }

    public function tasksearch()
    {
        $tasks = Task::all();
        return view('search');
    }

    public function find()
    {
        
        return view('find', ['input' => '']);
    }

    public function search(Request $request)
    {
        $task = Task::where('name', 'LIKE BINARY',"%{$request->input}%")->first();
        $param = [
            'input' => $request->input,
            'task' => $task
        ];
        return view('search', $param);
    }


}
