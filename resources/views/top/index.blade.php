@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Friends</div>

                <div class="card-body">
                    @foreach($friends as $friend)
                      <li><a href="http://192.168.10.10/chat/index?id={{$friend->friend_id}}&name={{$friend->name}}">{{$friend->name}}</a></li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
