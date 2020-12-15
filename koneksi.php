<?php

function koneksi()
{
    return mysqli_connect("localhost", "root", "", "mahasiswa");
}
