@extends('Layout.main')
@section('content')
@session('success')
        <div class="alert alert-success" role="alert">
            <span class="text-light">{{ session('success') }}</span>
        </div>
    @endsession
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class="card-title">Event List</h3>
                            </div>
                            <div>
                                <a href="{{ route('Event.create') }}" class="btn btn-outline-success p-2 rounded">Add Event
                                    List</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Title</th>
                                    <th>Objectives</th>
                                    <th>Resource Person</th>
                                    <th>Beneficiaries</th>
                                    <th>Event Outcome</th>
                                    <th>Committee</th>
                                    <th>Images</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($event as $item)
                                    <tr>
                                        <td>{{ $item->event_date }}</td>
                                        <td>{{ $item->event_title }}</td>
                                        <td>{{ $item->objectives }}</td>
                                        <td>{{ $item->resource_person }}</td>
                                        <td>{{ $item->beneficiaries }}</td>
                                        <td>{{ $item->committee }}</td>
                                        <td>{{ $item->event_outcome }}</td>
                                        {{-- <td><img src="{{ Storage::url($item->file_path) }}" alt="User Image" width="100 rounded"></td> --}}
                                        <td><img src="{{ Storage::url($item->event_img) }}" alt="User Image"
                                                width="60 rounded"></td>
                                        <td>
                                            <div class="d-flex">
                                                <div><a href="{{ route('Event.edit', $item->id) }}"><i
                                                            class="fa-solid fa-pen-to-square bg-primary p-2 rounded"></i>
                                                </div>
                                                <div>
                                                    <form action="{{ route('Event.destroy',$item->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" style="background: none; border: none;">
                                                            <i class="fa-solid fa-trash bg-danger p-2 rounded"></i>
                                                        </button>

                                                    </form>
                                                </div>
                                                <div><a href="{{ route('Event.show', $item->id) }}"><i
                                                    class="fa-solid fa-eye text-light bg-primary p-2 rounded"></i>
                                        </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Date</th>
                                    <th>Title</th>
                                    <th>Objectives</th>
                                    <th>Resource Person</th>
                                    <th>Beneficiaries</th>
                                    <th>Event Outcome</th>
                                    <th>Committee</th>
                                    <th>Images</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
@endsection
