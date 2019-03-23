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
                                <h4 class="card-title text-white">View Post Details</h4>
                            </div>
                            <div class="card-body">
                                <form class="form-sample">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-white">Title</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="title" id="title" class="form-control text-dark" value="{{ $post->title }}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-white">Subtitle</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="subtitle" id="subtitle" class="form-control text-dark" value="{{ $post->subtitle }}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-white">Category</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="categories[]" id="categories[]" class="form-control text-dark" value="{{ $post->categories[0]->name }}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-white">Slug</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="slug" id="slug" class="form-control text-dark" value="{{ $post->slug }}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-white">Tags</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="tags[]" id="tags[]" class="form-control text-dark" value="{{ $post->tags[0]->name }}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-white">Content Verified</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="verified" id="verified" class="form-control text-dark" value="{{ $post->verified }}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-white">Image</label>
                                                <div class="col-sm-9">
                                                    <table>
                                                        <tr>
                                                            <td><img class="thumb" src="{{  asset('images/posts/').'/'.$post->image }}"></td>
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
                                                        <input disabled="disabled" type="checkbox" class="custom-control-input" id="checkbox0" name="checked" value="1" @if ($post->checked == 1) {{'checked'}} @endif >
                                                        <label class="custom-control-label text-white" for="checkbox0">Checked</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group m-b-20">
                                        <label class="text-white" for="exampleTextarea1">Content</label>
                                        <textarea class="form-control text-dark" name="body" readonly>{{ $post->body }}</textarea>
                                    </div>
                                    {{-- <button type="submit" class="btn btn-common mr-3">Submit</button> --}}
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
