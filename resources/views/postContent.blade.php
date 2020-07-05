@extends('layouts.master')
@push('css')
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5f01c52fe9f145001203b906&product=inline-share-buttons" async="async"></script>
@endpush
@section('content')

    <section class="ftco-section ftco-degree-bg">

<div class="container">
        <div class="row " >
            <div class="col-lg-8 ftco-animate">
                <h2 class="mb-3">{{ $post->p_title }}</h2>

                <p>
                    <img src="/images/{{ $post->p_image }}" alt="" class="img-fluid">
                </p>
                <p>{!! $post->p_details !!}</p>
            </div>
            <div class="sharethis-inline-share-buttons"></div>
        </div>
</div>


    </section>


@endsection