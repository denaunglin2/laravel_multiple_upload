@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                   <form method="post" enctype="multipart/form-data" action="{{route('upload')}}">
                       <div class="form-group">
                           <label for="photos" class="control-label">Photo</label>
                           <input type="file" name="photos[]" multiple class="form-control" style="height: auto">
                       </div>
                       <div class="form-group">
                           <button type="submit" class="btn btn-primary btn-block">Upload</button>
                       </div>
                       {{csrf_field ()}}
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
