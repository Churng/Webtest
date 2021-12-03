<?php
    // 網站標題
    add_theme_support( 'title-tag' );

    // 引入整理好的boostrap
    require_once( get_parent_theme_file_path( '/inc/boostrap5.php' ) );

    // 開啟wp預設的文章內容使用
    add_theme_support( 'post-formats', array(
        'image',
        'link',
        'aside',
        'status'
    ) )

    /**
     * 新增活動頁
     * 我先隱起來，打開時本機會報：此網站發生重大錯誤
     */

    // add_action( 'init', 'create_my_post_types' );

    // function create_my_post_types() {
    //   register_post_type( 'product',
    //     array(
    //       'labels' => array( 
    //         'name' => __( 'Products' ), 
    //       ),
    //       'public' => true,
    //       'supports' => array(
    //         'title',
    //         'editor',
    //         'thumbnail',
    //         'post-formats',
    //       ),
    //     )
    //   );
    // }
  
    // add_theme_support( 'post-thumbnails' );

?>