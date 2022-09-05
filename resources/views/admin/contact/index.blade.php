@extends('layouts.master')

@section('content')

            <div class="container-fluid">
                <div class="row">
                     <div class="col-12">
                         <div class="card bg-hexa">
                            <div class="card-header">
                                  <h3 class="text-center">Category List</h3>
                            </div>
                            <div class="card-body">
                                   <table class="table table-bordered text-light">
                                         <thead>
                                              <tr>
                                                <th scope="col" class="text-light">Serial</th>
                                                <th scope="col" class="text-light"> Name</th>
                                                <th scope="col" class="text-light"> Email </th>
                                                <th scope="col" class="text-light"> Subject</th>
                                                <th scope="col" class="text-light"> Message</th>
                                                <th scope="col" class="text-light"> Date</th>
                                                <th scope="col" class="text-light"> Action</th>
                                              </tr>
                                         </thead>
                                         <tbody>
                                                  @if($contact->count()>0)
                                                      @foreach ($contact as $key=>$item)
                                                      <tr>
                                                        <td > {{++$key}} </td>
                                                        <td > {{$item->name}} </td>
                                                        <td > {{$item->email}} </td>
                                                        <td > {{$item->subject}} </td>
                                                        <td > {{$item->message}} </td>
                                                        <td > {{$item->created_at->format('d-m-y, h:i:a')}} </td>
                                                        <td class="d-flex justify-content-evenly"> 
                                                             
                                                             <form action="{{route('contact.destroy',$item->id)}}" method="post">
                                                                @csrf
                                                                @method('delete')
                                                                  <button type="submit" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                                                             </form>
                                                        </td>
                                                      </tr>
                                                      @endforeach
                                                  
                                                   @else <tr>
                                                          <td class="100"> <h3>No Data Foud</h3> </td>
                                                   </tr>
                                                  @endif
                                         </tbody>
                                   </table>
                            </div>
                         </div>
                     </div>
                </div>
            </div>
    
@endsection