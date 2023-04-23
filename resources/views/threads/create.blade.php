@extends('layouts.app')

<head>
    <style>
        /* Header styles */
        header {
          background-color: #333;
          color: #fff;
          padding: 20px;
        }
      
        /* Main container styles */
        .container {
          max-width: 1200px;
          margin: 0 auto;
          padding: 20px;
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
      
        input[type="text"],
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
        }
      
        button[type="submit"]:hover {
          background-color: #0069d9;
          cursor: pointer;
        }
      
        /* Discussion thread styles */
        .thread {
          background-color: #f5f5f5;
          padding: 20px;
          margin-bottom: 20px;
          border-radius: 5px;
        }
      
        .thread h3 {
          font-size: 24px;
          margin-bottom: 10px;
        }
      
        .thread p {
          font-size: 16px;
        }
      
        /* Pagination styles */
        .pagination {
          margin-top: 20px;
        }
      
        .pagination li {
          display: inline-block;
          margin-right: 10px;
        }
      
        .pagination li a {
          display: block;
          padding: 5px 10px;
          background-color: #f5f5f5;
          color: #333;
          border-radius: 5px;
        }
      
        .pagination li a:hover {
          background-color: #ddd;
          color: #333;
        }
      </style>
      <title>Create Discussion Forum</title>
</head>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Create a New Thread</h2>
            <form action="{{ route('threads.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
                </div>
                <div class="form-group">
                    <label for="body">Body:</label>
                    <textarea name="body" id="body" class="form-control" rows="5" required>{{ old('body') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Publish</button>
            </form>
        </div>
    </div>
</div>
@endsection
