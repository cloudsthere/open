<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\GoodsModel;

class OrderController extends Controller
{
    public function getList(Request $request)
    {
        
    }

    public function getDetail(Request $request)
    {
        
    }

    public function anyConfirm(Request $request)
    {
        // dump($request->input());
        $goods_id = $request->get('goods_id');
        dump($goods_id);
        $goods = GoodsModel::where('id',  $goods_id)->first();
        if (empty($goods)) {
            return response()->json(['error' => 1, 'msg' => 'goods not found']);
        }
        // 微信支付请求
        return response()->json(['error' => 0]);
    }

}
