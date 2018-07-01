<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\NewsCompany;
use Jenssegers\Agent\Agent;

class NewsCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->agent = new Agent();
    }

    public function listNewsCompany()
    {
        if ($this->agent->isMobile()) {
            $newsCompany = NewsCompany::orderBy('id', 'desc')->paginate(10);
            return view('list_news_company',[
                'newsCompany' => $newsCompany
            ]);
        }
        $listNewsCompany = NewsCompany::orderBy('id', 'desc')->paginate(10);
        return view('user.news_company_list',[
            'listNewsCompany' => $listNewsCompany
        ]);
    }

    public function detail($title, $id)
    {
        if ($this->agent->isMobile()) {
            $news = NewsCompany::find($id);
            $newsFollow = NewsCompany::limit(3)->get();
            return view('news_company_detail',[
                'news' => $news,
                'newsFollow' => $newsFollow
            ]);
        }
        $newsCompany = NewsCompany::find($id);
        $newsCompanyFollow = NewsCompany::all()->all(3);
        return view('user.news_company_detail', [
            'newsCompany' => $newsCompany,
            'newsCompanyFollow' => $newsCompanyFollow
        ]);
    }

}
