<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;
use Illuminate\Http\Request;
use Auth;
use Session;

class TaskController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.task.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.task.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required|max:255',
            'tag' => 'required'
        ));

        $task = new Task;

        $task->user_id = Auth::user()->id;
        $task->project_id = $request->project_id;
        $task->name = $request->name;
        $task->tag = $request->tag;

        $task->slug = $request->name;
        $delimiter = '-';
        $task->slug = iconv('UTF-8', 'ASCII//TRANSLIT', $task->slug);
        $task->slug = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $task->slug);
        $task->slug = preg_replace("/[\/_|+ -]+/", $delimiter, $task->slug);
        $task->slug = strtolower(trim($task->slug, $delimiter));
        $task->slug = $task->slug.'-'.str_random(4).''.\Carbon\Carbon::now()->hour.''.str_random(4);

        $task->due_date = date('Y-m-d', strtotime("+3 days"));

        $task->save();

        Session::flash('status', 'New Task Created');

        return redirect('/projects/'.$task->project->slug.'/tasks/'.$task->slug.'/edit');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit($project, $task)
    {
        $task = Task::where('slug', '=', $task)->firstOrFail();
        $tasks = Task::get();
        $project = Project::where('slug', '=', $project)->firstOrFail();
        return view('admin.task.edit')->withProject($project)->withTask($task)->withTasks($tasks);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $project, $task)
    {
        $task = Task::where('slug', '=', $task)->firstOrFail();
        // dd($request);
        $this->validate($request, array(
            'name' => 'required|max:255',
            'slug' => 'required|max:255',
            'requestor' => 'max:255',
            'tag' => 'required',
            'description' => '',
            'priority' => '',
            'due_date' => '',
            'ticket_number' => '',
            'completed_date' => ''
        ));

        $task->name = $request->name;
        $task->tag = $request->tag;
        $task->requestor = $request->requestor;
        $task->description = $request->description;
        $task->priority = $request->priority;
        $task->ticket_number = $request->ticket_number;

        if($request->due_date != NULL)
        {
            $task->due_date = $request->due_date;
        }
        $task->completed_date = $request->completed_date;
        // if($request->completed_date != NULL)
        // {
        //     dd($request->completed_date);
        //     // $task->completed_date = $request->completed_date;
        // }

        $task->slug = $request->name;
        $delimiter = '-';
        $task->slug = iconv('UTF-8', 'ASCII//TRANSLIT', $task->slug);
        $task->slug = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $task->slug);
        $task->slug = preg_replace("/[\/_|+ -]+/", $delimiter, $task->slug);
        $task->slug = strtolower(trim($task->slug, $delimiter));
        $task->slug = $task->slug.'-'.str_random(4).''.\Carbon\Carbon::now()->hour.''.str_random(4);

        $task->save();

        Session::flash('status', 'New Task Updated');

        return redirect()->route('projects.show', $project);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy($project, $task)
    {
        $task = Task::where('slug', '=', $task)->firstOrFail();
        $task->delete();

        return redirect()->route('projects.show', $project);
    }
}
