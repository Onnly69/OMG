<?php

if (!$conn = mysqli_connect('localhost', 'root', '', 'omg')) {
    echo mysqli_connect_error();}