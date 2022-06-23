<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BroomsController extends Controller
{

    private static function getData(){
        return[
            ['id' => 1, 'name' => 'Walis Tambo', 'brand' => 'Pinoys'],
            ['id' => 2, 'name' => 'Walis Tingting', 'brand' => 'Chinese'],
            ['id'=> 3, 'name' => 'Branded Walis', 'brand' => 'Americans'],
            ['id' => 4, 'name' => 'Walis Mop', 'brand' => 'Japanese'],
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('brooms.index',[
            'brooms' => self::getData(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('brooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($broom)
    {
        //
        $brooms = self::getData();

        $index = array_search($broom, array_column($brooms, 'id'));
        if($index === false){
            abort(404);
        }

        return view ('brooms.show',[
            'broom'=> $brooms[$index]

        ]);
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
}
