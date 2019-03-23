@extends('admin.layouts.app')
@section('content')
    <div class="page-container">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card bg-dark">
                            <div class="card-header border-bottom">
                                <h4 class="card-title text-white">View Category Details</h4>
                            </div>
                            <div class="card-body">
                                <form class="form-sample">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-white">Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="name" id="name" class="form-control text-dark" value="{{ $category->name }}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-white">Slug</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="slug" id="slug" class="form-control text-dark" value="{{ $category->slug }}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-white">Created At</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="created_at" id="created_at" class="form-control text-dark" value="{{ $category->created_at }}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-white">Updated At</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="updated_at" id="updated_at" class="form-control text-dark" value="{{ $category->updated_at }}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <form method="post"id="delete-form-{{ $category->id }}" action="{{ route('category.destroy',$category->id) }}" style="dispaly: none">
                                        {{ csrf_field()}}
                                        {{ method_field('DELETE') }}
                                    </form>
                                    <a class="btn btn-danger" href="" onclick=" 
                                        if(confirm('Are You Sure,You want to Delete this ?'))
                                        {
                                            event.preventDefault();document.getElementById('delete-form-{{ $category->id }}').submit();
                                        }
                                        else
                                        {
                                            event.preventDefault();
                                        }">
                                    </a> --}}
                                    <a href="{{ route('category.index') }}" class="btn btn-light">Back</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
@endsection