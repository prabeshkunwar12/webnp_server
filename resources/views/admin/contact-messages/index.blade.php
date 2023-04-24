@extends('adminlte::page')

@section('content')
<?php @include 'header.blade.php'?>

    <h1>Messages</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Message</th>
                <th>Received At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contactMessages as $message)
                <tr>
                    <td>{{ $message->id }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->message }}</td>
                    <td>{{ $message->created_at }}</td>
                    <td>
                                <form action="{{ route('admin.contact-messages.destroy', $message->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
