<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\FeedbackRequest;
class FeedbackController extends Controller
{
    //
    public function bind(FeedbackRequest $request){

        $feedback = new Feedback;
        $feedback -> name= $request -> name;
        $feedback -> phone= $request -> phone;
        $feedback -> gmail= $request -> email;
        $feedback -> message= $request -> message;
        return $request->img;
        //$image=$request -> img;
        //$path = $request->img->store('images');
        if ($request->hasFile('img')) {
            //
            // Get filename with the extension
            //$filenameWithExt = $request-> img->getClientOriginalName();

            //$path = $request->img->path();
            return $request -> img;

        }
        //$feedback -> save();
        //return redirect()->route('thankyou');
    }
}
