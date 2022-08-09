<?php

namespace App\Http\Controllers;

use App\Group;
use App\SousGroup;
use App\SousGroupe;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $groups=Group::all();

        return view('frontend.home',compact('groups'));

    }

    public function about(){
        return view('frontend.about');
    }

    public function connect(){
        return view('frontend.connect');
    }

    public function showSousGroup($id){
        //recupere un groupe en fonction de l'id
        $group=Group::find($id);
        //la ligne si recupere tout les sous group d'une categorie donc on a entrer l'id
        $sous_groups=$group->sousGroup;
        return view('frontend.show_sous_group',compact('sous_groups','group'));
    }

    public function showDocuments($id){
        //
        $sousgroupe=SousGroupe::find($id);

        $documents=$sousgroupe->documents;
        $sousgroupe=SousGroupe::find($id);

        $images=$sousgroupe->images;
        $sousgroupe=SousGroupe::find($id);

        $videos=$sousgroupe->videos;


        return view('frontend.documents',compact('documents','images','videos'));
    }


    public function showVideos($id){
        //
        $sousgroupe=SousGroupe::find($id);

        $videos=$sousgroupe->videos;

        return view('frontend.video',compact('videos'));
    }
    public function showCours($id){
        //
        $sousgroupe=SousGroupe::find($id);

        $cours=$sousgroupe->cours;

        return view('frontend.cours',compact('cours'));



    }


    public function showImages($id){

        $sousgroupe=SousGroupe::find($id);

        $images=$sousgroupe->images;

        return view('frontend.images',compact('images'));
    }





}
