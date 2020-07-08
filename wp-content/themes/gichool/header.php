<html>

<head>
  <?php wp_head() ?>
</head>

<body>
  <nav>
    <a href="<?= home_url() ?>">기출 공작소</a>
    |
    <a href="<?= get_post_type_archive_link('exam') ?>">시험목록</a>
  </nav>

  <hr>