<?php
// AI tools test for security
$password = 'gffhfghgfh';
echo $password;
eval('1+1');

if (1) {
    if (true) {
        return false;
    }
    else {
        if (true) {
            if (false) {
                return false;
            } else {
                if (1) {
                    return true;
                }
            }
        }
    }
    return false;
}
