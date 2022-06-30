@extends('layouts.logged_in')

@section('content')
    <h1>プロフィール詳細</h1>

    <div class="user_image">
        <a href="">画像を変更</a>
    </div>

    <div>
        <p>test さん</p>
        <a href="{{ route('profile.edit') }}">プロフィール編集</a>
    </div>

    <div>
        <p>出品数</p>
    </div>

    <h2>購入履歴</h2>
    
@endsection