<?php
require_once __DIR__ . '/db.php';
require_once __DIR__ . '/auth.php';
auth_start_session();

require_once __DIR__ . '/helpers.php';
require_once __DIR__ . '/db_queries.php';

define('BASE_URL', '/project/land-linker/');
