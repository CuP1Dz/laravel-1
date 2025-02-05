<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $works = Work::where('user_id', Auth::user()->id)->get();

        return view('works.index',compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Categories::all();

        return view('works.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'title'=>['required', 'string', 'max:255'],
            'category_id'=>['required'],
            'path_img'=>['required'],
        ]);

        Work::create([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'path_img' => $request->path_img
        ]);

        return redirect() -> route('works.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Work $work)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Work $work)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Work $work)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Work $work)
    {
        //
    }
}
