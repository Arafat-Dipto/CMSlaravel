@extends('layouts.master')

@section('content')

    <div class="container-fluid">

        <div class="row" style="margin-left: 0px !important; margin-right: 0px !important;">
            <div class="col-lg-8">
                <h2>Video Content</h2>

                    <div class="row" style="margin-left: 0px !important; margin-right: 0px !important;">

                        <div class="col-md-6">

                            <div>
                                @if(isset($video->id))
                                    <a href="{{ route('videoView',$video->id) }}" class="block-20 d-flex justify-content-end align-items-end" style="width: 100%; height: 400px; background-image: url('/images/{{ $video->v_image }}');"><i class="fab fa-youtube-square fa-2x" style="color: red; background: white;"></i></a>
                                <h3><a href="{{ route('videoView',$video->id) }}">{{ $video->v_title }}</a></h3>
                                <p>{!! $video->v_details !!}</p>
                                    @else
                                <h3 style="margin-bottom: 508px;">No content</h3>
                                    @endif

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                            @foreach($videos as $v)

                                    <div class="col-md-6">
                                        <a href="{{ route('videoView',$v->id) }}" class="block-20 d-flex justify-content-end align-items-end" style="width: 150px; height: 100px; background-image: url('/images/{{ $v->v_image }}');"><i class="fab fa-youtube-square fa-2x" style="color: red; background: white; "></i></a>
                                        <h6><a href="{{ route('videoView',$v->id) }}">{{ $v->v_title }}</a></h6>
                                    </div>

                            @endforeach

                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <h2>Post Content</h2>
                <div class="row" >
                    @if(isset($post->id))
                        <a href="{{ route('postView',$post->id) }}" class="" style="width: 100%; background-repeat: no-repeat; background-size: cover; height: 300px; background-image: url('/images/{{ $post->p_image }}');"></a>

                        <h3 class="ml-3"><a href="{{ route('postView',$post->id) }}">{{ $post->p_title }}</a></h3>

                        <p>{!! $post->p_details !!}</p>
                    @else
                        <h3 style="margin-bottom: 508px;">No content</h3>

                    @endif

                    </div>
                <div class="row">
                    @foreach($posts as $p)
                        <div class="col-md-6 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch d-md-flex">
                            <a href="{{ route('postView',$p->id) }}" class="" style="width: 150px; background-repeat: no-repeat; background-size: cover; height: 100px; background-image: url('/images/{{ $p->p_image }}');"></a>
                            <h6 class="ml-3"><a href="{{ route('postView',$p->id) }}">{{ $p->p_title }}</a></h6>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>

        </div>


@endsection