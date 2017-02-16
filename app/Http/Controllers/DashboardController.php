<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Question;

class DashboardController extends Controller
{
      
      public function __construct() 
      {
        view()->composer('back.partials.nav', function($view){
        
        $categories = DB::table('categories')->select('name', 'id')->get();

        $view->with('categories', $categories);

        });
      }


    public function profile()
    {
        $questions = Question::paginate(5);
        
        return view('back.dashboard', compact('questions', 'date'));
    }
}
