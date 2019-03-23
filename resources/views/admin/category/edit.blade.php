@extends('admin.layouts.app')
@section('content')
    <div class="page-container">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card bg-dark">
                            <div class="card-header border-bottom">
                                <h4 class="card-title text-white">Edit the Category</h4>
                            </div>
                            @include('admin.includes.message')
                            <div class="card-body">
                                <form class="form-sample" action="{{ route('category.update',$category->id) }}"method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH')}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-white">Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="name" id="name" placeholder="Enter Name" class="form-control" value="{{ $category->name }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label text-white">Slug</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="slug" id="slug" placeholder="Enter Slug" class="form-control" value="{{ $category->slug }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-common mr-3">Submit</button>
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