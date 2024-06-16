<?php

namespace App\Http\Controllers;

use App\Models\BookingModel;
use App\Models\UserModel;
use App\Models\WebpageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = UserModel::get();
        return view('AdminDashboard\Users\index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
        return view('AdminDashboard\Users\addEdit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function save(Request $request)
    {
        $user = new UserModel([
            'name' =>$request->get('name'),
            'email'=>$request->get('email'),
            'phone_no'=>$request->get('phone_no'),
            'password'=>Hash::make('secret'),
            'user_type'=>$request->get('user_type')
        ]);
        $user->save();
        return redirect()->route('user');
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
        $data = UserModel::find($id);
        return view('AdminDashboard\Users\addEdit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone_no' => 'required|numeric',
            'user_type' => 'required|integer', // Ensures user_type is an integer
        ]);

        $user = UserModel::find($id);
        $user->name=$request->get('name');
        $user->email=$request->get('email');
        $user->phone_no = $request->get('phone_no');
        $user->user_type = $request->get('user_type');
        
        $user->save();
        return redirect()->route('user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function viewDelete($id)
    {
        return view('AdminDashboard.Users.delete');
    }

    public function delete($id){
        UserModel::where('id',$id)->delete();
        return redirect()->route('user');
    }

    public function getProfile(){
       // dd(123);
        $data = UserModel::find(Auth::user()->id);
        if(Auth::user()->user_type == 1){
            $view = 'AdminDashboard.Profile.index';
        }else{
            $view = 'UserDashboard.Profile.index';
        }
        return view($view,['data'=>$data]);
    }

    public function saveProfile(Request $request){
          // Validate the request data
          $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone_no' => 'required|numeric',
            'user_type' => 'required|integer', // Ensures user_type is an integer
        ]);

        $user = UserModel::find(Auth::user()->id);
        $user->name=$request->get('name');
        $user->email=$request->get('email');
        $user->phone_no = $request->get('phone_no');
        $user->user_type = $request->get('user_type');
        
        $user->save();
        return redirect()->route('user.profile.get');
    
    }

    public function adminDashboard(){
        $data['totalUsers'] = 0 ;
        $data['adminUsers'] = 0 ;
        $data['clientUsers'] = 0 ;
        $data['totalBookings'] = 0;
        $data['completedBookings'] = 0;
        $data['totalWebpages'] = 0 ;
        $data['activeWebpages'] = 0 ;
        $data['totalUsers'] = UserModel::count() ;
        $data['adminUsers'] = UserModel::where('user_type',1)->count();
        $data['clientUsers'] = UserModel::where('user_type',2)->count();
        $data['totalBookings'] = BookingModel::count();
        $data['completedBookings'] = BookingModel::where('status',3)->count();
        $data['totalWebpages'] = WebpageModel::count();
        $data['activeWebpages'] = WebpageModel::where('status',1)->count();
        return view('AdminDashboard.index',['data'=>$data]);
    }

    public function userDashboard(){
        $data['totalBookings'] = BookingModel::where('user_id',Auth::user()->id)->count();
        $data['completedBookings'] = BookingModel::where('status',3)->where('user_id',Auth::user()->id)->count();
        return view('UserDashboard.index',['data'=>$data]);
    }
}
