<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\SupportRequest;
use App\Models\Question;
use Jenssegers\Agent\Agent;

class SupportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agent = new Agent();
        if ($agent->isMobile()) {
            return view('question');
        }
        return view('user.support');
    }

    public function saveQuestion(SupportRequest $request)
    {
        $agent = new Agent();
        $question = Question::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'content' => $request['content'],
            'status' => 1
        ]);
        if ($question) {
            \Session::flash('alert-success', 'Gửi Tư Vấn Thành Công');
        } else {
            \Session::flash('alert-warning', 'Gửi Tư Vấn Lỗi');
        }
        if ($agent->isMobile()) {
            return view('question');
        }
        return redirect()->route('form_support');
    }

}
