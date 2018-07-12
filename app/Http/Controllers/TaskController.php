<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;
use App\Tag;
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
        $task->tag_id = $request->tag;
        $task->slug = str_random(4).''.\Carbon\Carbon::now()->hour.''.str_random(4);
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
        $tasklists = Task::where('id', '=', $task->id)->orderBy('requestor', 'asc')->get();
        $project = Project::where('slug', '=', $project)->firstOrFail();
        $tags = Tag::where('project_id', '=', $project->id)->get();
        return view('admin.task.edit')->withProject($project)->withTask($task)->withTasklists($tasklists)->withTags($tags);
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
            'requestor' => 'max:255',
            'tag' => 'required',
            'description' => '',
            'priority' => '',
            'due_date' => '',
            'ticket_number' => '',
            'completed_date' => ''
        ));

        $task->name = $request->name;
        $task->tag_id = $request->tag;
        $task->requestor = $request->requestor;
        $task->description = $request->description;
        $task->priority = $request->priority;
        $task->ticket_number = $request->ticket_number;

        if($request->due_date != NULL)
        {
            $task->due_date = $request->due_date;
        }
        $task->completed_date = $request->completed_date;

        $task->save();

        Session::flash('status', 'Task Updated');

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
