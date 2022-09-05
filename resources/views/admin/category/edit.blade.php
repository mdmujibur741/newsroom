

@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card bg-hexa mt-3">
                    <div class="card-header">
                        <h3 class="text-center"> Category Edit </h3>
                          @include('includes.error')
                    </div>

                    <div class="card-body">
                        <form action="{{route('category.update',$category->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="name">Category Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter CategoryName" value="{{$category->name}}">
                            </div>
                        
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description" id="description" rows="4"> {{$category->description}} </textarea>
                            </div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control" type="file" id="formFile" name="image" value="{{old('image')}}">
                              </div>
                              
                                 <img src="{{asset($category->image)}}" width="40%" class="img-thumbnail float-end" alt="" srcset="">

                            <button type="submit" class="btn btn-primary mr-2"> Update </button>
                           
                        </form>
                    </div>
                    <div class="card-footer">
                        
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

