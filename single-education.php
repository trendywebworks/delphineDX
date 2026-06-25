<?php
$template = get_page_template_slug(get_the_ID());
$slug = get_post_field('post_name', get_the_ID());

if ($slug === 'what-is-sepsis' || $template === 'template-parts/education/what-is-sepsis.php') {
    get_template_part('template-parts/education/what-is-sepsis');
    return;
}

get_template_part('template-parts/education/default');
?>
