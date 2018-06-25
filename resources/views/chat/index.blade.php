@extends('layouts.app')

@section('content')
	<link rel="stylesheet" href="{{asset('/css/style.css')}}">
	<div id="container">
	<h1>{{$_GET['name']}}とのチャット</h1>
	<div id="talkField">
		<div id="result"></div>
		<br class="clear_balloon"/>
		<div id="end"></div>
	</div>
	<div id="inputField">
		<p>
			YourName: <label>{{$user->name}}</label>
			<input type="hidden" name="user" id="user" value="{{$user->name}}">
			<input type="hidden" name="userid" id="userid" value="{{$user->id}}">
			<input type="hidden" name="friendid" id="friendid" value="{{$_GET['id']}}">
			Message: <input type="text" name="message" id="message">
			<input type="button" id="greet" value="send">
		</p>
	</div>
    </div>
    <script src="{{asset('/js/jquery.js')}}"></script>
	<script src="{{asset('/js/main.js')}}"></script>
@endsection
