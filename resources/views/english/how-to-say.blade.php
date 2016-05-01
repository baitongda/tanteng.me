@extends('layouts.default')

@section('title'){{ $seoTitle }}@endsection
@section('description'){{ $description }}@endsection
@section('canonical'){{ $canonical }}@endsection

@section('content')
<div class="container">
    <ol class="breadcrumb">
        <li><a href="{{ route('english.index') }}">English</a></li>
        <li><a href="{{ route('how-to-say.index') }}">英文怎么说</a></li>
        <li class="active"><a href="{{ route('how-to-say.detail', ['slug'=>$slug]) }}">{{ $phrase }}</a></li>
    </ol>

    <div class="row">
        <div class="col-lg-8 col-md-8">
            {!! $content !!}
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="list-group">
                <a href="#" class="list-group-item">Cras justo odio</a>
                <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                <a href="#" class="list-group-item">Morbi leo risus</a>
                <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                <a href="#" class="list-group-item">Vestibulum at eros</a>
            </div>
        </div>
    </div>
</div>
@endsection
