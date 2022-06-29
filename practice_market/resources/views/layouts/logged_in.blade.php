@extends('layouts.default')

@section('header')
    <header>
        <ul>
            <li><a href="{{ route('top') }}">Market</a></li>

            <li><a href="">こんにちは！テストさん</a></li>

            <li><a href="{{ route('users.show') }}">プロフィール</a></li>

            <li><a href="{{ route('likes.index') }}">お気に入り一覧</a></li>

            <li><a href="{{ route('users.exhibitions') }}">出品商品詳細</a></li>
            
            <li><form action="{{ route('logout') }}" method="post">
                @csrf
                <input type="submit" value="ログアウト">
            </form></li>
        </ul>
    </header>
@endsection