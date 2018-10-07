<?php

namespace App\Http\Controllers;



use App\Experience;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Cv;
use Auth;
use App\Http\Requests\cvRequest;
use Illuminate\Http\Response;


class Cvcontrollers extends Controller
{


    public function __construct()
    {
         $this->middleware('auth');
    }

    public function index(){


        if (Auth::user()->is_admin){
            $listecv = Cv::all();
        }else
        {
            $listecv=Auth::user()->cvs;

        }
        return view('cv.index',['cvs' => $listecv]);

    }

    public function create(){
        return view('cv.create');

    }

    public function store(cvRequest $request){

        $cv =new Cv();

        $cv ->titre =$request->input('titre');
        $cv ->presentation =$request->input('presentation');
        $cv->user_id =Auth::user()->id;


        if($request->hasFile('photo'))
        {
            $cv->photo = $request->photo->store('image');

        }

        $cv->save();
        session()->flash('succes','le cv été bien enregisté!!');

        return redirect('cvs/');

    }


    public function edit($id){
        $cv =Cv::find ($id);
        $this->authorize('update',$cv);
        return view('cv.edit',['cv' => $cv]);

    }

    public function update(cvRequest $request,$id){

        $cv= Cv::find($id);
        $cv->titre = $request->input('titre');
        $cv->presentation =$request->input('presentation');
        $cv->user_id=Auth::user()->id;

        if($request->hasFile('photo'))
        {
           $cv->photo=$request->photo->store('image');


        }
        $cv->save();
        return redirect('cvs/');

    }

    public function show($id){


        return view('cv.show',['id' =>  $id]);

    }




    public function destroy(Request $request ,$id){

        $cv =Cv::find($id);
        $this->authorize('delete',$cv);

        $cv->delete();
        return redirect('cvs');

    }


    public function getExperiences($id){
        $cv = Cv::find($id);
        return $cv->experiences;
    }


    public function addExperience(Request $request){
        $experience =new Experience;

        $experience->titre = $request->titre;
        $experience->body =$request->body;
        $experience->debut=$request->debut;
        $experience->fin =$request->fin;
        $experience->cv_id =$request->cv_id;

        $experience->save();


        return Response()->json(['etat'=> true, 'id'=> $experience->id]);
    }
}
