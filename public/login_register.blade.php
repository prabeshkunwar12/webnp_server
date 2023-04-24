<?php use Illuminate\Support\Facades\Auth; ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl7/1L_dstPt8Wh6v/2sQ3j6mgDp0J3f3zF3gXz0vi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="auth">
        <?php if (Auth::check()): ?>
            <form method="POST" action="<?php echo route('logout'); ?>">
                <?php echo csrf_field(); ?>
                <a href="<?php echo route('logout'); ?>" onclick="event.preventDefault(); this.closest('form').submit();">
                    Log Out
                </a>
            </form>
        <?php else: ?>
            <a class="nav-link" href="/login">Login</a>
            <a class="nav-link" href="/register">Register</a>
        <?php endif; ?>
    </div>
  </body>
</html>
