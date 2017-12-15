<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\categories;
use App\movies;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $movies = movies::all();
        return view('admin.movies',compact('movies'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /*public function getMovies(){
        $movies = movies::all();
        return view('admin.movies',compact('movies'));
    }
    public function editMovie($id){
    return view('admin.editMovie');
    }
    public function getCategories(){

        $category = categories::all();
        return view('admin.Categories', compact('category'));
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movie = new movies;
        $movie->title = $request->movie_name;
        $movie->description = $request->movie_desc;
//        $title= $request->category_id;
//        $category_id = categories::where('title','=',$title)->get(['id']);
//        foreach ($category_id as $item) {
//            $item->id;
//        }
//        $newVal = $item;
        $movie->categories_id = $request->category_id;

        Storage::putFile('public', $request->file('image_cover'));
        $movie->image = Storage::url($request->file('image_cover')->store('public'));
        $movie->status = 'nothing';
        $movie->save();
        return redirect('movies');
        //$request->image->store('public')


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
//        $movies = movies::all();
//        return view('admin.movies',compact('movies'));

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
        $movie = movies::find($id);
        $category = categories::all();
        return view('admin.editMovie', compact('category'))->with(compact('movie'));
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
        $movie = movies::find($id);
        $movie->title = $request->movie_name;
        $movie->description = $request->movie_desc;
//        $title= $request->category_id;
//        $category_id = categories::where('title','=',$title)->get(['id']);
//        foreach ($category_id as $item) {
//            $item->id;
//        }
//        $newVal = $item;
        $movie->categories_id = $request->category_id;

        Storage::putFile('public', $request->file('image_cover'));
        $movie->image = Storage::url($request->file('image_cover')->store('public'));
        $movie->status = 'nothing';
        $movie->save();
        session()->flush('message', 'message has been updated');

        return redirect('movies');
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
        $movie =movies::find($id);
        $movie->delete();
        session()->flush('message', 'message has been deleted');
        return redirect('movies');

    }
}
