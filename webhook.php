<?php

$output = shell_exec("cd ~/website && git pull");
echo $output;