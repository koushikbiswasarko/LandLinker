<?php
require_once __DIR__ . '/../includes/init.php';

if (is_logged_in()) redirect(url('pages/profile.php'));

$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  csrf_check();

  $first = post_str('first_name', 60);
  $last  = post_str('surname', 60);
  $email = strtolower(post_str('email', 191));
  $phone = post_str('phone', 30);
  $pass  = (string)($_POST['password'] ?? '');

  if ($first === '' || $last === '' || $email === '' || $pass === '') $errors[] = "All required fields must be filled.";
  if ($email && !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Invalid email format.";
  if (strlen($pass) < 6) $errors[] = "Password must be at least 6 characters.";

  if (!$errors) {
    $exists = db_fetch_user_by_email($conn, $email);
    if ($exists) $errors[] = "Email already exists.";
  }

  if (!$errors) {
    $hash = password_hash($pass, PASSWORD_BCRYPT);
    $role_id = 1; // User
    $stmt = $conn->prepare("INSERT INTO users (role_id, first_name, surname, email, phone, password_hash) VALUES (?,?,?,?,?,?)");
    $stmt->bind_param('isssss', $role_id, $first, $last, $email, $phone, $hash);
    $stmt->execute();
    $id = (int)$stmt->insert_id;
    $stmt->close();

    $user = db_fetch_user_by_id($conn, $id);
    login_user($user);
    flash_set('success', 'Account created successfully!');
    redirect(url('pages/profile.php'));
  }
}

include __DIR__ . '/../includes/header.php';
?>
<div class="container">
  <h2>Create Account</h2>

  <?php if ($errors): ?>
    <div class="card" style="border-left:6px solid #b71c1c; padding:10px 12px;">
      <ul style="margin:0; padding-left:18px;">
        <?php foreach ($errors as $e): ?><li><?= e($e) ?></li><?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>

  <form class="card" method="post" style="padding:16px; margin-top:12px;">
    <input type="hidden" name="csrf_token" value="<?= e(csrf_token()) ?>">

    <label>First Name*</label>
    <input class="input" name="first_name" value="<?= e($_POST['first_name'] ?? '') ?>" required>

    <label>Last Name*</label>
    <input class="input" name="surname" value="<?= e($_POST['surname'] ?? '') ?>" required>

    <label>Email*</label>
    <input class="input" type="email" name="email" value="<?= e($_POST['email'] ?? '') ?>" required>

    <label>Phone</label>
    <input class="input" name="phone" value="<?= e($_POST['phone'] ?? '') ?>">

    <label>Password*</label>
    <input class="input" type="password" name="password" required>

    <div style="margin-top:12px;">
      <button class="btn btn-primary" type="submit">Sign Up</button>
      <a class="btn btn-outline" href="<?= url('pages/login.php') ?>">I already have an account</a>
    </div>
  </form>
</div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
