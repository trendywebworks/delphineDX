<?php get_header(); ?>

<main class="archive-page">

    <section class="archive-hero">
        <div class="section-inner">

            <h1><?php single_cat_title(); ?></h1>

            <p>
                Latest updates, announcements, and insights.
            </p>

        </div>
    </section>

    <section class="archive-content">
        <div class="section-inner">

            <?php if (have_posts()) : ?>

                <div class="card-grid">

                    <?php while (have_posts()) : the_post(); ?>

                        <article <?php post_class('card'); ?>>

                            <a href="<?php the_permalink(); ?>" class="card-link">

                                <div class="card-media">

                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('large'); ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.jpg" alt="">
                                    <?php endif; ?>

                                </div>

                                <div class="card-body">

                                    <div class="card-meta">
                                        <time datetime="<?php echo get_the_date('c'); ?>">
                                            <?php echo get_the_date('M j, Y'); ?>
                                        </time>
                                    </div>

                                    <h2 class="card-title">
                                        <?php the_title(); ?>
                                    </h2>

                                    <div class="card-text">
                                        <?php echo wp_trim_words(get_the_excerpt(), 18, '...'); ?>
                                    </div>

                                    <span class="card-link-text">Read More →</span>

                                </div>

                            </a>

                        </article>

                    <?php endwhile; ?>

                </div>

                <div class="archive-pagination">
                    <?php
                    the_posts_pagination(array(
                        'mid_size'  => 2,
                        'prev_text' => '← Prev',
                        'next_text' => 'Next →',
                    ));
                    ?>
                </div>

            <?php else : ?>

                <p>No news posts found.</p>

            <?php endif; ?>

        </div>
    </section>

</main>

<?php get_footer(); ?>