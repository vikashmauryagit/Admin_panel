@extends('Layout.main')


@section('content')
    @session('success')
        <div class="alert alert-success" role="alert">
            <span class="text-light">{{ session('success') }}</span>
        </div>
    @endsession
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div>
                    <h3 class="card-title">Notice List</h3>
                </div>
                <div>
                    <a href="{{ route('notice.create') }}" class="btn btn-outline-success">Add New Notise</a>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Notice Title</th>
                        <th>File</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($notice as $item)
                        <tr>
                          
                            <td>{{ $item->date }}</td>
                            <td>{{ $item->notice_title }}</td>
                            {{-- {{ dd(Storage::url($item->image)) }} --}}
                            <td><img src="{{ Storage::url($item->file_path) }}" alt="User Image" width="100 rounded"></td>
                            <td>
                                <div class="d-flex">
                                    <div class="mr-2">
                                        <a href="{{route('notice.edit',$item->id)}}"><i class="fa-solid fa-pen-to-square bg-primary p-2 rounded"></i></a>
                                    </div>
                                    <div>
                                        <form action="{{route('notice.destroy',$item->id)}}" method="POST">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit"  style="background: none; border: none;">
                                                <i class="fa-solid fa-trash bg-danger p-2 runded"></i>
                                            </button>
                                        </form>
                                    </div>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>

                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
