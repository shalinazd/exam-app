<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    { 
        $food = Food::find($id);
        return response()->json(compact('food'), 200);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){
        $input = $request -> all();

        $food = new Food();
        $food -> name = $input['name'];
        $food -> asal = $input['asal'];

        //save untuk menyimpan data ke database
        $food -> save();
        return response()->json(compact('food'), 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       $foods = Food::all();
        return response()->json(compact('foods'), 200);
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
    public function update($id, Request $request)
    {
        $food = Food::find($id);
        $input = $request -> all();

        $food = new Food();
        $food -> name = $input['name'];
        $food -> asal = $input['asal'];


        //save untuk menyimpan data ke database
        $food -> save();
        return response()->json(compact('food'), 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $food = Food::find($id);
        $statusDelete = $food -> delete();
        return response() -> json(compact('statusDelete', 200));
    }
}
