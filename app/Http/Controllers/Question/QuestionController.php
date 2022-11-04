<?php

namespace App\Http\Controllers\Question;

use App\Http\Controllers\Controller;
use App\Http\Requests\QuestionRequest;
use App\Models\Comment;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create()
    {
        return view('pages.question-form');
    }
    public function store(QuestionRequest $request)
    {
         Question::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'description' => $request->description,
            'file' => $request->file('uploadedFile')->store('questions'),
        ]);

        return redirect()->route('index');
    }
    public function viewUpdate(Request $request)
    {
        $update_id = $request->update_id;
        $question = Question::where('id', $update_id)->first();

        if($question)
        {
            return view('pages.update', compact('question'));
        }
        return back();
    }
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|min:6',
            'description' => 'required|min:10',
        ]);
        $question = Question::find($request->update_id);

        $question->title = $request->title;
        $question->description = $request->description;
        $question->save();

        return redirect()->route('questions');
    }
    public function delete(Request $request)
    {
        Question::whereId($request->delete_id)->delete();

        return redirect()->route('questions');
    }
    public function answer(Request $request)
    {
        $request->validate(['answer' => 'required']);

        Comment::create([
            'user_id' => auth()->user()->id,
            'question_id' => $request->questionID,
            'answer' => $request->answer,
        ]);

        return back();
    }
}
