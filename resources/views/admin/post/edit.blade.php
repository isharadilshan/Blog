@extends('admin.layouts.app')
@section('headSection')
    <style>
		.thumb {
			border: 1px solid #ddd !important;  /* Gray border */
			border-radius: 4px !important;  /* Rounded border */
			padding: 5px !important; /* Some padding */
			width: 150px !important; /* Set a small width */
		}
		
		/* Add a hover effect (blue shadow) */
		.thumb:hover {
			box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5) !important;
		}
    </style>
@endsection
@section('content')
    <div class="page-container">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card bg-dark">
                            <div class="card-header border-bottom">
                                <h4 class="card-title text-white">Edit a Post</h4>
                            </div>
                            @include('admin.includes.message')
                            <div class="card-body">
                                <form class="form-sample" action="{{ route('post.update',$post->id) }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH')}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-white">Title</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="title" id="title" placeholder="Enter Title" class="form-control" value="{{ $post->title }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-white">Subtitle</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="subtitle" id="subtitle" placeholder="Enter Subtitle" class="form-control" value="{{ $post->subtitle }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-white">Select a Category</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" id="exampleFormControlSelect2" name="categories[]">
                                                        @foreach($categories as $category )
                                                        <option value="{{ $category->id }}"
                                                            @foreach($post->categories as $postCategory)
                                                                @if($postCategory->id == $category->id)
                                                                    selected 
                                                                @endif
                                                            @endforeach
                                                        >{{ $category->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-white">Slug</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="slug" id="slug" placeholder="Enter Slug" class="form-control" value="{{ $post->slug }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-white">Select a Tag</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" id="exampleFormControlSelect2" name="tags[]">
                                                        @foreach($tags as $tag )
                                                            <option value="{{ $tag->id}}"
                                                                @foreach($post->tags as $postTag)
                                                                    @if($postTag->id == $tag->id)
                                                                        selected 
                                                                    @endif
                                                                @endforeach
                                                        >{{ $tag->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-white">Content Verified</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="verified">
                                                        @if($post->verified == 'Yes')
                                                            <option value="Yes" selected>Yes</option>
                                                            <option value="No">No</option>
                                                        @else
                                                            <option value="Yes">Yes</option>
                                                            <option value="No" selected>No</option>
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-white">Choose Image</label>
                                                <div class="col-sm-9">
                                                    <table>
                                                        <tr>
                                                            <td><img class="thumb" src="{{  asset('images/posts/').'/'.$post->image }}"></td>
                                                            <td><input type="file" name="image" id="image"></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 text-white">Editors Choice</label>
                                                <div class="col-sm-4">
                                                    <div class="custom-control custom-checkbox m-b-20">
                                                        <input type="checkbox" class="custom-control-input" id="checkbox0" name="checked" value="1" @if ($post->checked == 1) {{'checked'}} @endif>
                                                        <label class="custom-control-label text-white" for="checkbox0">Checked</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group m-b-20">
                                        <label class="text-white" for="exampleTextarea1">Content</label>
                                        <textarea class="form-control" id="editor1" name="body">{{ $post->body }}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-common mr-3">Submit</button>
                                    <a href="{{ route('post.index') }}" class="btn btn-light">Back</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
@endsection
@section('footerSection')
    <script src="{{ asset('admn/ckeditor/ckeditor.js') }}"></script>
    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1')
        })
    </script>
@endsection