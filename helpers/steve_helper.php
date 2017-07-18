<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function check_login() {
    if (!isset($_SESSION['iduser']))
        show_404();
}
