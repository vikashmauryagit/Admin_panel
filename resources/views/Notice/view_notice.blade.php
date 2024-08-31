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
                            <td>
                                @if (in_array(pathinfo($item->file_path, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif']))
                                    <img src="{{ asset('storage/' . $item->file_path) }}" width="200" height="auto">
                                @else
                                    <a href="{{ asset('storage/' . $item->file_path) }}" target="_blank">View File</a>
                                @endif
                            </td>
                            
                                                   
                            <td> 4</td>
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
