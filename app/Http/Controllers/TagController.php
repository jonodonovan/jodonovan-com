<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Project;
use Illuminate\Http\Request;
use Auth;
use Session;

class TagController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		if ($request->project_type == '2') {

			$this->validate($request, array(
	            'name' => 'required|max:255',
	        ));

	        $tag = new Tag;

	        $tag->user_id = Auth::user()->id;
	        $tag->project_id = $request->project_id;
	        $tag->name = $request->name;
	        $tag->slug = str_random(4).''.\Carbon\Carbon::now()->hour.''.str_random(4);

	        $tag->save();

	        Session::flash('status', 'New Tag Created');

	        return back();

		} else {
			$this->validate($request, array(
	            'name' => 'required|max:255',
	            'use_duedate' => ''
	        ));

	        $tag = new Tag;

	        $tag->user_id = Auth::user()->id;
	        $tag->project_id = $request->project_id;
	        $tag->name = $request->name;
	        $tag->slug = str_random(4).''.\Carbon\Carbon::now()->hour.''.str_random(4);
	        $tag->use_duedate = $request->use_duedate;

	        $tag->save();

	        Session::flash('status', 'New Tag Created');

	        return back();
		}

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit($project, $tag)
    {
        $tag = Tag::where('slug', '=', $tag)->firstOrFail();
        return view('admin.tag.edit')->withTag($tag)->withProject($project);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $project, $tag)
    {
        $tag = Tag::where('slug', '=', $tag)->firstOrFail();

        $this->validate($request, array(
            'name' => 'required|max:255'
        ));

        $tag->name = $request->name;
        $tag->save();

        Session::flash('status', 'Tag Updated');

        return redirect()->route('projects.show', $project);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        //
    }
}
