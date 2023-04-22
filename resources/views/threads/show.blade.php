@extends('layouts.app')

<head>
  <title>{{ $thread->title }}</title>
  <style>
    <style>
		/* Custom styles */
		body {
			background-color: #f8f9fa;
		}
		.container {
			margin-top: 50px;
		}
		.card {
			border-radius: 10px;
			box-shadow: rgba(0, 0, 0, 0.3) 0px 30px 90px;
			margin-bottom: 30px;
		}
		.card-header {
			background-color: #ffffff;
			border-bottom: none;
			padding-bottom: 0;
		}
		.card-header h1 {
			font-size: 36px;
			margin-bottom: 10px;
			font-weight: 700;
			color: #2f3e55;
		}
		.card-header p {
			font-size: 16px;
			color: #8d99ae;
			margin-bottom: 0;
		}
		.card-body p {
			font-size: 18px;
			line-height: 1.6;
			margin-bottom: 20px;
		}
		.card-body p:last-of-type {
			margin-bottom: 0;
		}
		.card-footer {
			background-color: #ffffff;
			border-top: none;
			padding-top: 0;
		}
		.card-footer p {
			font-size: 16px;
			color: #8d99ae;
			margin-bottom: 0;
		}
		.card-footer a {
			font-size: 16px;
			color: #8d99ae;
			font-weight: 600;
			margin-right: 20px;
			transition: all 0.2s ease-in-out;
		}
		.card-footer a:hover {
			color: #2f3e55;
		}
		.pagination {
			justify-content: center;
			margin-top: 30px;
			margin-bottom: 0;
		}
		.list-group-item {
			background-color: transparent;
			border: none;
			padding-left: 0;
		}
		.list-group-item a {
			font-size: 16px;
			color: #2f3e55;
			font-weight: 600;
			transition: all 0.2s ease-in-out;
		}
		.list-group-item a:hover {
			color: #8d99ae;
		}
	</style>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.1/css/bootstrap.min.css">
</head>
<?php @include 'header.blade.php'?>

@section('content')
<div class="container py-3">
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header"><h1>{{ $thread->title }}</h1></div>
        <div class="card-body">
          <h6>{{ $thread->body }}</h6>
        </div>
        <div class="card-footer"><h6>Posted by <a href="#">{{ $thread->user->name }}</a> on {{ date("F j, Y", strtotime($thread->created_at)) }}</h6></div>
        <hr>
      </div>
      <div class="card">
        <h2>Replies</h2>
        @foreach ($thread->replies as $reply)
          <div class="card mb-3">
            <div class="card-body">
              <div class="list-group-item"><p>{{ $reply->body }}</p></div>
              <div class="card-footer"><p class="text-muted">Posted by <a href="#">{{ $reply->user->name }}</a> on {{ date("F j, Y", strtotime($thread->created_at)) }}</p></div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
  <div class="row">
    <div class="card col-md-8">
        <div class="card-header"><h3>Add a Reply</h3></div>
        <form action="{{ route('replies.store', $thread) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="body">Reply:</label>
                <textarea name="body" id="body" class="form-control" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  </div>
</div>
<br><br><br><br>
<?php @include 'Footer/footer.blade.php' ?>
@endsection

