<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appoinment;


class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if (Auth::user()->usertytpe==1) {

                return view('admin.home');
            }elseif(Auth::user()->usertytpe==0)
            {
               $doctor = doctor::all();
                return view('user.home', compact('doctor'));
            }
        }else
        {
            return redirect()->back();
        }
    }

    public function index()
    {
        if(Auth::id()){
            return redirect('home');
        }
        else
        {
        $doctor = doctor::all();

        return view('user.home', compact('doctor'));
        }
    }


    public function appoinment(Request $request)
    {
        $data = new appoinment;

        $data->name = $request->name;
        $data->email = $request->email;
        $data->date = $request->date;
        $data->phone = $request->number;
        $data->message = $request->message;
        $data->doctor = $request->doctor;
        $data->status = 'In progress';
        
        if(Auth::id())
        {
            $data->user_id = Auth::user()->id;
        }
        $data->save();

        return redirect()->back()->with('message','appoint successfull!');
    }
   
    public function myappointment(Request $request)
    {
        if(Auth::id()){

            $userid=Auth::user()->id;
            $appoint=appoinment::where('user_id',$userid)->get();

            return view('user.my_appointment',compact('appoint'));
        }
        else{
            return redirect()->back();
        }
    }
     public function cancel_appoint($id)
    {
       $data = appoinment::find($id);
       $data->delete();

       return redirect()->back();
    }

}
