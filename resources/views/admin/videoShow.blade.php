@extends('layouts.adminMaster')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Video Manager</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    All Post
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>User Name</th>
                                <th>Title</th>
                                <th>Actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($videos as $key => $video)
                                <tr>

                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $video->user->name }}</td>
                                    <td>{{ $video->v_title }}</td>
                                    <td>
                                        @if($video->publish == 1)
                                            <a class="btn btn-warning btn-sm" href="{{ url('/admin/post/'.$video->id.'/unpublishVideo') }}">Unpublish</a>
                                        @else
                                            <a class="btn btn-success btn-sm" href="{{ url('/admin/post/'.$video->id.'/publishVideo') }}">Publish</a>
                                        @endif
                                        <a class="btn btn-danger btn-sm" onclick="return confirm('are you sure?');" href="{{ route('admin.videoDelete',$video->id) }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>


                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->

        </div>
    </div>


@endsection

