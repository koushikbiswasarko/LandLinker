<?php
require_once __DIR__ . '/init.php';
require_role([1], url('pages/login.php'));
?>
<?php

$pageTitle = "User Dashboard";
$activeDash = "dashboard"; // dashboard|project|activities|email

include __DIR__ . '/header.php';
?>

<div class="dash">
  <aside class="dash-side" aria-label="Dashboard sidebar">
    <div class="dash-side__brand">
      <div class="dash-side__badge" aria-hidden="true">LL</div>
      <div>
        <div class="dash-side__title">Land Linker</div>
        <div class="dash-side__subtitle">
          <?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : "Dashboard"; ?>
        </div>
      </div>
    </div>

    <!-- ===== CLEAN SIDEBAR NAVIGATION ===== -->
    <nav class="dash-nav" aria-label="Dashboard navigation">
      <a class="dash-link <?php echo (($activeDash ?? '') === 'dashboard') ? 'is-active' : ''; ?>"
         href="<?= url('pages/user-dashboard.php') ?>">
        <span class="dash-ico" aria-hidden="true">🏠</span>
        <span>Dashboard</span>
      </a>

      <a class="dash-link <?php echo (($activeDash ?? '') === 'project') ? 'is-active' : ''; ?>"
         href="#">
        <span class="dash-ico" aria-hidden="true">📁</span>
        <span>Project</span>
      </a>

      <a class="dash-link <?php echo (($activeDash ?? '') === 'activities') ? 'is-active' : ''; ?>"
         href="<?= url('pages/activities.php') ?>">
        <span class="dash-ico" aria-hidden="true">📌</span>
        <span>Activities</span>
      </a>

      <a class="dash-link <?php echo (($activeDash ?? '') === 'email') ? 'is-active' : ''; ?>"
         href="#">
        <span class="dash-ico" aria-hidden="true">✉️</span>
        <span>Email</span>
      </a>
    </nav>

    <div class="dash-side__foot">
      <a class="btn btn-outline dash-side__btn" href="<?= url('pages/subscription.php') ?>">
        Upgrade Plan
      </a>
      <a class="btn btn-primary dash-side__btn" href="<?= url('pages/logout.php') ?>">
        Log Out
      </a>
    </div>
  </aside>

  <section class="dash-main">
    <div class="dash-top">
      <div>
        <h1 class="dash-h1">
          <?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : "Dashboard"; ?>
        </h1>
        <p class="dash-sub">
          Clean, responsive dashboard layout using pure CSS Grid/Flex.
        </p>
      </div>

      <button class="dash-toggle" type="button" aria-label="Toggle sidebar">☰</button>
    </div>

    <div class="dash-content">
