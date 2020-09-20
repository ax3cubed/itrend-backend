<?php

namespace App\Http\Controllers;

use App\OtherTest;
use App\Http\Resources\OtherTestResource;
use Illuminate\Http\Request;
use App\UserTest;
use DB;
use App\Http\Controllers\QuestionsController;
class OtherTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return OtherTestResource::collection(OtherTest::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userTest = UserTest::where('questionId',$request->questionId)
        ->where('quizLink',$request->quizLink)->first();
        $condition=$userTest->optionAnswerId == $request->optionAnswerId;
        if ($condition) {
             OtherTest::create([
                'userId'=> $request->userId,
                'questionId'=>$request->questionId,
                'optionAnswerId'=> $request->optionAnswerId,
                'quizLink'=> $request->quizLink,
                'score' => 1
            ]);
        }
        else{
            OtherTest::create([
                'userId'=> $request->userId,
                'questionId'=>$request->questionId,
                'optionAnswerId'=> $request->optionAnswerId,
                'quizLink'=> $request->quizLink,
                'score' => 0
            ]);
        }


        return response()->json(["message"=>$condition], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OtherTest  $otherTest
     * @return \Illuminate\Http\Response
     */
    public function show(OtherTest $otherTest)
    {
        //
    }

    public function getScoresByQuiz( Request $request)
    {
        $scores = DB::select("SELECT userId, SUM(score) as score, COUNT(q.id) as number_of_questions FROM other_tests o INNER JOIN questions q WHERE q.id= o.questionId and quizLink=? GROUP BY userId", [$request->quizLink]);
        return response()->json($scores, 200);


    }
    public function getFriendScore(Request $request)
    {
        $score = DB::select("SELECT userId, SUM(score) as score , COUNT(q.id) as number_of_questions FROM other_tests o INNER JOIN questions q WHERE q.id= o.questionId and userId =? AND quizLink=?", [$request->userId, $request->quizLink]);
        $result= DB::select("SELECT  q.question_text, qo.option , o.score from other_tests o INNER JOIN questions q , questions_options qo WHERE q.id= o.questionId AND qo.id=o.optionAnswerId AND o.quizLink=? AND o.userId=?", [$request->quizLink, $request->userId]);

        return response()->json(["score"=> $score[0] ,"result"=>$result] , 200);
    }

    public function getQuestionsByQuizLink($link)
    {
         $questionsController = new QuestionsController();
        $questions= DB::select("SELECT q.topic_id from user_tests u INNER JOIN questions q WHERE q.id= u.questionId AND u.quizLink=? LIMIT 1", [$link]);
        $topic_id = $questions[0]->topic_id;
        $data = $questionsController->getQuestionsByTopic($topic_id);
        return response()->json($data->original, 200);
        // return  QuestionResource::collection($questions);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OtherTest  $otherTest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OtherTest $otherTest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OtherTest  $otherTest
     * @return \Illuminate\Http\Response
     */
    public function destroy(OtherTest $otherTest)
    {
        //
    }
}
