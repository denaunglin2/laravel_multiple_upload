@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @foreach($users as $user)
                    <form method="get" action="{{route('remove')}}">
                    <div class="panel panel-primary">


                        <div class="panel-heading">{{$user->name}} <button type="submit"  class="pull-right btn btn-danger btn-xs">Rm</button></div>
                        <div class="panel-body">

                           @foreach($user->photo as $photo)
                               <div class="col-md-2">
                                   <div class="thumbnail">
                                       <input type="checkbox" name="photos[]" value="{{$photo->photo_name}}">
                                       <img style="width: 200px;" src="users/{{$photo->photo_name}}" class="img-rounded">
                                   </div>
                               </div>
                               @endforeach

                        </div>

                    </div>
                    </form>
                    @endforeach
            </div>
        </div>
    </div>
    @stop