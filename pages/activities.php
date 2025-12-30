<?php
require_once __DIR__ . '/../includes/init.php';
require_login(url('pages/login.php'));

include __DIR__ . '/../includes/header.php';
?>
<div class="container">
  <h2>Activities</h2>
  <div class="card" style="padding:16px; margin-top:12px;">
    <p>Recent activities will appear here.</p>
  </div>
</div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
