@echo off
cd /d C:\Users\chris\Documents\FIELDS
php artisan schedule:run >> NUL 2>&1
exit