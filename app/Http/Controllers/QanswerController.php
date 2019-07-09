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
