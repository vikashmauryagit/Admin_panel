@extends('Layout.main')
@section('content')
    <div class="row p-4">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header h3 text-success text-center">Edit event</div>
                <div class="card-body">
                    <form action="{{route('Event.update',$event->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-2">
                            <label>Event Date <span class="text-danger">*</span></label>
                            <input type="date" name="event_date" class="form-control" value="{{$event->event_date}}">
                            <span class="text-danger">
                                @error('event_date')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-2">
                            <label>Event Title <span class="text-danger">*</span></label>
                            <input type="text" name="event_title" class="form-control" value="{{$event->event_title}}">
                            <span class="text-danger">
                                @error('event_title')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3 col-12">
                            <img src="{{Storage::url($event->event_img)}}" alt="event/img" class="img-fluid 30"  >
                        </div style="height: 80px;width:80px;">
                        <div class="mb-2">
                            <label>Upload Image </label>
                            <input type="file" name="event_img" id="event_images" class="form-control" multiple value="{{$event->event_img}}">
                            @error('event_img')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="mt-4">
                            <a href="{{ route('Event.index') }}" class="btn btn-outline-success p-1 rounded">Back</a>
                            <input type="submit" name="" value="Submit" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
