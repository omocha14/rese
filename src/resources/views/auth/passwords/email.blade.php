@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/password.css') }}">
@endsection

@section('content')
<div class="password-reset-container">
    <div class="password-reset-logo">Rese</div>
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="password-reset-field">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <button type="submit" class="password-reset-button">パスワードリセットリンクを送信</button>
    </form>
</div>
@endsection
