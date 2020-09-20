<?php

namespace App\Http\Controllers;

use App\Question;
use App\Topic;
use App\QuestionsOption;
use Illuminate\Http\Request;
use App\Http\Requests\StoreQuestionsRequest;
use App\Http\Resources\QuestionResource;
use App\Http\Requests\UpdateQuestionsRequest;

class QuestionsController extends Controller
{
    public function __construct()
    {

    }

    /**
     * Display a listing of Question.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();

       return response()->json($questions, 200);
    }

    /**
     * Show the form for creating new Question.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created Question in storage.
     *
     * @param  \App\Http\Requests\StoreQuestionsRequest  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(StoreQuestionsRequest $request)
    // {

    //     $question = Question::create($request->all());

    //     foreach ($request->input() as $key => $value) {
    //         if(strpos($key, 'option') !== false && $value != '') {
    //             $status = $request->input('correct') == $key ? 1 : 0;
    //             QuestionsOption::create([
    //                 'question_id' => $question->id,
    //                 'option'      => $value,
    //                 'correct'     => $status
    //             ]);
    //         }
    //     }

    public function store(StoreQuestionsRequest $request)
    {

        $question = Question::create($request->all());

        foreach ($request->input() as $key => $value) {
            if(strpos($key, 'option') !== false && $value != '') {

                QuestionsOption::create([
                    'question_id' => $question->id,
                    'option'      => $value,

                ]);
            }
        }

       return response()->json($question, 200);
    }


    /**
     * Show the form for editing Question.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Update Question in storage.
     *
     * @param  \App\Http\Requests\UpdateQuestionsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuestionsRequest $request, $id)
    {
        $question = Question::findOrFail($id);
        $question->update($request->all());

        return response()->json($question, 200);
    }


    /**
     * Display Question.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $question = Question::findOrFail($id);
        $questionOption = QuestionsOption::where('question_id',$id)->get();

        $options = [
           'options'=> $questionOption
        ];

        return response()->json(compact('question') + $options, 200);
    }

    public function getQuestionsByTopic($topic_id)
    {
        $topic = Topic::find($topic_id);


        $questions = Question::where('topic_id',$topic_id)->get();

        $topic->questions = QuestionResource::collection($questions);


        return response()->json($topic, 200);

    }
    /**
     * Remove Question from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();

        return redirect()->route('questions.index');
    }

    /**
     * Delete all selected Question at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = Question::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
