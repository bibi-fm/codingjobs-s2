<?php

$original = '1234';
$hashPassword = '$2y$10$huKGLX/dgChZblwhplA2VumswkTcYSVHFg2N0nsnqu.xaC0g2Tqc2';

// Check if password match
if (password_verify($original, $hashPassword)) {
    echo 'Password matches !';
}
