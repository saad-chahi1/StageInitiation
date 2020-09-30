<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lesson;
use App\User;
use App\Message;
use Mail;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;


class LessonController extends Controller
{

//pour les lessons
    public function index(){
         $listlesson = Lesson::all();
         $listuser = User::whereNotIn('id', [4])->get();

         return view('lesson.index',['lessons'=>$listlesson, 'users'=>$listuser]);
    }

    public function create(){
    	return view('lesson.create');
    }

    public function store(Request $request){

    	$lesson = new Lesson();

    	$lesson->niveau = $request->input('niveau');
    	$lesson->matiere = $request->input('matiere');
    	$lesson->titre = $request->input('titre');
    	$lesson->comm = $request->input('commentaire');

        $lesson->category = $request->input('category');
      
        if($request ->hasFile('fichier')){
            $lesson->fichier = $request->fichier->store('');
        }
    	$lesson->save();

    	return redirect('lessons');
    }

    public function edit($id){
    	$lesson = Lesson::find($id);

    	return view('lesson.edit', ['lesson' =>$lesson]);
    }

    public function update(Request $request, $id){
    	$lesson = Lesson::find($id);

    	$lesson->niveau = $request->input('niveau');
    	$lesson->matiere = $request->input('matiere');
    	$lesson->titre = $request->input('titre');
    	$lesson->comm = $request->input('commentaire');
    	$lesson->fichier = $request->input('fichier');

    	$lesson->save();

    	return redirect('lessons');
    }

    public function destroy(Request $request, $id){
    	$lesson = Lesson::find($id);
        $lesson ->delete();
    	return redirect('lessons');
    }


    public function detail($id){
         $lesson = Lesson::find($id);

         return view('filePages.details',['detail'=>$lesson]);
    }
    
    public function view($id){
         $detail=Lesson::find($id);
         return view('filePages.pdf',compact('detail'));

    }

    public function show($id){
         $lesson = Lesson::find($id);

         return Storage::download($lesson ->fichier, $lesson ->fichier);
    }

    public function trie($category, $niv){

        $events = Lesson::where('niveau' , $niv);

        $events = $events->where("category" , $category)->get();

        return view('filePages.lesmatiere11', ['lessons' =>$events]);
    }

    public function triemat($category, $niv, $mat){

        $event = Lesson::where('niveau' , $niv);
        $event = $event->where("matiere" , $mat);
        $event = $event->where("category" , $category)->get();

        return view('filePages.lesmatiere', ['lessons' =>$event]);
    }

//pour les utilisateurs
    public function destroyu(Request $request, $id){
        $user = User::find($id);
        $user ->delete();
        return redirect('lessons');
    }
    public function showu($id){
        $user = User::find($id);

         return view('filePages.useradmin',['detail'=>$user]);
    }

    public function updateu(Request $request, $id){
        User::where('id', $id)->update(array('disp' => 1));

        return redirect('lessons');
    }

    public function upda(Request $request, $id){
        User::where('id', $id)->update(array('disp' => 0));

        return redirect('lessons');
    }
//message

    public function indexm($id){
         $listluser = User::all();

        $msg = Message::where('dispatch' , 1);

        $msg = $msg->where("id1" , $id)->get();

         return view('filePages.messages',['users'=>$listluser, 'msg'=>$msg]);
    }

     public function createm($id1, $id2){ 
        $msg = Message::where('dispatch' , 1);

        $msg = $msg->where("id1" , $id2);
        $msg = $msg->where("id2" , $id1);
        $msg=$msg->update(array('dispatch' => 0));
       
        $message1 = Message::all();

        return view('filePages.chatbox',['message1'=>$message1, 'tod1' => $id1, 'tod2'=> $id2]);
    }

    public function message(Request $request,$id1, $id2){

       $lesson = new Message();

        $lesson->message = $request->input('msg');
        $lesson->id1 = $id1;
        $lesson->id2 = $id2;
        $lesson->dispatch = 1;
        $lesson->save();

        return redirect('boitechat/'.$id1.'/to/'.$id2);
    }


}
