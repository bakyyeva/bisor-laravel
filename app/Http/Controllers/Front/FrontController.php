<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Question;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function questions()
    {

        $questions = Question::latest();

        if(request('search'))
        {
            $questions
                ->where('title', 'like', '%'. request('search').'%')
                ->orWhere('description', 'like', '%'. request('search') .'%');
        }
        return view('pages.questions', [
            'questions' => $questions->get()
        ]);
    }
    public function show(Question $question)
    {
        $answers = Comment::where('question_id', $question->id)->orderBy('created_at', 'desc')->get();

       return view('pages.question', [
           'question' => $question,
           'answers' => $answers,
       ]);
    }
}
