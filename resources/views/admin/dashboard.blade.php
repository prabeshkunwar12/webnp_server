@extends('adminlte::page')

@section('title', 'Admin Dashboard')

@section('content_header')
@stop

@section('content')
<?php @include 'header.blade.php'?>
    <p>Welcome to the admin dashboard!</p>
    <p>Welcome, {{ Auth::user()->name }}</p>

    <a href="{{ route('admin.users.index')}}" class="btn btn-primary">User Management</a>
    
@stop
