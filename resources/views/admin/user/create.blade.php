

@extends('layouts.master')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-12">
                <div class="card ">
                    <div class="card-header">
                        <h3 class="text-center"> User Create </h3>
                          @include('includes.error')
                    </div>

                    <div class="card-body">
                        <form action="{{route('user.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">User Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter CategoryName">
                            </div>

                            <div class="form-group">
                                <label for="email">User Email</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email">
                            </div>
                        
                            <div class="form-group">
                                <label for="password">User Password</label>
                                <input type="text" class="form-control" name="password" id="password" placeholder="Enter Password">
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

