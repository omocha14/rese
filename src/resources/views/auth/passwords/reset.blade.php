@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/password.css') }}">
@endsection

@section('content')
<div class="password-reset-container">
    <div class="password-reset-logo">Rese</div>
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
        <div class="password-reset-field">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="password-reset-field">
            <label for="password">New Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="password-reset-field">
            <label for="password_confirmation">Confirm New Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>
        <button type="submit" class="password-reset-button">パスワードリセット</button>
    </form>
</div>
@endsection
