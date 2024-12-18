@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
<div class="shop-detail-container">
    <h1>{{ $shop->name }}</h1>
    <img src="{{ asset('images/' . $shop->image) }}" alt="{{ $shop->name }}の画像">
    <p>{{ $shop->description }}</p>
    <p>{{ $shop->location }}</p>
    <button>予約する</button>
</div>
@endsection