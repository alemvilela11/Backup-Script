# Paste the files inside WP root directory
# On MacOS you can create a cron event via 'crontab -e' to execute scripts at certain period of the day.
# Paste the code below to create the events.

# Backup at midnight
# 0 0 * * * php /path/to/your/wordpress/backup.php
# Uncomment the event above if you'd like a bakup to be created every night.


# Restore at 6 AM
0 6 * * * php /path/to/your/wordpress/restore.php
