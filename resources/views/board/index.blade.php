@extends('layouts.app')

@section('content')
<div class="container canvas-container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="canvas-title">Boards</div>
            @if(isset($ownedBoards))
            @foreach($ownedBoards as $owned)
                <div class="board-card">
                    <div class="board-card-img"></div>
                    <a href="{{ url('/boards/'.$owned->id) }}">
                    <div class="board-card-title">{{ $owned->title }}</div>
                    </a>
                </div>
            @endforeach
            @endif
        </div>
    </div>
</div>
<div>
    <p><a href="{{ url('/boards/create') }}">+</a></p>
</div>
@endsection
