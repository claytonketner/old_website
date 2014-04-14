<?php

$output = shell_exec("cd ~ && rm -rf website && git clone git@github.com:claytonketner/website.git");
echo $output;