<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Photo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Symfony\Component\Translation\Dumper\PoFileDumper;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function uploadPhoto(Request $request){
        $photos=$request->file ('photos');
        $user_id=Auth::User()->id;

        foreach ($photos as $photo){
            $photo_name=$photo->getClientOriginalName();
           $pt=new Photo();
           $pt->user_id=$user_id;
           $pt->photo_name=$photo_name;
           $pt->save();

           move_uploaded_file ($photo, public_path ()."/users/$photo_name");
        }
        return redirect ()->back();
    }
    public function remove(Request $request){
        $photos = $request->photos;
            foreach ($photos as $photo){
                unlink ("users/$photo");
            }
           DB::table('photos')->whereIn('photo_name', $photos)->delete();

        return redirect ()->back();

       // return redirect ()->back();
    }
}
