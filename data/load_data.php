<?php
$db = new PDO('sqlite:' . realpath(__DIR__) . '/blog.db');
$fh = fopen(__DIR__ . '/schema.sql', 'r');
while ($line = fread($fh, 409)) {
    $db->exec($line);
}
fclose($fh);