<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Question;
use App\Category;
use DB;

class FrontController extends Controller
{
    public function index()
    {
        //Requête sur les question qui ont été publiées.
        $questions = Question::Date()->orderBy('date', 'desc')->paginate(5);

        return view('front.index', ['questions' => $questions]);
    }

    public function questionById(int $id)
    {
        $question = Question::find($id);

        return view('front.single', compact('question'));
    }

    //Questions par catégorie
    public function questionsByCat(int $id)
    {
        $category = Category::find($id);

        $name = $category->name;

        $questions = $category->questions()->orderBy('date', 'desc')->paginate(5);

        return view('front.cat', compact('name', 'questions', 'category') );
    }

    //Questions sans catégories
    public function questionsWithoutCat()
    {
        $questions = Question::questionWithoutCategory()->get();

        return view('front.withoutcat', compact('questions'));
    }
}
