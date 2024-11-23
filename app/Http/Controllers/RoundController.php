<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use App\Models\Round;
use Illuminate\Http\Request;

class RoundController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rounds = Round::with('user')->get();
        return view('rounds.index', compact('rounds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::all();
        $instrauctor = User::where('type', 'instrauctor')->get();
        return view('rounds.create', compact('courses', 'instrauctor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'round_number' => 'required'
        ]);
        $round = new Round();
        $round->round_number = $request->round_number;
        $round->description = $request->description;
        $round->user_id = $request->user_id;
        $round->course_id = $request->course_id;


        $round->save();
        return redirect()->back()->with('done', "Round Added Successfuly");
    }


    /**
     * Display the specified resource.
     */
    public function show(Round $round)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $round = Round::find($id)->first();
        $courses = Course::all();
        $instrauctor = User::where('type', 'instrauctor')->get();
        // return $round;
        return view('rounds.edit', compact('round', 'courses', 'instrauctor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'round_number' => 'required'
        ]);
        $round = Round::find($id);
        $round->round_number = $request->round_number;
        $round->description = $request->description;
        $round->user_id = $request->user_id;
        $round->course_id = $request->course_id;

        $round->save();
        return redirect()->back()->with('done', "Round Updated Successfuly");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $round = Round::find($id);
        $round->delete();
        return redirect()->back()->with('done', "Round Deleted Successfuly");

    }
}
