<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $discussion_post->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>{{ $discussion_post->title }}</h1>
        <p>{{ $discussion_post->body }}</p>
        <p>Posted by {{ $discussion_post->user->name }} on {{ $discussion_post->created_at }}</p>

        <hr>

        <h2>Comments</h2>
        @foreach($discussion_post->comments as $comment)
            <div class="card mb-2">
                <div class="card-body">
                    <p>{{ $comment->body }}</p>
                    <small>Posted by {{ $comment->user->name }} on {{ $comment->created_at }}</small>
                </div>
            </div>
        @endforeach

        <h3>Add a comment</h3>
        <form action="{{ route('discussion_comments.store', $discussion_post->id) }}" method="POST">
            @csrf
            <div class="form-group">
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
