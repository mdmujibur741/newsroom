

@extends('layouts.master')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center"> Tag Create </h3>
                          @include('includes.error')
                    </div>

                    <div class="card-body">
                        <form action="{{route('tag.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">tag Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Tag Name">
                            </div>
                        
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description" id="description" rows="4"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                           
                        </form>
                    </div>
                    <div class="card-footer">
                        
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

