<?php
function exam_custom_taxonomy()
{
  $args_qualification = array(
    'label'        => __('자격종류', 'textdomain'),
    'public'       => true,
    'rewrite'      => false,
    'hierarchical' => true
  );
  register_taxonomy('exam_qualification', 'exam', $args_qualification);

  $args_institution = array(
    'label'        => __('시행기관', 'textdomain'),
    'public'       => true,
    'rewrite'      => false,
    'hierarchical' => true
  );
  register_taxonomy('exam_institution', 'exam', $args_institution);

  $args_category = array(
    'label'        => __('시험종류', 'textdomain'),
    'public'       => true,
    'rewrite'      => false,
    'hierarchical' => true
  );
  register_taxonomy('exam_category', 'exam', $args_category);

  $args_exam = array(
    'label'        => __('자격시험', 'textdomain'),
    'public'       => true,
    'rewrite'      => false,
    'hierarchical' => true
  );
  register_taxonomy('exam_name', 'exam', $args_exam);
}
add_action('init', 'exam_custom_taxonomy');
