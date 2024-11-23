<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reply = Reply::with('user', 'project')->get();
        return view('replies.index', compact('reply'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($project_id)
    {
        return view('replies.create', compact('project_id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $project_id)
    {
        $reply = new Reply();
        $reply->title = $request->title;
        $reply->demo_link = $request->demo_link;

        if ($request->has('attachments')) {
            $fileData = $request->file('attachments');
            $fileName = time() . $fileData->getClientOriginalName();
            $location = public_path('upload');
            $fileData->move($location, $fileName);
            $reply->attachments = $request->fileName;

        }

        $reply->project_id = $project_id;
        $reply->user_id = auth()->user()->id;

        $reply->save();
        return redirect()->back()->with('done', "Reply Created Successfuly");
    }

    /**
     * Display the specified resource.
     */
    public function show(Reply $reply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {  
        $reply = Reply::find($id);
        // return $reply;
        return view('replies.edit', compact('reply'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $reply = Reply::find($id);
        $reply->title = $request->title;
        $reply->demo_link = $request->demo_link;

        if ($request->has('attachments')) {
            $fileData = $request->file('attachments');
            $fileName = time() . $fileData->getClientOriginalName();
            $location = public_path('upload');
            $fileData->move($location, $fileName);
            $reply->attachments = $request->fileName;

        }
        $reply->save();
        return redirect()->back()->with('done', "Reply Updated Successfuly");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reply $reply)
    {
        //
    }
}
