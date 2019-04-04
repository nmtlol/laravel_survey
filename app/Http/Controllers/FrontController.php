<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // DBからviewに変数を渡すために必要

class FrontController extends Controller
{
    public function index()
    {
        $ages = DB::table('ages')->get(); // DBからagesテーブルを配列として$agesに代入
        return view('index', compact('ages')); // indexと配列をviewに渡す
    }
    
    public function confirm(Request $request)
    {
        
        $data = $request->all();
        
        if ($data['gender'] == 1) { // $data['gender']の中身が1だったら「男」、それ以外だったら「女」を配列に代入
            $data['gender'] = '男'; 
        } else {
            $data['gender'] = '女';
        }
        
        switch ($data['age_id']) {  // $data['age_id']の中身の数字を文字列に置き換え、配列に代入
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
        return view('confirm')->with($data);
    }
}