<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\NewsFarm;
use Jenssegers\Agent\Agent;

class NewsFarmController extends Controller
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

    public function listNewsFarm()
    {
        if ($this->agent->isMobile()) {
            $newsFarm = NewsFarm::orderBy('id','desc')->paginate(10);
            return view('list_news_farm',[
                'newsFarm' => $newsFarm
            ]);
        }
        $listNewsFarm = NewsFarm::orderBy('id','desc')->paginate(10);
        return view('user.news_farm_list',[
            'listNewsFarm' => $listNewsFarm
        ]);
    }

    public function detail($title, $id)
    {
        if ($this->agent->isMobile()) {
            $newsFarm = NewsFarm::find($id);
            $newsFarmFollow = NewsFarm::limit(3)->get();
            return view('news_farm_detail',[
                'newsFarm' => $newsFarm,
                'newsFarmFollow' => $newsFarmFollow
            ]);
        }
        $newsFarm = NewsFarm::find($id);
        $newsFarmFollow = NewsFarm::all()->all(3);
        return view('user.news_farm_detail', [
            'newsFarm' => $newsFarm,
            'newsFarmFollow' => $newsFarmFollow
        ]);
    }

}
