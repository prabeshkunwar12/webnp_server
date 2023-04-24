<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Profile</title>
<meta charset="utf-8">


<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    	body{
    background: #f7f7ff;
    margin-top:20px;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid transparent;
    border-radius: .25rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
}
.me-2 {
    margin-right: .5rem!important;
}
    </style>
    <?php @include 'header.blade.php'?>
</head>
<body>
<div class="container">
<div class="main-body">
<div class="row">
<div class="col-lg-4">
<div class="card">
<div class="card-body">
<div class="d-flex flex-column align-items-center text-center">
<img src="imgs/avatar.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
<div class="mt-3">
<div class="mt-3">
<h4><?php echo $user->name ?></h4>
<p class="text-secondary mb-1"><?php echo $user->getRoleNames()[0]; ?></p>
</div>
</div>
</div>


</div>
</div>
</div>
<div class="col-lg-8">
<div class="card">
<div class="card-body">
<form method="post" action="{{ route('profile.update') }}">
    @csrf
    @method('patch')
    
<div class="row mb-3">
<div class="col-sm-3">
<h6 class="mb-0">Full Name</h6>
</div>
<div class="col-sm-9 text-secondary">
<div>
            <input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class=" block" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            
        </div>
</div>
</div>
<div class="row mb-3">
<div class="col-sm-3">
<h6 class="mb-0">Email</h6>
</div>
<div class="col-sm-9 text-secondary">
<div>
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="email" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
</div>
</div>
</div>



<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-9 text-secondary">
<div class="flex items-center gap-4">
            <button>{{ __('Save') }}</button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}
                </p>
            @endif
        </div>
</div>
</div>
</form>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="card">
<form method="post" action="{{ route('password.update') }}" >
        @csrf
        @method('put')
<div class="card-body">
<h5 class="d-flex align-items-center mb-3">Update Password</h5>
<div>
            <x-input-label for="current_password" :value="__('Current Password')" />
            <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password" :value="__('New Password')" />
            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <button>{{ __('Save') }}</button>
            
            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>