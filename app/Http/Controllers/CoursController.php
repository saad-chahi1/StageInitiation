<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

use App\Cour;

class CoursController extends Controller
{
	/*public function Form()
	{
		return view('filePages/cours');
	}*/
	public function getId()
    {
        return $this->id;
    }

    public function getForm()
	{
		$id = Auth::id();
		if($id==4){
			return view('filePages/coursadmin');
		}else{
			$data['data']=DB::table('cours')->get();
			if(count($data)>0){
               return view('filePages/cours',$data);
			}else{
               return view('filePages/cours');
			}
			
		}
	
	}

	public function storeForm(Request $request)
	{
		Cour::create([
            'niveau'=>$request->niveau,
            'matiere'=>$request->matiere, 
            'titre'=>$request->titre, 
            'commentaire'=>$request->commentaire, 
            'fichier'=>$request->fichier,
		]);
		$data['data']=DB::table('cours')->get();
			if(count($data)>0){
               return view('filePages/cours',$data);
			}
	}

	public function delete(){

	}

	public function edit(){
		
	}
}
