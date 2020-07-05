@extends('layouts.master')
@push('css')
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5f01c52fe9f145001203b906&product=inline-share-buttons" async="async"></script>
@endpush
@section('content')
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    <h2 class="mb-3">{{ $video->v_title }}</h2>

                    <p>
{{--                        <img src="/images/{{ $video->v_image }}" alt="" class="img-fluid">--}}
                        <iframe width="560" height="315" src="{{ $video->v_link }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
                    </p>
                    <p>{!! $video->v_details !!}</p>

                </div>
                <div class="sharethis-inline-share-buttons"></div>
            </div>
        </div>
    </section>


@endsection

