

@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card bg-hexa mt-3">
                    <div class="card-header">
                        <h3 class="text-center text-light"> Setting Create </h3>
                          @include('includes.error')
                    </div>

                    <div class="card-body">
                        <form action="@if($setting ==!null){{route('setting.update',$setting->id)}} @else {{route('setting.store')}} @endif " method="post" enctype="multipart/form-data">
                            @csrf
                            @if($setting ==!null)  @method('put') @endif
                            <div class="form-group">
                                <label for="copyright">Copyright</label>
                                <input type="text" class="form-control" name="copyright" id="copyright" placeholder="Enter Copyright" @if($setting ==!null) value="{{$setting->copyright}}" @endif>
                            </div>
                        
                            <div class="form-group">
                                <label for="facebook">Facebook</label>
                                <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Enter Facebook link" @if($setting ==!null) value="{{$setting->facebook}}" @endif>
                            </div>

                            <div class="form-group">
                                <label for="linkedin">Linkedin</label>
                                <input type="text" class="form-control" name="linkedin" id="linkedin" placeholder="Enter Linkedin link" @if($setting ==!null)value="{{$setting->linkedin}}" @endif>
                            </div>
                            <div class="form-group">
                                <label for="twitter">Twitter</label>
                                <input type="text" class="form-control" name="twitter" id="twitter" placeholder="Enter Twitter link" @if($setting ==!null)value="{{$setting->twitter}}" @endif>
                            </div>

                            <div class="form-group">
                                <label for="youtube">Youtube</label>
                                <input type="text" class="form-control" name="youtube" id="youtube" placeholder="Enter Youtube link" @if($setting ==!null)value="{{$setting->youtube}}" @endif>
                            </div>

                            <div class="form-group">
                                <label for="instagram">Instragram</label>
                                <input type="text" class="form-control" name="instagram" id="instagram" placeholder="Enter Instragram link" @if($setting ==!null)value="{{$setting->instagram}}" @endif>
                            </div>
                            <div class="form-group">
                                <label for="vimeo">Vimeo</label>
                                <input type="text" class="form-control" name="vimeo" id="vimeo" placeholder="Enter vimeo Link" @if($setting ==!null)value="{{$setting->vimeo}}" @endif>
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address" @if($setting ==!null)value="{{$setting->address }}" @endif>
                            </div>
                            

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email" @if($setting ==!null)value="{{$setting->email}}" @endif>
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter Phone" @if($setting ==!null)value="{{$setting->phone}}" @endif>
                            </div>


                            <div class="mb-3">
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control" type="file" id="formFile" name="image" value="{{old('image')}}">
                              </div>

                              @if($setting ==!null)
                              <img src="{{asset($setting->image)}}" width="30%" class="img-thumbnail float-end" alt="" srcset="">
                               @endif

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

