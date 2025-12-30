<?php
require_once __DIR__ . '/../includes/init.php';
logout_user();
flash_set('success', 'Logged out successfully.');
redirect(url('index.php'));
