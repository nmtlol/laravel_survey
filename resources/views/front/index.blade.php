@extends('front.layouts.app')

@section('title', 'Survey')

@section('content')
    @if (Session::has('flash_message'))
    <div class="pt-3">
        <div class="alert alert-primary text-center">{{ session('flash_message') }}</div>
    </div>
    @endif
    <form class="w-50 mx-auto" action="confirm" method="post">
        {{ csrf_field() }}
        <div class="header text-center py-5">
            <h4>システムへのご意見をお聞かせください</h4>
        </div>
        <div class="form-group row">
            <label for="inputName" class="col-sm-4  col-form-label">
                名前
                <span class="text-danger pl-2">※</span>
            </label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="inputName" name="fullname" value="{{ old('fullname') }}" placeholder="入力してください">
                @if($errors->has('fullname'))
                <small class="text-danger">{{ $errors->first('fullname') }}</small>
                @endif
            </div>
        </div>
        <div class="form-group row align-items-center">
            <label class="col-sm-4  col-form-label">
                性別
                <span class="text-danger pl-2">※</span>
            </label>
            <div class="col-sm-8">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="radio1" value="1" {{ old('gender', 1) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="radio1">男性</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="radio2" value="2" {{ old('gender') == 2 ? 'checked' : '' }}>
                    <label class="form-check-label" for="radio2">女性</label>
                </div>
                @if($errors->has('gender'))
                <small class="text-danger">{{ $errors->first('gender') }}</small>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4 col-form-label">
                    年代
                    <span class="text-danger pl-2">※</span>
            </div>
            <div class="col-sm-8">
                <select class="form-control" name="age_id">
                    <option value="">選択してください</option>
                    @foreach ($ages as $age)
                    <option value="{{ $age->id }}" {{ old('age_id') == $age->id ? 'selected' : '' }}>{{ $age->age }}</option>
                    @endforeach
                </select>
                @if($errors->has('age_id'))
                <small class="text-danger">{{ $errors->first('age_id') }}</small>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail" class="col-sm-4  col-form-label">
                メールアドレス
                <span class="text-danger pl-2">※</span>
            </label>
            <div class="col-sm-8">
                <input type="email" class="form-control" id="inputEmail" name="email" value="{{ old('email') }}" placeholder="入力してください">
                @if($errors->has('email'))
                <small class="text-danger">{{ $errors->first('email') }}</small>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4 d-flex align-items-center">メール送信可否</div>
            <div class="col-sm-8">
                <p>登録したメールアドレスにメールマガジンをお送りしてもよろしいですか？</p>
                <input type="hidden" name="is_send_email" value="0">
                <input type="checkbox" id="checkbox" name="is_send_email" value="1" {{ old('is_send_email') || !$errors->any() ? 'checked' : '' }}>
                <label for="checkbox">送信を許可します</label>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputContent" class="col-sm-4 d-flex align-items-center">ご意見</label>
            <div class="col-sm-8">
                <textarea type="text" class="form-control" id="inputContent" name="feedback" rows="5">{{ old('feedback') }}</textarea>
                @if($errors->has('feedback'))
                <small class="text-danger">{{ $errors->first('feedback') }}</small>
                @endif
            </div>
        </div>
        <div class="py-5 text-center">
            <input type="submit" class="btn btn-primary w-25" value="確認">
        </div>
    </form>
@endsection
