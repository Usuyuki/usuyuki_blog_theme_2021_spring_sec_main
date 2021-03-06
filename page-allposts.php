<?php get_header(); ?>

<!-- タイトルの読み込み -->
<div class="entry-header flex justify-center my-16">
    <h1 class="text-center text-3xl two-square kiwi-maru h2-bou inline ">全記事一覧
    </h1>

</div>

<!-- 本文の読み込み -->
<div class="flex justify-center wrap mt-8 flex-wrap">
    <?php $args=array(
            'numberposts'=>-1,
            'order' => 'DESC'

            );
            $customPost=get_posts($args);
            if($customPost):
                foreach($customPost as $post):
                    // setup_postdata($post):
            ?>

    <?php         
    if(wp_is_mobile()){
            get_template_part( 'template/article/article_card_sp' ); 

        }else{
            get_template_part( 'template/article/article_card_pc' ); 
        } ?>
    <?php endforeach;
        endif; ?>

</div>

<?php get_footer(); ?>