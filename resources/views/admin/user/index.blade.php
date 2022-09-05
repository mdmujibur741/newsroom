@extends('layouts.master')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card bg-hexa">
                    <div class="card-header">
                        <h3 class="text-center">User List</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-light">
                            <thead>
                                <tr>
                                    <th scope="col">Serial</th>
                                    <th scope="col">User Name</th>
                                    <th scope="col"> Email</th>
                                    <th scope="col"> Date</th>
                                    <th scope="col"> Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($user->count() > 0)
                                    @foreach ($user as $key => $item)
                                        <tr>
                                            <td> {{ $key++ }} </td>
                                            <td> {{ $item->name }} </td>
                                            <td> {{ $item->email }} </td>
                                            <td> {{ $item->created_at->format('d-M-Y') }} </td>
                                            <td class="d-flex justify-content-evenly">
                                                <a href="{{ route('user.edit', Crypt::encryptString($item->id)) }}"
                                                    class="btn btn-sm btn-success mr-2"> <i
                                                        class="fa-solid fa-pen-to-square"></i> </a>
                                                <form action="{{ route('user.destroy', $item->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-sm btn-danger"><i
                                                            class="fa-solid fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
