@extends('Layout.main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class="card-title">Event</h3>
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

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $event->event_date }}</td>
                                    <td>{{ $event->event_title }}</td>
                                    <td>{{ $event->objectives }}</td>
                                    <td>{{ $event->resource_person }}</td>
                                    <td>{{ $event->beneficiaries }}</td>
                                    <td>{{ $event->event_outcome }}</td>
                                    <td>{{ $event->committee }}</td>
                                    <td><img src="{{ Storage::url($event->event_img) }}" alt="User Image"
                                            width="60 rounded"></td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
@endsection
