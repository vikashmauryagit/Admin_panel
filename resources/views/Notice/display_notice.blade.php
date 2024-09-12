@extends('Layout.main')


@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div>
                    <h3 class="card-title">Notice</h3>
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
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $notice->date }}</td>
                        <td>{{ $notice->notice_title }}</td>
                        <td><img src="{{ Storage::url($notice->file_path) }}" alt="User Image" width="100 rounded"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
