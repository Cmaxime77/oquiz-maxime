<?php

namespace App\Http\Controllers;
use App\Quizzes;
use App\Users;
use App\Questions;
use App\Answers;
use App\Levels;


class QuizController extends Controller{

    public function list() {

        $infoQuizzes = Quizzes::all();

        //dump($infoQuizzes);

        $users = Users::all();

       // dump($users);

        $authorNames = [];

        foreach($users as $user){

            $authorNames[$user->id] = $user->firstname.' '.$user->lastname;

        }

       // dump($authorNames);
 
        return  view('home', [
            'infoQuizzes' => $infoQuizzes,
            'authorNames' =>$authorNames,
            
        ]);

    }

    public function quiz($id) {


        $quiz = Quizzes::findOrFail($id);

        $author = Users::find($quiz->app_users_id);

        // dump($author);

         dump($quiz);

        $questions = Questions::where('quizzes_id', '=', $quiz->id)->get();

        // dump($questions);
        $answersList = [];

        foreach($questions as $question){

        $answers = Answers::where('questions_id', '=', $question->id)->get();

        $answersList[$question->id] = $answers;

        }
        dump($answersList);



        return view('quiz', [
            'questions' => $questions,
            'author' => $author,
            'answersList' => $answersList,
        ]);
       

    }


}