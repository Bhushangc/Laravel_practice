<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guitar;

class resourceController extends Controller
{

    private static function getdata(){
        return  [
                    ['id' => 1, 'name' => 'abc', 'brand' =>'AAA'   ],
                    ['id' => 2, 'name' => 'abcd', 'brand' =>'AAAA'   ],
                    ['id' => 3, 'name' => 'abcde', 'brand' =>'AAAAA'   ],
                ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get
        return view('guitars.index',
        [
            'guitars' => Guitar::all(),
            'user_input' => '<script> alert("hello") </script>'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //get
        return view('guitars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //post
        $request->validate([
            'name'=> 'required',
            'brand'=> 'required',
            'year'=> ['required','integer'],
        ]);
        $guitar = new Guitar();
        $guitar->name = strip_tags($request->input('name'));
        $guitar->brand = strip_tags($request->input('brand'));
        $guitar->year_made = strip_tags($request->input('year'));
        $guitar-> save();

        return redirect()->route('guitars.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $guitar)
    {
        //get
        $record = Guitar::findorfail($guitar);
            return view('guitars.show',
                ['guitar' => $record]
            );
        

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $guitar)
    {
        //get
        $record = Guitar::findorfail($guitar);
        return view('guitars.edit',
            ['guitar' => $record]
        );
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $guitar)
    {
        //post, put , patch
        $request->validate([
            'name'=> 'required',
            'brand'=> 'required',
            'year'=> ['required','integer'],
        ]);
        $record = Guitar::findorfail($guitar);
        $record->name = strip_tags($request->input('name'));
        $record->brand = strip_tags($request->input('brand'));
        $record->year_made = strip_tags($request->input('year'));
        $record-> save();

        return redirect()->route('guitars.show',$guitar);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete
    }
}
