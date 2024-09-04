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
                        <div class="mb-2">
                            <label>Objectives <span class="text-muted" style="font-size: 12px;">Enter for every new
                                    line</span></label>
                            <textarea name="objectives" class="form-control">{{$event->objectives}}</textarea>
                            <span class="text-danger">
                                @error('objectives')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-2">
                            <label>Resource Person </label>
                            <input type="text" name="resource_person" class="form-control" value="{{$event->resource_person}}">
                            <span class="text-danger">
                                @error('resource_person')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-2">
                            <label>Beneficiaries </label>
                            <input type="text" name="beneficiaries" class="form-control" value="{{$event->beneficiaries}}">
                            <span class="text-danger">
                                @error('beneficiaries')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-2">
                            <label>Event Outcome <span class="text-muted" style="font-size: 12px;">Enter for every new
                                    line</span></label>
                            <textarea name="event_outcome" class="form-control">{{$event->event_outcome}}</textarea>
                            <span class="text-danger">
                                @error('event_outcome')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-2">
                            <label>Committee </label>
                            <input type="text" name="committee" class="form-control" value="{{$event->committee}}">
                            <span class="text-danger">
                                @error('committee')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-2">
                            <label>Cordinator </label>
                            <input type="text" name="cordinator" class="form-control" value="{{$event->cordinator}}">
                            <span class="text-danger">
                                @error('cordinator')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mb-3 col-12">
                            <img src="{{Storage::url($event->event_img)}}" alt="event/img" class="img-fluid 30"  >
                        </div>
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
