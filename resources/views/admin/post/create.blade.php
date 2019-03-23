@extends('admin.layouts.app')
@section('content')
    <div class="page-container">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card bg-dark">
                            <div class="card-header border-bottom">
                                <h4 class="card-title text-white">Create a Post</h4>
                            </div>
                            @include('admin.includes.message')
                            <div class="card-body">
                                <form class="form-sample" action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-white">Title</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="title" id="title" placeholder="Enter Title" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-white">Subtitle</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="subtitle" id="subtitle" placeholder="Enter Subtitle" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-white">Select Category</label>
                                                <div class="col-sm-9">
                                                    <select  class="form-control" id="exampleFormControlSelect2" name="categories[]">
                                                        @foreach($categories as $category )
                                                            <option value="{{ $category->id }}"
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
                                                    <input type="text" name="slug" id="slug" placeholder="Enter Slug" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-white">Select Tags</label>
                                                <div class="col-sm-9">
                                                    <select  class="form-control" id="exampleFormControlSelect2" name="tags[]">
                                                        @foreach($tags as $tag )
                                                            <option value="{{ $tag->id}}"
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
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
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
                                                    <input type="file" name="image" id="image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 text-white">Editors Choice</label>
                                                <div class="col-sm-4">
                                                    <div class="custom-control custom-checkbox m-b-20">
                                                        <input type="checkbox" class="custom-control-input" id="checkbox0" name="checked" value="1">
                                                        <label class="custom-control-label text-white" for="checkbox0">Checked</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group m-b-20">
                                        <label class="text-white" for="exampleTextarea1">Content</label>
                                        <textarea class="form-control" id="editor1" name="body" placeholder="Enter Post content Here"></textarea>
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
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5()
        })
    </script>
@endsection