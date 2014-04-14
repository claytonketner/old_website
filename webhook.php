<?php

shell_exec("cd ~/website");
$output = shell_exec("git pull");
echo $output;