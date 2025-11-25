<?php
function write($array)
{
    $file = __DIR__ . "/../data/storage.dat";
    file_put_contents($file, serialize($array));
}

function read()
{
    $file = __DIR__ . "/../data/storage.dat";
    if (file_exists($file)) {
        return unserialize(file_get_contents($file));
    } else {
        $accounts = [];
        $admin = new Account("admin", "12345");
        $accounts[] = $admin;
        return $accounts; // Creates and returns an empty array if the file doesn't exist
    }
}