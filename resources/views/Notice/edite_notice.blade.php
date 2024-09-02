@extends('Layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card">
                    <div class="p-2">
                        <h4 class="text-success text-center">Edit Notice</h4>
                        <div class="col-lg-12 border-bottom"></div>
                    </div>
                    <form action="{{route('notice.update',$notice->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <input type="hidden" name="notice_id" id="" value="{{$notice->id}}">
                        <div class="mb-3 col-12">
                            <label for="exampleInputEmail1" class="form-label">Notice Date<span
                                    class="text-danger">*</span></label>
                            <input type="date" class="form-control" name="date" value="{{$notice->date}}">
                            @error('date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-12">
                            <label for="exampleInputEmail1" class="form-label">Notice Title<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="notice_title" value="{{$notice->notice_title}}">
                            @error('notice_title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-12">
                            <label for="exampleInputPassword1" class="form-label">Upload File</label>
                            <input type="file" class="form-control" name="upload_file" value="{{$notice->file_path}}">
                            @error('upload_file')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="p-2">
                            <a href="{{ route('notice.index') }}" class="btn btn-outline-success">Back</a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
