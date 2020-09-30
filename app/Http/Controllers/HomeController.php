<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Message;
use App\Lesson;
use Auth;


use Illuminate\Http\UploadedFile;

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

    public function getId()
    {
        return $this->id;
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

    public function profil() {
        
        $id = Auth::id();
        if($id==4){
           return view('filePages/profil');
       }else{
          return view('filePages/mes-info'); 
       }
    }

    public function info() {
        return view('filePages/mes-info');
    }

    public function updateForm(Request $request, $id){
     
         $sundays = $request->input('matiere');
    if($request->input('matiere') != NULL){


    foreach($sundays as $sunday){
       $sundaysArray[] = $sunday;
    }
    }
        $lesson = User::find($id);

        $lesson->name = $request->input('nom');
        $lesson->addrs = $request->input('adresse');
        $lesson->email = $request->input('email');
        $lesson->ecole = $request->input('ecole');
        $lesson->tele = $request->input('tele');
        
        if($lesson->disp==0){
            $lesson->category = $request->input('category');
            $lesson['mat'] = json_encode($sundaysArray);// $request->input('matiere');
            $lesson->niv = $request->input('niveau');
        }
        if($request ->hasFile('photo')){  
           $lesson->photo = $request->photo->store('image');
        }
        $lesson->save();

        return redirect('mes-info');
    }

}
