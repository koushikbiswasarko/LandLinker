<?php
require_once __DIR__ . '/../includes/init.php';
require_role([3,4], url('index.php'));

include __DIR__ . '/../includes/header.php';
?>
<div class="container">
  <h2>Employee Directory</h2>
  <div class="card" style="padding:16px; margin-top:12px;">
    <p>This page will manage employees (Manager/Admin only).</p>
  </div>
</div>
<?php include __DIR__ . '/../includes/footer.php'; ?>
