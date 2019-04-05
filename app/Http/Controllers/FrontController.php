<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; // DBからviewに変数を渡すために必要
use Illuminate\Http\Request;
use App\Http\Requests\CreateAnswerRequest;

class FrontController extends Controller
{
    public function index()
    {
        $ages = DB::table('ages')->get(); // DBからagesテーブルを配列として$agesに代入
        return view('front/index', compact('ages')); // indexと配列をviewに渡す
    }
    
    public function confirm(CreateAnswerRequest $request)
    {
        
        $data = $request->all();
        
        // 1だったら「男」、それ以外だったら「女」
        if ($data['gender'] == 1) {
            $data['gender'] = '男'; 
        } else {
            $data['gender'] = '女';
        }
        
        // 数字を文字列に置き換える
        switch ($data['age_id']) {
            case 1:
                $data['age_id'] = '10代以下';
                break;
            case 2:
                $data['age_id'] = '20代';
                break;
            case 3:
                $data['age_id'] = '30代';
                break;
            case 4:
                $data['age_id'] = '40代';
                break;
            case 5:
                $data['age_id'] = '50代';
                break;
            case 6:
                $data['age_id'] = '60代以上';
                break;
        }
        
        if (!isset($data['is_send_email'])) {
            $data['is_send_email'] = '送信不許可';
        } else {
            $data['is_send_email'] = '送信許可';
        }
        
        return view('front/confirm', compact('data'));
    }
}