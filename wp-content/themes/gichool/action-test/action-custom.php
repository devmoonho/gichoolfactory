<?php
add_action('5before', function () {
  echo '4.5';
  echo '<br>';
});

add_action('5after', function () {
  echo '5.5';
  echo '<br>';
});

add_action('6before', function () {
  foreach (range(6.01, 6.99, 0.01) as $number) {
    echo $number;
    echo '<br>';
  }
});
