<?php


// Check if password match
if (password_verify('1234', '$2y$10$huKGLX/dgChZblwhplA2VumswkTcYSVHFg2N0nsnqu.xaC0g2Tqc2')) {
    echo 'Password matches !';
}
