<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;
use Illuminate\Http\Request;
use Session;
use Auth;

class BlogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['publicindex', 'publicshow', 'publicampshow']]);
    }

    public function publicindex()
    {
        $project = Project::where('project_type', '=', 2)->firstOrFail();
        $posts = Task::where('project_id', '=', $project->id)->where('publish_date', '<', \Carbon\Carbon::now())->orderBy('publish_date', 'DSC')->get();
        return view('blog.index')->withPosts($posts);
    }

    public function publicshow($slug)
    {
        $project = Project::where('project_type', '=', 2)->firstOrFail();
        $post = Task::where('project_id', '=', $project->id)->where('slug', '=', $slug)->firstOrFail();
        return view('blog.show')->withPost($post);
    }

    public function publicampshow($slug)
    {
        $post = Task::where('project_id', '=', '3')->where('slug', '=', $slug)->firstOrFail();
        return view('blog.amp')->withPost($post);
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

        $task->slug = $request->name;
        $delimiter = '-';
        $task->slug = iconv('UTF-8', 'ASCII//TRANSLIT', $task->slug);
        $task->slug = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $task->slug);
        $task->slug = preg_replace("/[\/_|+ -]+/", $delimiter, $task->slug);
        $task->slug = strtolower(trim($task->slug, $delimiter));

        $task->save();

        Session::flash('status', 'New Post Created');

        return redirect('/projects/'.$task->project->slug.'/tasks/'.$task->slug.'/edit');
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
            'tag' => 'required',
            'intro' => 'required',
            'description' => '',
            'publish_date' => '',
        ));

        $task->name = $request->name;
        $task->tag_id = $request->tag;
        $task->intro = $request->intro;
        $task->description = $request->description;
        if($request->publish_date != NULL)
        {
            $task->publish_date = $request->publish_date;
        }

        $task->save();

        Session::flash('status', 'Post Updated');

        return redirect()->route('projects.show', $project);
    }
}
