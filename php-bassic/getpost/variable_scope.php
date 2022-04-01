<?php

// belajar variable scope

// kind of superglobsl variable
// $_get
// $_post
// $_request
// $_session 
// $_cookie
// $_server
// $_env


//contoh variable global
$x = 10;

function tampilx()
{
  global $x;
  echo $x;
}

tampilx();
