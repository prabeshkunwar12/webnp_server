<html>

<head>
  <style>
    /* Custom styles */
		.body {
			background-color: #f8f9fa;
		}
		.container {
			margin-top: 50px;
      max-width: 1200px;
      margin: 0 auto;
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

    .card-header .text-muted {
      font-size: 16px;
      color: #777;
    }
  </style>
</head>
  <body>
    <?php @include 'header.blade.php'?>

    {{-- @section('content') --}}
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Forum</h2>
                <a href="{{ route('threads.create') }}" class="btn btn-primary">Start a discussion</a>
                <hr>
                @foreach ($threads as $thread)
                    <div class="card mb-4">
                      <a href="{{ route('threads.show', $thread) }}">
                        <div class="card-header"><h3>{{ $thread->title }}</h3></div>
                      </a>
                      <div class="card-body">
                        <h5>{{ $thread->body }}</h5>
                      </div>
                      <div class="card-footer"><h5 class="text-muted">Posted by <a href="#">{{ $thread->user->name }}</a> on {{ date("F j, Y", strtotime($thread->created_at)) }}</h5></div>
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

    <?php @include 'Footer/footer.blade.php' ?>

  </body>

</html>