<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Register\CreateRegisterRequest;
use App\Register;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRegisterRequest $request)
    {
    
        // Register participant
         Register::create([
             'fname' => $request->fname,
             'lname' => $request->lname,
             'email' => $request->email,
             'age' => $request->age,
             'gender' => $request->gender,
             'telephone' =>	$request->telephone,
             'churchgoer' => $request->churchgoer,
             'topic1' =>$request->topic1,
             'topic2' =>$request->topic2,
             'topic3' =>$request->topic3,
             'topic4' =>$request->topic4,
             'topic5' =>$request->topic5,
             'topic6' =>$request->topic6,
             'topic7' =>$request->topic7,
             'topic1txt' =>$request->topic1txt,
             'topic2txt' =>$request->topic2txt,
             'topic3txt' =>$request->topic3txt,
             'topic4txt' =>$request->topic4txt,
             'topic5txt' =>$request->topic5txt,
             'topic6txt' =>$request->topic6txt,
             'topic7txt' =>$request->topic7txt,
             'privacyOK' =>$request->privacyOK
         ]);

        // Flash a message
            session()->flash('success','You have been successfully registered, Thank you!');
        // Redirect the user

        return redirect(route('register.index'));
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function about()
    {
        return view('register.about');
    }

    
    public function programme()
    {
        return view('register.programme');
    }
}
