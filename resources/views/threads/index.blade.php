<html>

<head>
<style>
    /* Container styles */
.container {
  max-width: 1200px;
  margin: 0 auto;
}

/* Button styles */
.btn {
  display: inline-block;
  font-size: 16px;
  font-weight: 400;
  color: #fff;
  text-align: center;
  vertical-align: middle;
  background-color: #007bff;
  border: 1px solid #007bff;
  border-radius: 5px;
  padding: 10px 20px;
  margin-right: 10px;
  margin-bottom: 10px;
  text-decoration: none;
}

.btn:hover {
  background-color: #0069d9;
  cursor: pointer;
}

/* Card styles */
.card {
  border-radius: 5px;
  border: 1px solid #ccc;
  margin-bottom: 20px;
}

.card-header {
  background-color: #fff;
  padding: 15px;
  font-size: 18px;
  color: #333;
}

.card-header a {
  color: #333;
  text-decoration: none;
}

.card-header a:hover {
  text-decoration: underline;
}

.card-header .text-muted {
  font-size: 16px;
  color: #777;
}

.card-body {
  font-size: 16px;
  padding: 15px;
}

</style>
</head>
<body>
{{-- @section('content') --}}
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Forum</h2>
            <a href="{{ route('threads.create') }}" class="btn btn-primary">Start a discussion</a>
            <hr>
            @foreach ($threads as $thread)
                <div class="card mb-4">
                    <div class="card-header">
                        <a href="{{ route('threads.show', $thread) }}">{{ $thread->title }}</a>
                        <span class="text-muted">by {{ $thread->user->name }}</span>
                    </div>
                    <div class="card-body">
                        {{ $thread->body }}
                    </div>
                    <div class="card-footer">
                        @if (Auth::check() && Auth::user()->id === $thread->user_id)
                            <form action="{{ route('threads.destroy', $thread) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
{{-- @endsection --}}
</body>

</html>