<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Support\Facades\DB; // DBから変数をviewに渡す
use Illuminate\Http\Request;
use App\Http\Requests\CreateAnswerRequest;

class FrontController extends Controller
{
    protected $Answer;
    
    public function __construct()
    {
        $this->Answer = new Answer();
    }
    
    // 入力フォーム
    public function index()
    {
        $ages = DB::table('ages')->get(); // DBからagesテーブルを配列として$agesに代入
        return view('front/index', compact('ages')); // indexと配列をviewに渡す
    }
    
    // 確認フォーム
    public function confirm(CreateAnswerRequest $request)
    {
        
        $data = $request->all();
        
        $fullname = $data['fullname'];
        $email = $data['email'];
        $feedback = $data['feedback'];
        
        // 1なら「男」、それ以外なら「女」
        if ($data['gender'] == 1) {
            $gender = '男'; 
        } else {
            $gender = '女';
        }
        
        // 数字を文字列に置き換える
        switch ($data['age_id']) {
            case 1:
                $age_id = '10代以下';
                break;
            case 2:
                $age_id = '20代';
                break;
            case 3:
                $age_id = '30代';
                break;
            case 4:
                $age_id = '40代';
                break;
            case 5:
                $age_id = '50代';
                break;
            case 6:
                $age_id = '60代以上';
                break;
        }
        
        //チェックボックスが0なら送信不許可、1なら送信許可
        if ($data['is_send_email'] == 0) {
            $is_send_email = '送信不許可';
        } else {
            $is_send_email = '送信許可';
        }
        
        return view('front/confirm', compact('data','fullname', 'gender', 'age_id', 'email', 'is_send_email', 'feedback'));
    }
    
    //DBに登録して入力フォームにリダイレクト
    public function store(CreateAnswerRequest $request)
    {
        $data = $request->all();
        
        $this->Answer->fullname = $data['fullname'];
        $this->Answer->gender = $data['gender'];
        $this->Answer->age_id = $data['age_id'];
        $this->Answer->email = $data['email'];
        $this->Answer->is_send_email = $data['is_send_email'];
        $this->Answer->feedback = $data['feedback'];
        $this->Answer->save();
        
        // 二重送信対策
        $request->session()->regenerateToken();

        return redirect('/')->with('flash_message', 'アンケートを送信しました');
    }
}