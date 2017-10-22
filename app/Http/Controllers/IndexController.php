<?php
/**
 * Created by PhpStorm.
 * User: Сергей
 * Date: 09.05.2017
 * Time: 20:52
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Goods;
use App\Pages;
use App\Slider;
use App\Partner;


class IndexController extends Controller
{

    public function execute(Request $request) {

        if($request->isMethod('POST')) {

            return new JsonResponse([
                'message' => 'Письмо успешно отправленно'
            ]);
        }



        $page = Pages::where('slug', 'index')->get();


        return view('site', [
            'page' => $page[0],
            'goods' => Goods::orderBy('created_at')->get(['name', 'filter', 'description', 'images'])->take(8),
            'slider' => Slider::where('page', $page[0]->id)->get(),
            'partner' => Partner::where('page', $page[0]->id)->get(),
        ]);
    }

}