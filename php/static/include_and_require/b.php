<?php

// The script will continue even if this is missing.
include 'does_not_exist.php';


// The script will produce a fatal error if this is missing.
require 'header.php';
// - require(): Failed opening required 'filename.php'
//      (include_path='.:/usr/share/php')

echo "<p>Ran b.php<p>\n";
