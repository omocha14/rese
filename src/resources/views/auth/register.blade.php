@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register-container">
    <div class="register-logo">Rese</div>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="register-field">
            <label for="name">名前</label>
            <input type="text" name="name" value="{{ old('name') }}" />
        </div>
        <div class="register-field">
            <label for="email">メールアドレス</label>
            <input type="email" name="email" value="{{ old('email') }}" />
        </div>
        <div class="register-field">
            <label for="password">パスワード</label>
            <input type="password" name="password" />
        </div>
        <button type="submit" class="register-button">登録</button>
    </form>
</div>
@endsection
