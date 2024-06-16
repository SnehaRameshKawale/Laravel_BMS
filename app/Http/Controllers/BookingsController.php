<?php

namespace App\Http\Controllers;

use App\Models\BookingModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = BookingModel::select('bookings.*','users.name as user_name');
        $query->leftJoin('users','bookings.user_id','=','users.id');
        $data = $query->get();
        return view('AdminDashboard.Bookings.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function userBookings()
    {
        $query = BookingModel::select('bookings.*','users.name as user_name');
        $query->leftJoin('users','bookings.user_id','=','users.id');
        $query->where('bookings.user_id',Auth::user()->id);
        $data = $query->get();
        return view('UserDashboard.Bookings.index',['data'=>$data]);
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function add()
    {
        $data = UserModel::get();
        return view('AdminDashboard.Bookings.addEdit',['data'=>$data]);
    }

    /**
     * Display the specified resource.
     */
    public function save(Request $request)
    {
        $user = new BookingModel([
            'name'=>$request->get('booking_name'),
            'booking_datetime'=>$request->get('booking_on'),
            'status'=>$request->get('booking_status'),
            'user_id'=>Auth::user()->user_type == 1 ? $request->get('user_name'):Auth::user()->id
        ]);
        $user->save();
        if(Auth::user()->user_type == 1){
            $route = 'booking.all';
        }else{
            $route = 'booking.my';
        }
        return redirect()->route($route); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function getBookingById($id)
    {
        $data = UserModel::get();
        $booking = BookingModel::find($id);
        return view('AdminDashboard.bookings.addEdit',['data'=>$data,'booking'=>$booking]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateBookingById(Request $request,$id)
    {
        $booking = BookingModel::find($id);
        $booking->name = $request->get('booking_name');
        $booking->booking_datetime = $request->get('booking_on');
        $booking->status = $request->get('booking_status');
        $booking->user_id = Auth::user()->user_type == 1 ? $request->get('user_name'):Auth::user()->id;
        $booking->save();
        if(Auth::user()->user_type == 1){
            $route = 'booking.all';
        }else{
            $route = 'booking.my';
        }
        return redirect()->route($route);   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function viewDelete($id)
    {
        if(Auth::user()->user_type == 1){
            $view = 'AdminDashboard.Bookings.delete';
        }else{
            $view = 'UserDashboard.Bookings.delete';
        }
        return view($view); 
    }

    public function delete($id){
        $status = BookingModel::where('id',$id)->delete();
        if(Auth::user()->user_type == 1){
            $route = 'booking.all';
        }else{
            $route = 'booking.my';
        }
        return redirect()->route($route);
    }
}
