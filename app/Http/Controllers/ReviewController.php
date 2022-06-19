<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReviewRequest;
use App\Models\Review;

class ReviewController extends Controller
{

    public function addReview(ReviewRequest $request)
    {
        //dd($request->all());
       $review = new Review();
            $review->name    = $request->input('name');
            $review->email   = $request->input('email');
            $review->message = $request->input('message');

        $review->save();

        return redirect()->route('/')->with('success', 'Спасибо, отзыв добавлен!');
    }

    public function showReview()
    {
        $review = new Review;
        return view('pages.review', ['reviews' => $review->all()]);
    }
}
