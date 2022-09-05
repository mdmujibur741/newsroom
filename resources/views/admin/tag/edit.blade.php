

@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card bg-hexa mt-3">
                    <div class="card-header">
                        <h3 class="text-center"> Tag Edit </h3>
                          @include('includes.error')
                    </div>

                    <div class="card-body">
                        <form action="{{route('tag.update',$tag->id)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="name">Tag Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter CategoryName" value="{{$tag->name}}">
                            </div>
                        
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description" id="description" rows="4"> {{$tag->description}} </textarea>
                            </div>
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

