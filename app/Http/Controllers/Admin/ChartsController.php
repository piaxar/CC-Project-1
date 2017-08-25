<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Survey;
use Illuminate\Http\Request;

class ChartsController extends Controller
{
    public function getOSStats(){
        $os_mac = Survey::where('os', 'MacOs')->count();
        $os_windows = Survey::where('os', 'Windows')->count();
        $os_linux = Survey::where('os', 'Linux')->count();


        $result_os = ["MacOS" => $os_mac, "Windows" => $os_windows, "Linux" => $os_linux];

        return view('osStats')
            ->with('os',json_encode($result_os))
            ->with('desc', json_encode(__('stats.os')));;
    }

    public function getCourseStats() {
        $course_bs1 = Survey::where('course_id', 'BS1')->count();
        $course_bs2 = Survey::where('course_id', 'BS2')->count();
        $course_bs3 = Survey::where('course_id', 'BS3')->count();
        $course_bs4 = Survey::where('course_id', 'BS4')->count();
        $course_ms1 = Survey::where('course_id', 'MS1')->count();
        $course_ms2 = Survey::where('course_id', 'MS2')->count();

        $result_course = ["BS1" => $course_bs1, "BS2" => $course_bs2, "BS3" => $course_bs3, "BS4" => $course_bs4, "MS1" => $course_ms1, "MS2" => $course_ms2];

        return view('courseStats')
            ->with('course', json_encode($result_course))
            ->with('desc', json_encode(__('stats.course')));
    }

    public function getLangStats() {
        $lang_python =Survey::where('programming_lang', 'Python')->count();
        $lang_java =Survey::where('programming_lang', 'Java')->count();
        $lang_c =Survey::where('programming_lang', 'C/C++')->count();
        $lang_php =Survey::where('programming_lang', 'PHP')->count();
        $lang_eiffel =Survey::where('programming_lang', 'Eiffel')->count();

        $result_lang = ["Python" => $lang_python, "C/C++" => $lang_c, "PHP" => $lang_php, "Eiffel" => $lang_eiffel, "Java" => $lang_java];

        return view('langStats')
            ->with('lang', json_encode($result_lang))
            ->with('desc', json_encode(__('stats.lang')));;
    }
}
