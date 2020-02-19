<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Document;
class DocumentsController extends Controller
{
    //
    public function index(){
        $documents = Document::all();
        return view('documents.index',compact('documents'));
    }

    public function show($id){
        $documents = Document::find($id);
        //return $id;
        return view('documents.show',compact('documents'));
    }
}
