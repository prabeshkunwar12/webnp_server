<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">

</head>
<body>
    <?php @include 'header.blade.php'?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Add your navigation items here -->
    </nav>
    <div class="container mt-4">
        <h1>Posts</h1>
        <a href="{{ route('discussion_posts.create') }}" class="btn btn-primary mb-3">Create New Post</a>
        <hr>
        @foreach($discussion_posts as $discussion_post)
            <div class="card mb-4 shadow">
                <div class="card-header">
                    <a href="{{ route('discussion_posts.show', $discussion_post->id) }}" class="text-decoration-none text-dark">{{ $discussion_post->title }}</a>
                </div>
                <div class="card-body">
                    <p>{{ Str::limit($discussion_post->body, 200) }}</p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <small>Posted by {{ $discussion_post->user->name }} on {{ $discussion_post->created_at }}</small>
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

                        @foreach($discussion_posts as $discussion_post)

                        @endforeach
                    </div>                
                </div>
            </div>
        @endforeach
        {{ $discussion_posts->links() }}
    </div>

    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            border-radius: 10px;
        }

        .card-footer {
            background-color: #f8f9fa;
        }

        .btn-like {
            color: #007bff;
        }

        .btn-unlike {
            color: #dc3545;
        }
    </style>

</body>
</html>
