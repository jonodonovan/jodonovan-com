<?php

namespace App\Http\Controllers;

use App\Project;
use App\Tag;
use App\Task;
use Illuminate\Http\Request;
use Session;
use Auth;

class ProjectController extends Controller
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
        $projects = Project::orderBy('name')->get();
        $tags = Tag::orderBy('name')->get();
        $tasks = Task::get();
        return view('admin.project.index')->withProjects($projects)->withTags($tags)->withTasks($tasks);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all($slug)
    {
        $project = Project::where('slug', '=', $slug)->firstOrFail();
        $tasks = Task::orderBy('due_date', 'asc')->get();
        return view('admin.project.all')->withProject($project)->withTasks($tasks);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function completed($slug)
    {
        $project = Project::where('slug', '=', $slug)->firstOrFail();
        $tags = Tag::orderBy('name')->where('project_id', '=', $project->id)->get();
        $tasks = Task::get();
        return view('admin.project.completed')->withProject($project)->withTags($tags)->withTasks($tasks);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function deleted($slug)
    {
        $project = Project::where('slug', '=', $slug)->firstOrFail();
        $tags = Tag::orderBy('name')->where('project_id', '=', $project->id)->get();
        $tasks = Task::onlyTrashed()->where('project_id', '=', $project->id)->get();
        return view('admin.project.deleted')->withProject($project)->withTags($tags)->withTasks($tasks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project.create');
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
        ));

        $project = new Project;

        $project->slug = $request->name;
        $delimiter = '-';
        $project->slug = iconv('UTF-8', 'ASCII//TRANSLIT', $project->slug);
        $project->slug = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $project->slug);
        $project->slug = preg_replace("/[\/_|+ -]+/", $delimiter, $project->slug);
        $project->slug = strtolower(trim($project->slug, $delimiter));
        $project->slug = $project->slug.'-'.str_random(4).''.\Carbon\Carbon::now()->hour.''.str_random(4);

        $project->name = $request->name;
        $project->user_id = Auth::user()->id;
        $project->project_type = $request->channel;

        $project->save();

        Session::flash('status', 'New Project Created');

        return redirect()->route('projects.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $project = Project::where('slug', '=', $slug)->firstOrFail();
        $tags = Tag::orderBy('name')->where('project_id', '=', $project->id)->get();
        $tasks = Task::where('project_id', '=', $project->id)->get();
        return view('admin.project.show')->withProject($project)->withTags($tags)->withTasks($tasks);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
