<?php

namespace App\Http\Controllers;

use App\UserTest;
use Illuminate\Http\Request;
use App\Http\Resources\UserTestResource;
use Auth;
use DB;

class UserTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return UserTestResource::collection(UserTest::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userTest = UserTest::create([
            'userId' => $request->userId,
            'questionId' => $request->questionId,
            'optionAnswerId' => $request->optionAnswerId,
            'quizLink' => $request->quizLink
        ]);
        return new UserTestResource($userTest);
    }

    public function getUserQuizzes()
    {
        $userQuizzes = UserTest::where('userId', Auth::user()->username)->groupBy('quizLink')->get();
        return UserTestResource::collection($userQuizzes);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\UserTest  $userTest
     * @return \Illuminate\Http\Response
     */
    public function show($userTest)
    {
        return new UserTestResource(UserTest::find($userTest));
    }

    public function getQuestionsAndAnswers($quizLink)
    {
        $data = DB::select("SELECT q.question_text,qo.option, u.created_at  FROM user_tests u INNER JOIN  questions q, questions_options qo where u.questionId = q.id  AND qo.id = u.optionAnswerId AND u.quizLink=?", [$quizLink]);
        return response()->json($data, 200);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserTest  $userTest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserTest $userTest)
    {
        $userTest->update($request->only(['option_id']));
        return new UserTestResource($userTest);
    }

    public function getUserTestByLink(Request $request)
    {
        $userTest = UserTest::where('quizLink', $request['link'])->where('userId', Auth::user()->username)->get();
        if ($userTest->count() == 0) {
            return response()->json(['message' => 'error, no such link'], 200);
        } else {
            return UserTestResource::collection($userTest);
        }
    }

    public function getFriendsResults(Request $request)
    {
        $result= DB::select("SELECT  q.question_text, qo.option , o.score from other_tests o INNER JOIN questions q , questions_options qo WHERE q.id= o.questionId AND qo.id=o.optionAnswerId AND o.quizLink=? AND o.userId=?", [$request->quizLink, $request->userId]);
        return response()->json($result, 200);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserTest  $userTest
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserTest $userTest)
    {
        $userTest->delete();
        return response()->json(["message" => "deleted"], 200);
    }
}
