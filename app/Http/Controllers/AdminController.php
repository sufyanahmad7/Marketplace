<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    // Returns all reviews with the option to delete
    public function readReview ()
    {
        $reviews = Review::all();
        return view('admin.delete_review', ['reviews' => $reviews]);
    }

    public function deleteReview($id)
    {
        // dd($request->all());
        $review = Review::find($id);
        $review->delete(); 
        return redirect('admin');
    }
}
