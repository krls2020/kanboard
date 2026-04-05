<?php
define('DATA_DIR', __DIR__.DIRECTORY_SEPARATOR.'data');
define('DEBUG', false);
define('LOG_DRIVER', 'stderr');
define('PLUGINS_DIR', __DIR__.DIRECTORY_SEPARATOR.'plugins');
define('CACHE_DIR', DATA_DIR.DIRECTORY_SEPARATOR.'cache');
define('FILES_DIR', DATA_DIR.DIRECTORY_SEPARATOR.'files');
define('DB_DRIVER', 'postgres');
define('DB_USERNAME', getenv('DB_USER'));
define('DB_PASSWORD', getenv('DB_PASSWORD'));
define('DB_HOSTNAME', getenv('DB_HOST'));
define('DB_NAME', getenv('DB_NAME'));
define('DB_PORT', getenv('DB_PORT'));
define('DB_RUN_MIGRATIONS', true);
