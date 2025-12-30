<?php
require_once __DIR__ . '/../includes/init.php';

if (is_logged_in()) redirect(url('pages/profile.php'));

$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  csrf_check();
  $email = strtolower(post_str('email', 191));
  $pass  = (string)($_POST['password'] ?? '');

  if ($email === '' || $pass === '') $errors[] = "Email and password are required.";

  if (!$errors) {
    $u = db_fetch_user_by_email($conn, $email);
    if (!$u || $u['status'] !== 'active') {
      $errors[] = "Invalid credentials or account inactive.";
    } else if (!password_verify($pass, $u['password_hash'])) {
      $errors[] = "Invalid credentials.";
    } else {
      login_user($u);
      flash_set('success', 'Welcome back!');
      redirect(url('pages/profile.php'));
    }
  }
}

include __DIR__ . '/../includes/header.php';
?>
<div class="container">
  <h2>Sign In</h2>

  <?php if ($errors): ?>
    <div class="card" style="border-left:6px solid #b71c1c; padding:10px 12px;">
      <ul style="margin:0; padding-left:18px;">
        <?php foreach ($errors as $e): ?><li><?= e($e) ?></li><?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>

  <form class="card" method="post" style="padding:16px; margin-top:12px;">
    <input type="hidden" name="csrf_token" value="<?= e(csrf_token()) ?>">
    <label>Email</label>
    <input class="input" type="email" name="email" value="<?= e($_POST['email'] ?? '') ?>" required>

    <label>Password</label>
    <input class="input" type="password" name="password" required>

    <div style="margin-top:12px;">
      <button class="btn btn-primary" type="submit">Login</button>
      <a class="btn btn-outline" href="<?= url('pages/signup.php') ?>">Create account</a>
    </div>
  </form>
</div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
