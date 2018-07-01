<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CategoriesProduct;
use App\Models\ItemProduct;
use Jenssegers\Agent\Agent;

class NewsProductController extends Controller
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

    public function listNewsProduct()
    {
        if ($this->agent->isMobile()) {
            $category = CategoriesProduct::orderBy('created_at', 'asc')->get();
            return view('list_category_product',[
                'category' => $category,
            ]);
        }
        $listNewsProduct = ItemProduct::orderBy('id', 'desc')->paginate(10);
        return view('user.news_product_list',[
            'listNewsProduct' => $listNewsProduct
        ]);
    }

    public function detail($title, $id)
    {
        if ($this->agent->isMobile()) {
            $itemProduct = ItemProduct::find($id);
            $itemProductFollows = ItemProduct::where('category_product_id', $itemProduct['category_product_id'])->limit(3)->get();
            return view('news_product_detail', [
                'itemProduct' => $itemProduct,
                'itemProductFollows' => $itemProductFollows
            ]);
        }

        $itemProduct = ItemProduct::find($id);
        $itemProductFollows = ItemProduct::limit(6)->get();
        return view('user.news_product_detail', [
            'itemProduct' => $itemProduct,
            'itemProductFollows' => $itemProductFollows
        ]);
    }


    public function listNewsProductCategory($id)
    {
        if ($this->agent->isMobile()) {
            $products = ItemProduct::where('category_product_id', $id)->orderBy('id', 'desc')->paginate(15);
            $nameCategory = CategoriesProduct::find($id);
            return view('list_news_product',[
                'products' => $products,
                'nameCategory' => $nameCategory
            ]);
        }
        $category = CategoriesProduct::find($id);
        $itemProduct = ItemProduct::where('category_product_id', $id)->paginate(15);

        return view('user.news_product_list_category',[
            'category' => $category,
            'itemProduct' => $itemProduct
        ]);
    }

}
