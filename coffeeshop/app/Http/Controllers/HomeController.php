<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function adminHome()
    {
        return view('admin.index');
    }

    public function showChangePasswordGet() {
        return view('auth.passwords.change');
    }

    public function changePasswordPost(Request $request) {
        $this->validate($request, [
            'current_password' => 'required|string',
            'new_password' => 'required|confirmed|min:8|string'
        ]);
        $auth = Auth::user();

        if (!Hash::check($request->get('current_password'), $auth->password)) 
        {
            return back()->with('error2', "Current Password is Invalid");
        }

        if (strcmp($request->get('current_password'), $request->new_password) == 0) 
        {
            return redirect()->back()->with("error1", "New Password cannot be same as your current password.");
        }
        
        $user =  User::find($auth->id);
        $user->password =  Hash::make($request->new_password);
        $user->save();
        return back()->with('success', "Password Changed Successfully");
    }

    public function showEditProfile() {
        return view('users.editprofile');
    }

    public function profileUpdate(Request $request){

        if(Auth::user()->email === $request['email']) {
            $this->validate($request,[
                'name' =>'required|min:4|string|max:255',
                'email'=>'email|required'
            ]);
        } else {
            $this->validate($request,[
                'name' =>'required|min:4|string|max:255',
                'email'=>'unique:users|email|required'
            ]);
        }


        $user =Auth::user();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return back()->with('success','Profile Updated');
    }

}
