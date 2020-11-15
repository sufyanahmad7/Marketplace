<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('user.main');
    }

    public function createReview(Request $request)
    {        
        // $request->validate
        // ([
        //     'title' => 'required',
        //     'content' => 'required',
        //     'image' => ['required', 'image'],
        // ]);

        // Get the currently authenticated user...

        $user = Auth::user();

        // Get the currently authenticated user's ID
        $id = Auth::id();
        
        $review = new Review();
        
        $review->user_id = $request->user_id;
        $review->bank_name = $request->bank_name;
        $review->product_name = $request->product_name;
        $review->title = $request->title;
        $review->review = $request->review;
        $review->rating = $request->rating;

        $review->save();

        return redirect('/');
    }

    public function readReview ()
    {
        $reviews = Review::all();

        return view('user.cimb_readreview', ['reviews' => $reviews]);
    }

    public function editReview($id)
    {
        $review = Review::find($id);
        return view('user.cimb_editreview', ['review'=>$review]);
    }

    public function updateReview(Request $request)
    {
        // dd($request->all());
       
        $review = Review::find($request->id);
        $review->id=$request->id;
        $review->title=$request->title;
        $review->review=$request->review;
        $review->rating=$request->rating;

        $review->save(); 

        return redirect('/');
        
    }

    // public function deleteReview($id)
    // {
        // dd($request->all());
    //     $review = Review::find($id);
    //     $review->delete(); 
    //     return redirect('/');
    // }
}





    