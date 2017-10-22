<?php
/**
 * Created by PhpStorm.
 * User: Сергей
 * Date: 09.05.2017
 * Time: 20:52
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Goods;
use DB;

class PageController extends Controller
{

    public function execute(Request $request) {

        switch ($request->route('alias')) {
            case 'goods':
                $goods = Goods::get(['name', 'filter', 'description', 'images']);
                $tags = DB::table('goods')->distinct()->pluck('filter');

                return view($request->route('alias'), ['goods' => $goods, 'tags' => $tags]);
            case 'about':

                return view($request->route('alias'));

        }
    }
}