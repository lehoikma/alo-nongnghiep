<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ItemProduct;
use App\Models\News;
use App\Models\NewsCompany;
use App\Models\NewsFarm;
use Jenssegers\Agent\Agent;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agent = new Agent();
        $newsCompany = NewsCompany::limit(9)->orderBy('created_at', 'desc')->get();
        $newsFarm = NewsFarm::limit(9)->orderBy('created_at', 'desc')->get();
        $newsFirst = News::orderBy('created_at', 'desc')->first();
        $newsList = News::limit(5)->orderBy('created_at', 'desc')->get();
        if ($agent->isMobile()) {
            return view('home');
        }
        return view('user.home', [
            'newsCompany' => $newsCompany,
            'newsFarm' => $newsFarm,
            'newsFirst' => $newsFirst,
            'newsList' => $newsList
        ]);
    }

}
