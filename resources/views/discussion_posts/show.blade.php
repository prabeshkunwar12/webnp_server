<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $discussion_post->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            border-radius: 10px;
        }

        .btn-like {
            color: #007bff;
        }

        .btn-unlike {
            color: #dc3545;
        }
    </style>
</head>
<body>
    <?php @include 'header.blade.php'?>
    <div class="container mt-4">
        <h1>{{ $discussion_post->title }}</h1>
        <div class="edit_posts">
            <a href="{{ route('discussion_posts.edit', $discussion_post->id) }}" class="text-decoration-none text-dark">{{ $discussion_post->title }}</a>
        </div>
        <div class="card-body">
            @if($discussion_post->image)
                <img src="{{ asset('images/' . $discussion_post->image) }}" alt="{{ $discussion_post->title }}" class="img-fluid">
            @endif
            <p class="card-text">{{ $discussion_post->body }}</p>
        </div>
        
        

        <p>{{ $discussion_post->body }}</p>
        <p>Posted by {{ $discussion_post->user->name }} on {{ $discussion_post->created_at }}</p>
        @if(auth()->check() && auth()->user()->id == $discussion_post->user->id)
        <form action="{{ route('discussion_posts.destroy', $discussion_post->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-link btn-delete p-0 text-danger"><i class="fa fa-trash"></i> Delete</button>
        </form>
        @endif

        <hr>

        <h4>Comments</h4>
        @foreach($discussion_post->comments as $comment)
            <div class="card mb-3 shadow">
                <div class="card-body">
                    <p>{{ $comment->body }}</p>
                    <small>Posted by {{ $comment->user->name }} on {{ $comment->created_at }}</small>
                </div>
            </div>
        @endforeach

        <h5 class="mb-3">Add a comment</h5>
        <form action="{{ route('discussion_comments.store', $discussion_post->id) }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <textarea class="form-control" id="body" name="body" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        

        <hr>

        <h2>Likes</h2>
        <p>{{ $discussion_post->likes->count() }} likes</p>
        <div id="like-section">
            <form action="{{ route('discussion_likes.store', $discussion_post->id) }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-link btn-like p-0"><i class="fa fa-thumbs-up"></i> {{ $discussion_post->likes->count() }}</button>
            </form>
            <form action="{{ route('discussion_likes.destroy', $discussion_post->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-link btn-unlike p-0"><i class="fa fa-thumbs-down"></i> Unlike</button>
            </form>
        </div>
    </div>
</body>
</html>
