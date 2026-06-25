<?php
$template = get_page_template_slug(get_the_ID());

switch ($template) {
    case 'what-is-sepsis.php':
        get_template_part('template-parts/education/what-is-sepsis');
        break;

    default:
        get_template_part('template-parts/education/default');
        break;
}
?>