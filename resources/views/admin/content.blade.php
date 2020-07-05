@extends('layouts.adminMaster')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Create A Content</h1>
        </div>

        <div>
        <form action="{{ url('admin/action') }}" method="GET">
            <select name="edit_op" id="">

                    @if($_GET['type'] == 'Post')
                    <option selected value='Post'>Post</option>
                    <option value='Video'>Video</option>
                    @else
                        <option value='Post'>Post</option>
                        <option selected value='Video'>Video</option>
                    @endif

            </select>

            <input type="submit" value="Change">
        </form>
        </div>

    <div class="row">
        <div class="col-lg-12">
            @if($_GET['type'] == 'Post')
                <h3>Post Content</h3>
            <form action="{{ route('admin.postcreate') }}" class="form-group" enctype="multipart/form-data" method="POST">
                {{ csrf_field() }}
                <input type="text" name="p_title" placeholder="Post Title" class="form-control"><br>
                <input type="file" name="p_image" accept="image/*" class="form-control mb-3"><br>
                <textarea name="p_details" id="image-tools" cols="30" rows="10" class="form-control"></textarea><br>
                <input type="submit" name="submit" value="create" class="btn btn-primary btn-sm">
            </form>
            @else
                <h3>Video Content</h3>
                <form action="{{ route('admin.videocreate') }}" class="form-group" enctype="multipart/form-data" method="POST">
                    {{ csrf_field() }}
                    <input type="text" name="v_title" placeholder="Video Title" class="form-control"><br>
                    <input type="file" name="v_image" accept="image/*" class="form-control mb-3"><br>
                    <input type="text" name="v_link" placeholder="Video Link" class="form-control"><br>
                    <textarea name="v_details" id="image-tools" cols="30" rows="10" class="form-control"></textarea><br>
                    <input type="submit" name="submit" value="create" class="btn btn-primary btn-sm">
                </form>

            @endif
        </div>
    </div>
    </div>

@endsection

@push('js')
    <script>
        tinymce.init({
            selector: 'textarea#image-tools',
            height: 300,
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table paste imagetools wordcount"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });
    </script>
@endpush