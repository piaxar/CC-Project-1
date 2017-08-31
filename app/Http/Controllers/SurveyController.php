<?php

namespace App\Http\Controllers;

use App\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function show()
    {
        return view('survey');
    }

    public function submitSurveyData(Request $request)
    {
        $courseId = $request->get('course-id');
        $os = $request->get('os');
        $favouriteLang = $request->get('programming_lang');
        $experience = $request->get('experience_period');
        $code = $request->get('code');

        $this->validate($request, [
            'course-id', 'os', 'programming_lang', 'experience_period' => 'required',
            'code' => 'required|max:256'
        ]);

        $newRecord = new Survey();
        $newRecord->course_id = $courseId;
        $newRecord->os = $os;
        $newRecord->programming_lang = $favouriteLang;
        $newRecord->experience = $experience;
        $newRecord->code = $code;
        $newRecord->save();

        return view('onSuccess');
    }
}
