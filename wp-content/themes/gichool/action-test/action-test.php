<?php 
require 'action-init.php';
require 'action-custom.php';

echo 1; 
echo '<br>';
echo 2; 
echo '<br>';
echo 3; 
echo '<br>';
echo 4; 
echo '<br>';
do_action('5befroe');
echo 5; 
echo '<br>';
do_action('5after');
do_action('6before');
echo 6; 
echo '<br>';
echo 7; 
echo '<br>';
echo 8; 
echo '<br>';
echo 9; 
echo '<br>';
echo 10; 
echo '<br>';