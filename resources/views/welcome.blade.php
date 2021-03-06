@extends('layouts.app')

@section('cover')
    <div class="cover">
        <div class="cover-inner">
            <div class="cover-contents">
                <h1>Nico</h1>
                <h1>終業後の時間をデザインする</h1>
                @if (!Auth::check())
                    <a href="{{ route('signup.get') }}" class="btn btn-success btn-lg">検索</a>
                @endif
                <a href="{{ route('shops.index') }}" class="btn btn-success btn-lg">index</a>
            </div>
        </div>
    </div>
@endsection

@section('content')
   @include('shops.shops', ['shops' => $shops])
@endsection