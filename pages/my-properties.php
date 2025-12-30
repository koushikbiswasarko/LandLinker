<?php
require_once __DIR__ . '/../includes/init.php';

// user must be logged in
require_login(url('pages/login.php'));

$u = current_user();
$user_id = (int)$u['id'];

include __DIR__ . '/../includes/header.php';
?>

<div class="container">
  <h2>My Properties</h2>

  <div class="card" style="padding:16px; margin-top:12px;">
    <p>This page will show all properties added by you.</p>

    <p style="margin-top:10px; color:#666;">
      (Property listing integration with database can be added next.)
    </p>

    <div style="margin-top:14px;">
      <a class="btn btn-primary" href="<?= url('pages/add-property.php') ?>">
        Add New Property
      </a>
    </div>
  </div>
</div>

<?php include __DIR__ . '/../includes/footer.php'; ?>
