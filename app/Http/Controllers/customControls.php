<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categories;
use App\movies;
use Illuminate\Support\Facades\Storage;
class customControls extends Controller
{
    //
    public function getList(){

        $category = categories::all();
        return view('admin.addMovie', compact('category'));
    }
    public function store(Request $request)
    {
        //
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
        return redirect('categories');
        //$request->image->store('public')


    }
}
