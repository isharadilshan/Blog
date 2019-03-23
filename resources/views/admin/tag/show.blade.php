@extends('admin.layouts.app')
@section('content')
    <div class="page-container">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card bg-dark">
                            <div class="card-header border-bottom">
                                <h4 class="card-title text-white">View Tag Details</h4>
                            </div>
                            <div class="card-body">
                                <form class="form-sample">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-white">Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="name" id="name" class="form-control text-dark" value="{{ $tag->name }}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-white">Slug</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="slug" id="slug" class="form-control text-dark" value="{{ $tag->slug }}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-white">Created At</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="created_at" id="created_at" class="form-control text-dark" value="{{ $tag->created_at }}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-white">Updated At</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="updated_at" id="updated_at" class="form-control text-dark" value="{{ $tag->updated_at }}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <form method="post"id="delete-form-{{ $tag->id }}" action="{{ route('category.destroy',$tag->id) }}" style="dispaly: none">
                                        {{ csrf_field()}}
                                        {{ method_field('DELETE') }}
                                    </form>
                                    <a class="btn btn-danger" href="" onclick=" 
                                        if(confirm('Are You Sure,You want to Delete this ?'))
                                        {
                                            event.preventDefault();document.getElementById('delete-form-{{ $tag->id }}').submit();
                                        }
                                        else
                                        {
                                            event.preventDefault();
                                        }">
                                    </a> --}}
                                    <a href="{{ route('tag.index') }}" class="btn btn-light">Back</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
@endsection