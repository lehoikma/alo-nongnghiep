<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CategoriesImages;
use App\Models\Images;
use Jenssegers\Agent\Agent;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listImage()
    {
        $agent = new Agent();
        if ($agent->isMobile()) {
            $listImage = Images::all()->sortByDesc('id');
            $categoryImage = CategoriesImages::all()->sortByDesc('id');
            return view('list_image',[
                'listImage' => $listImage,
                'categoryImage' => $categoryImage,
            ]);
        }
        $listImage = Images::all()->sortByDesc('id');
        $categoryImage = CategoriesImages::all()->sortByDesc('id');
        return view('user.list_image',[
            'listImage' => $listImage,
            'categoryImage' => $categoryImage,
        ]);
    }
}
