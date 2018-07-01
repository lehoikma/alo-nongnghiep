<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\NewsCompany;
use App\Models\NewsFarm;

class NewsCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listNewsCompany()
    {
        $listNewsCompany = NewsCompany::orderBy('id', 'desc')->paginate(10);
        return view('user.news_company_list',[
            'listNewsCompany' => $listNewsCompany
        ]);
    }

    public function detail($title, $id)
    {
        $newsCompany = NewsCompany::find($id);
        $newsCompanyFollow = NewsCompany::all()->all(3);
        return view('user.news_company_detail', [
            'newsCompany' => $newsCompany,
            'newsCompanyFollow' => $newsCompanyFollow
        ]);
    }

    public function mobileListNewsCompany()
    {
        $newsCompany = NewsCompany::orderBy('id', 'desc')->paginate(10);
        return view('list_news_company',[
            'newsCompany' => $newsCompany
        ]);
    }

    public function mobileDetailNewsCompany($id)
    {
        $news = NewsCompany::find($id);
        $newsFollow = NewsCompany::limit(3)->get();
        return view('news_company_detail',[
            'news' => $news,
            'newsFollow' => $newsFollow
        ]);
    }

}