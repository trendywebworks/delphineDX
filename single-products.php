<?php
$layout = get_post_meta(get_the_ID(), 'layout_type', true);

switch ($layout) {
    case 'layout-mba':
        get_template_part('template-parts/education/layout-mba');
        break;

    case 'layout-engineering':
        get_template_part('template-parts/education/layout-engineering');
        break;

    case 'layout-medical':
        get_template_part('template-parts/education/layout-medical');
        break;

    default:
        get_template_part('template-parts/education/default');
        break;
}
?>