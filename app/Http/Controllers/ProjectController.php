<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Round;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('round')->get();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rounds = Round::all();
        return view('projects.create', compact('rounds'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $project = new Project();
        $project->title = $request->title;
        $project->description = $request->description;
        $project->demo_link = $request->demo_link;
        $project->round_id = $request->round_id;

        if($request->has('attachments')){
            $fileData = $request->file('attachments');
            $fileName = time() . $fileData->getClientOriginalName();
            $location = public_path('upload');
            $fileData->move($location, $fileName);
            $project->attachments = $request->fileName;

        }


        $project->save();
        return redirect()->back()->with('done', "Project Created Successfuly");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        
        $project = Project::with('round')->where('id', $id)->first();
        // return $project;
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {  
        $rounds = Round::all();
        $project = Project::find($id);
        // return $project;
        return view('projects.edit', compact('project', 'rounds'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $project = Project::find($id);
        $project->title = $request->title;
        $project->description = $request->description;
        $project->demo_link = $request->demo_link;
        $project->round_id = $request->round_id;

        if($request->has('attachments')){
            $fileData = $request->file('attachments');
            $fileName = time() . $fileData->getClientOriginalName();
            $location = public_path('upload');
            $fileData->move($location, $fileName);
            $project->attachments = $request->fileName;

        }
        $project->save();
        return redirect()->back()->with('done', "Project Updated Successfuly");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect()->back()->with('done', "Project Deleted Successfuly");
    }
}
