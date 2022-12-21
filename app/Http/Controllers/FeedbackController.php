<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\FeedbackRequest;

class FeedbackController extends Controller
{
    //
    public function bind(FeedbackRequest $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required'
        ]);
        if ($request['img']) {
            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('img'), $imageName);
        } else {
            $imageName = '';
        }
        $feedback = new Feedback;
        $feedback->name = $request->name;
        $feedback->phone = $request->phone;
        $feedback->gmail = $request->email;
        $feedback->img = $imageName;
        $feedback->message = $request->message;
        $feedback->save();
        return redirect()->route('thankyou');
    }
}