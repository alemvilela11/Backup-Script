<?php
// Define paths
$backup_dir = __DIR__ . '/backups/';
$db_backup_file = $backup_dir . 'database-' . date('Y-m-d') . '.sql';
$files_backup_file = $backup_dir . 'files-' . date('Y-m-d') . '.zip';

// Create backup directory if it doesn't exist
if ( ! file_exists( $backup_dir ) ) {
    mkdir( $backup_dir, 0755, true );
}

// Export the database
exec( 'wp db export ' . escapeshellarg( $db_backup_file ) );

// Zip the WordPress files
exec( 'zip -r ' . escapeshellarg( $files_backup_file ) . ' . -x "backups/*"' );
