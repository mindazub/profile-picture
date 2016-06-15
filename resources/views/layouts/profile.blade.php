@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>

                <div class="panel-body">
                    <div class="col-md-10 col-md-offset-1">
                        <img src="/uploads/avatars/{{ $user->avatart }}" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px;">
                        {{ $user->name }}'s Profile

                        <form enctype="multipart/form-data" action="/profile" method="POST">
                            <label>Update Profile Image</label>
                            <input type="file" name="avatar">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="pull-right btn btn-sm btn-primary">              
                        </form>


                    </div>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
