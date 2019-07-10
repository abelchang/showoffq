<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Qanswer as QanswerEloquent;
use App\Qtitle as QtitleEloquent;

use View;


class QanswerController extends Controller
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
        $qtitle = QtitleEloquent::orderBy('id','ASC')->get();

        return View::make('qanswer.create',['qtitle'=>$qtitle]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $answer = new QanswerEloquent($request->all());
        $answer->save();
        return Redirect::route('qanswer.finish');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Qanswer  $qanswer
     * @return \Illuminate\Http\Response
     */
    public function show(Qanswer $qanswer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Qanswer  $qanswer
     * @return \Illuminate\Http\Response
     */
    public function edit(Qanswer $qanswer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Qanswer  $qanswer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Qanswer $qanswer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Qanswer  $qanswer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Qanswer $qanswer)
    {
        //
    }

    public function finish()
    {
        return View::make('qanswer.finish');
    }

    public function qstatistics()
    {
        $qtitle = QtitleEloquent::orderBy('id','ASC')->get();
        $qTotal = QanswerEloquent::count();
        $q1y = QanswerEloquent::where('q1', '=', 1)->count();
        $q1n = QanswerEloquent::where('q1', '=', -1)->count();
        $q2y = QanswerEloquent::where('q2', '=', 1)->count();
        $q2n = QanswerEloquent::where('q2', '=', -1)->count();
        $q4y = QanswerEloquent::where('q4', '=', 1)->count();
        $q4n = QanswerEloquent::where('q4', '=', -1)->count();
        $q5y = QanswerEloquent::where('q5', '=', 1)->count();
        $q5n = QanswerEloquent::where('q5', '=', -1)->count();
        $answerTotal = array(
            'q1y' => $q1y, 'q1n' => $q1n,
            'q2y' => $q2y, 'q2n' => $q2n,
            'q4y' => $q4y, 'q4n' => $q4n,
            'q5y' => $q5y, 'q5n' => $q5n
         );

        return View::make('qanswer.qstatistics',[ 'qTotal' => $qTotal , 'qTitle'=> $qtitle ,'answerTotal'=>$answerTotal]);

    }

    public function getanwser($id)
    {
        if($id != null )
        {
            $index = 'q'.$id;
            $answer = QanswerEloquent::where($index , '!=', null)->select($index)->get();
            $qtitle = QtitleEloquent::findOrFail($id);
            
            return View::make('qanswer.getanwser',[ 'index'=>$index ,'answer'=> $answer ,'qtitle'=>$qtitle]);
        }
        else
            return Redirect('/');
    }

    // $validator = Validator::make (
    //     $request->all(),
    //     [
    //         'email' => 'required'
    //     ]

    //     [
    //         'required' => '請填寫email'
    //     ]
    // );
}
