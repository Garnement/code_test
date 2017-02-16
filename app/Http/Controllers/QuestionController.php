<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Question;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::pluck('name', 'id'); //Récupère le titre et l'id en renvoyant un tableau Array_collection
        
        return view('back.question.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $question = Question::create( $request->all() );

        session()->flash('flashMessage', 'La question a été ajoutée');

        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Récupération des datas sur la question
        $question = Question::find($id);

        //Récupération des datas nécéssaires au formulaire
        $category = Category::pluck('name', 'id');

        return view('back.question.edit', compact('question', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        //Récupération des informations de la question
        $question = Question::find($id);

        Question::update( $request->all() );

        session()->flash('flashMessage', 'Modification effectuée');

        return redirect()->route('dashboard');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Question::destroy($id);

        //Flash message de confirmation
        session()->flash('flashMessage', 'Suppression effectuée');

        //Redirection vers le dashboard
        return redirect()->route('dashboard');
    }
}