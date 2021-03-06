@extends('layouts.english')

@section('title'){{ $seoTitle }}@endsection
@section('description'){{ $description }}@endsection

@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{ route('how-to-say.index') }}">英文怎么说</a></li>
            <li class="active"><a href="{{ route('how-to-say.detail', ['slug'=>$slug]) }}">{{ $phrase }}</a></li>
        </ol>

        <div class="row" id="english">
            <div class="col-lg-8 col-md-8">
                <div class="content">
                    {!! $content !!}
                </div>
                <nav>
                    <ul class="pager">
                        @if(isset($prevSlug->slug))
                            <li><a href="{{ route('how-to-say.detail', ['slug'=>$prevSlug->slug]) }}" rel="prev">上一篇</a>
                            </li>@endif
                        @if(isset($nextSlug->slug))
                            <li><a href="{{ route('how-to-say.detail', ['slug'=>$nextSlug->slug]) }}" rel="next">下一篇</a>
                            </li>@endif
                    </ul>
                </nav>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="list-group">
                    @foreach($latest as $list)
                        <a href="{{ route('how-to-say.detail', ['slug'=>$list->slug]) }}"
                           class="list-group-item">{{ $list->seo_title }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        $(".content img").addClass('img-responsive');
    </script>
@endsection