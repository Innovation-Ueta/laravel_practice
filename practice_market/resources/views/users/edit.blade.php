@extends('layouts.logged_in')

@section('content')
    <h1>プロフィール編集</h1>

    <form action="" method="POST">
        @csrf
        @method('patch')
        
        <div>
            <label for="">
                名前：
                <input type="text" name="name" id="name">
            </label>
        </div>
    
        <div>
            <label for="">
                プロフィール：
                <textarea name="profile" id="profile" cols="30" rows="10"></textarea>
            </label>
        </div>
    
        <div>
            <input type="submit" value="更新">
        </div>
    </form>
@endsection