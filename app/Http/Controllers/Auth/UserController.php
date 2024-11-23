<?php

namespace App\Http\Controllers\Auth;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function changePassword(Request $request){
        // currentPassword
        // password
        // password_confirmation
        $request->validate([
            'password' => 'required|string|confirmed'
        ]);
        $user_id = auth()->user()->id;
        $user = User::where('id', $user_id)->first();
        $result = Hash::check($request->currentPassword, $user->password);
        if($result){
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->back()->with('done', "Password updated successfuly");
        }
        else{
            return redirect()->back()->with('done', "The current password is not correct");
        }
    }
    public function profile(){
        $user_id = auth()->user()->id;
        $user = User::where('id', $user_id)->first();
        return view('users.profile')->with('user', $user);

    }
    public function index()
    {
        $users = User::all();
        return view('users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required|string|min:3',
            'email'=> 'required|email|unique:users,email',
            'password'=>'required|string|confirmed'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->type = $request->type;
        

        $user->save();
        return redirect()->back()->with('done', "User created successfuly");
    }

    public function instractor_round($id){
        $user_round = User::with('round')->where('type', 'instrauctor')->where('id', $id)->first();
        return view('users.user_round', compact('user_round'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $request->validate([
            'name'=> 'required|string|min:3',
            'email'=> 'required|email|unique:users,email,' . $user->id,
        ]);
        
        $user->name = $request->name;
        $user->email = $request->email; 
        $user->save();
        return redirect()->back()->with('done', "Profile Updated successfuly");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('done', "User Deleted successfuly");
    }
}
