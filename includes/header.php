<?php
require_once __DIR__ . '/init.php';

// Flash messages (safe)
$flash_success = flash_get('success') ?? null;
$flash_error   = flash_get('error') ?? null;

$u = current_user();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Land Linker</title>
  <link rel="stylesheet" href="<?= url('css/style.css') ?>" />
</head>
<body>

<header class="site-header">
  <div class="container header-inner">
    <a class="brand" href="<?= url('index.php') ?>">
      <span class="brand-name">Land Linker</span>
    </a>

    <nav class="nav" id="siteNav">
      <a href="<?= url('index.php') ?>">Home</a>
      <a href="<?= url('pages/map-view.php') ?>">Map View</a>
      <a href="<?= url('pages/deal-statistics.php') ?>">Deal Statistics</a>
      <a href="<?= url('pages/vision.php') ?>">Vision</a>
      <a href="<?= url('pages/about.php') ?>">About Us</a>

      <?php if (!is_logged_in()): ?>
        <a href="<?= url('pages/login.php') ?>">Sign In</a>
        <a class="btn btn-primary" href="<?= url('pages/signup.php') ?>">Sign Up</a>
      <?php else: ?>

        <!-- Common (all logged in) -->
        <a href="<?= url('pages/my-properties.php') ?>">My Properties</a>
        <a href="<?= url('pages/profile.php') ?>">Profile</a>

        <!-- Role dashboards -->
        <?php if (is_admin()): ?>
          <a href="<?= url('pages/admin-dashboard.php') ?>">Admin Dashboard</a>
        <?php elseif (is_manager()): ?>
          <a href="<?= url('pages/manager-dashboard.php') ?>">Manager Dashboard</a>
        <?php elseif (is_employee()): ?>
          <a href="<?= url('pages/employee-dashboard.php') ?>">Dashboard</a>
        <?php else: ?>
        <a href="<?= url('pages/user-dashboard.php') ?>">Dashboard</a>
        <?php endif; ?>

        <a href="<?= url('pages/logout.php') ?>">Logout</a>
      <?php endif; ?>
    </nav>
  </div>
</header>

<main class="page">
  <div class="container" style="padding-top:14px;">

    <?php if (!empty($flash_success)): ?>
      <div class="card" style="border-left:6px solid #2e7d32; padding:10px 12px; margin-bottom:10px;">
        <?= e($flash_success) ?>
      </div>
    <?php endif; ?>

    <?php if (!empty($flash_error)): ?>
      <div class="card" style="border-left:6px solid #b71c1c; padding:10px 12px; margin-bottom:10px;">
        <?= e($flash_error) ?>
      </div>
    <?php endif; ?>

  </div>
