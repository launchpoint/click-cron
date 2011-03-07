<?

map('content', 'cron/:command', 'run', 'cron' );
map('content', 'cron/:command/:lock_name', 'run', 'cron_lock' );