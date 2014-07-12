@echo OFF.
cls
phpunit --bootstrap="src/autload.php" tests
pause