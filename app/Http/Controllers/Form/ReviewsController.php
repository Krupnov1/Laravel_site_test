<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form.reviews');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required']
        ]);

        $fields = $request->only('name', 'comment');
        $feedback = Feedback::create($fields);
        
        if ($feedback) {
            return redirect()->route('reviews'); 
        }
        return back();
    
        //$field = json_encode($fields);
        //Storage::disk('local')->put('orders.json', $field);
        //Storage::append('reviews.json', $field);
    }
}