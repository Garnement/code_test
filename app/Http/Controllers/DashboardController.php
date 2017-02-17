<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Question;
use App\Category;
use Auth;

class DashboardController extends Controller
{
      
      public function __construct() 
      {
        view()->composer('back.partials.nav', function($view){
        
        $categories = DB::table('categories')->select('name', 'id')->get();

        $view->with('categories', $categories);

        });

        view()->composer('back.partials.sidebar', function($view){

        $user = Auth::user();

        $view->with('user', $user);
        });
      }


    public function profile()
    {
        $questions = Question::orderBy('date', 'desc')->paginate(5);
        
        return view('back.dashboard', compact('questions'));
    }

    public function questionsByCat(int $id)
    {
        $category = Category::find($id);

        $name = $category->name;

        $questions = $category->questions;

        return view('back.category', compact('name', 'questions', 'category') );
    }
}
