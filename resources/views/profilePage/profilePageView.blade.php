<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    	body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}

    </style>
<title>User Profile</title>
</head>
<body>
<?php @include 'header.blade.php'?>
<div class="container">
<div class="main-body">

<nav aria-label="breadcrumb" class="main-breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="/homepage">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">User Profile</li>
</ol>
</nav>

<div class="row gutters-sm">
<div class="col-md-4 mb-3">
<div class="card">
<div class="card-body">
<div class="d-flex flex-column align-items-center text-center">
<img src="imgs/avatar.png" alt="User" class="rounded-circle" width="150">
<div class="mt-3">
<h4><?php echo $user->name ?></h4>


</div>
</div>
</div>
</div>

</div>
<div class="col-md-8">
<div class="card mb-3">
<div class="card-body">
<div class="row">
<div class="col-sm-3">
<h6 class="mb-0">Full Name</h6>
</div>
<div class="col-sm-9 text-secondary">
<?php echo $user->name ?>
</div>
</div>
<hr>
<div class="row">
<div class="col-sm-3">
<h6 class="mb-0">Email</h6>
</div>
<div class="col-sm-9 text-secondary">
<?php echo $user->email ?>
</div>
</div>

<hr>

<div class="row">
<div class="col-sm-3">
<h6 class="mb-0">Password</h6>
</div>
<div class="col-sm-9 text-secondary">

</div>
</div>
<hr>
<div class="row">
<div class="col-sm-12">
<a class="btn btn-info " target="_self" href="{{ route('profile.edit') }}">Edit</a>
</div>
</div>
</div>
</div>
<div class="row gutters-sm">
<div class="col-sm-6 mb-3">
<div class="card h-100">
<div class="card-body">
<h4 class="d-flex align-items-center mb-3">Delete Account</h6>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="">
                Are you sure you want to delete your account?
            </h2>

            <p>
                Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.
            </p>

            <div >
                <input label for="password" value="Password" class="sr-only" />

                <input
                    id="password"
                    name="password"
                    type="password"
                    placeholder="Password"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class=" justify-end">
                <button on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </button>
                <button>
                    {{ __('Delete Account') }}
                </button>
            </div>
        </form>
</div>
</div>
</div>
<div class="col-sm-6 mb-3">
<div class="card h-100">
<div class="card-body">
<h4 class="d-flex align-items-center mb-3">Access Discussion Forum</h6>
<p>Click Here to access the discussion forum and view posts from nurse practioners!</p>
<a class="btn btn-info " target="_self" href="{{ route('threads.index') }}">Click here!</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>