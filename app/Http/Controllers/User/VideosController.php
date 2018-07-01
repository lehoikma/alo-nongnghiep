<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Videos;
use Jenssegers\Agent\Agent;

class VideosController extends Controller
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

    public function listVideos()
    {
        if ($this->agent->isMobile()) {
            $videos = Videos::paginate(10);
            return view('list_video',[
                'videos' => $videos
            ]);
        }
        $videos = Videos::paginate(15);
        return view('user.list_videos',[
            'videos' => $videos,
        ]);
    }

    public function mobileDetailVideo($id)
    {
        $video = Videos::find($id);
        if ($this->agent->isMobile()) {
            return view('video_detail',[
                'video' => $video
            ]);
        }
        return view('user.video_detail',[
            'video' => $video
        ]);
    }
}
