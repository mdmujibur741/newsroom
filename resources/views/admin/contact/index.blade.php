@extends('layouts.master')

@section('content')

            <div class="container-fluid mt-4">
                <div class="row">
                     <div class="col-12">
                         <div class="card ">
                            <div class="card-header">
                                  <h3 class="text-center">Message List</h3>
                            </div>
                            <div class="card-body">
                                   <table class="table table-bordered">
                                         <thead > 
                                              <tr>
                                                <th scope="col" >Serial</th>
                                                <th scope="col" > Name</th>
                                                <th scope="col" > Email </th>
                                                <th scope="col" > Subject</th>
                                                <th scope="col" > Message</th>
                                                <th scope="col" > Date</th>
                                                <th scope="col" > Action</th>
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
                                                                  <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa-solid fa-trash"></i></button>
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