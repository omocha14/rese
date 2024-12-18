@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/shops.css') }}">
@endsection

@section('content')
<div class="shops-container">
    <h1>すべてのショップ</h1>
    <div class="shops-list">
        @foreach($shops as $shop)
            <div class="shop-card">
                <img src="{{ asset('images/' . $shop->image) }}" alt="{{ $shop->name }}の画像">
                <h3>{{ $shop->name }}</h3>
                <p>{{ $shop->description }}</p>
                <p>{{ $shop->location }}</p>
                <a href="{{ route('shops.detail', $shop->id) }}">詳しくみる</a>
                <div class="heart-icon">❤️</div>
            </div>
        @endforeach
    </div>
</div>
@endsection
