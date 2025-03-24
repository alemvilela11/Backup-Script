<?php
// Define paths
$backup_dir = __DIR__ . '/backups/';
$db_backup_file = $backup_dir . 'database-' . date('Y-m-d') . '.sql';
$files_backup_file = $backup_dir . 'files-' . date('Y-m-d') . '.zip';

// Import the database
exec( 'wp db import ' . escapeshellarg( $db_backup_file ) );

// Unzip the WordPress files
exec( 'unzip -o ' . escapeshellarg( $files_backup_file ) . ' -d ' . escapeshellarg( __DIR__ ) );
