@extends('layouts.app')

<head>
    <style>
        /* Container styles */
.container {
  max-width: 1200px;
  margin: 0 auto;
}

/* Header styles */
h2 {
  font-size: 24px;
  margin-bottom: 20px;
}

/* Body text styles */
p {
  font-size: 16px;
}

/* Card styles */
.card {
  border-radius: 5px;
  border: 1px solid #ccc;
  margin-bottom: 20px;
}

.card-body {
  font-size: 16px;
  padding: 15px;
}

.card-body .text-muted {
  font-size: 16px;
  color: #777;
}

/* Form styles */
form {
  margin-top: 20px;
}

.form-group {
  margin-bottom: 20px;
}

label {
  font-weight: bold;
}

textarea {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

button[type="submit"] {
  background-color: #007bff;
  color: #fff;
  padding: 10px 20px;
  border-radius: 5px;
  border: none;
  font-size: 16px;
  margin-top: 10px;
}

button[type="submit"]:hover {
  background-color: #0069d9;
  cursor: pointer;
}

    </style>
</head>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>{{ $thread->title }}</h2>
            <p>{{ $thread->body }}</p>
            <hr>
            <h3>Replies</h3>
            @foreach ($thread->replies as $reply)
                <div class="card mb-2">
                    <div class="card-body">
                        {{ $reply->body }}
                        <span class="text-muted">by {{ $reply->user->name }}</span>
                    </div>
                </div>
            @endforeach
            <hr>
            <h3>Add a Reply</h3>
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
@endsection
