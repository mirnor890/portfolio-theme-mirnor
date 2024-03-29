<?php
function project_post_type() {

    /* Set up the arguments for the post type. */
    $args = array(

        /**
         * Whether the post type should be used publicly via the admin or by front-end users.  This
         * argument is sort of a catchall for many of the following arguments.  I would focus more
         * on adjusting them to your liking than this argument.
         */
        'public'              => true, // bool (default is FALSE)

        /**
         * Whether queries can be performed on the front end as part of parse_request().
         */
        'publicly_queryable'  => true, // bool (defaults to 'public').

        /**
         * Whether to exclude posts with this post type from front-end search results.
         */
        'exclude_from_search' => false, // bool (defaults to 'public')

        /**
         * Whether individual post type items are available for selection in navigation menus.
         */
        'show_in_nav_menus'   => true, // bool (defaults to 'public')

        /**
         * Whether to generate a default UI for managing this post type in the admin. You'll have
         * more control over what's shown in the admin with the other arguments.  To build your
         */
        'show_ui'             => true, // bool (defaults to 'public')

        /**
         * Whether to show post type in the admin menu. 'show_ui' must be true for this to work.
         *The admin bar att the top.
         */
        'show_in_menu'        => true, // bool (defaults to 'show_ui')

        /**
         * Whether to make this post type available in the WordPress admin bar. The admin bar adds
         * a link to add a new post type item.
         */
        'show_in_admin_bar'   => true, // bool (defaults to 'show_in_menu')

        /**
         * The position in the menu order the post type should appear. 'show_in_menu' must be true
         * for this to work.
         *Where DO I WANT IT IN MY MENU
         */
        'menu_position'       => 5, // int (defaults to 25 - below comments)

       
    
        'menu_icon'           => 'dashicons-portfolio', // string (defaults to use the post icon)

        /**
         * Whether the posts of this post type can be exported via the WordPress import/export plugin
         * or a similar plugin. NEVER MIND
         */
        'can_export'          => true, // bool (defaults to TRUE)

        /**
         * Whether to delete posts of this type when deleting a user who has written posts.
         */
        'delete_with_user'    => false, // bool (defaults to TRUE if the post type supports 'author')

        /**
         * Whether this post type should allow hierarchical (parent/child/grandchild/etc.) posts.
         */
        'hierarchical'        => false, // bool (defaults to FALSE)

        /**
         * Whether the post type has an index/archive/root page like the "page for posts" for regular
         * posts. If set to TRUE, the post type name will be used for the archive slug.  You can also
         * set this to a string to control the exact name of the archive slug. (site.com/projects)
         */
        'has_archive'         => 'projects', // ?project= website   bool|string (defaults to FALSE)

        /**
         * Sets the query_var key for this post type. If set to TRUE, the post type name will be used.
         * You can also set this to a custom string to control the exact key.
         */
        'query_var'           => 'project', // bool|string (defaults to TRUE - post type name)

        /**
         * A string used to build the edit, delete, and read capabilities for posts of this type. You
         * can use a string or an array (for singular and plural forms).  The array is useful if the
         * plural form can't be made by simply adding an 's' to the end of the word.  For example,
         * array( 'box', 'boxes' ).
         *IF YOU CHANGE THIS, DONT, HAVE IT TO POST. YOU WILL NOT BE ABLE TO CREATE A NEW PROJECT IF YOU WRITE SOMETHING ELSE.
         */
        'capability_type'     => 'post', // string|array (defaults to 'post')

        /**
         * Whether WordPress should map the meta capabilities (edit_post, read_post, delete_post) for
         * you.  If set to FALSE, you'll need to roll your own handling of this by filtering the
         * 'map_meta_cap' hook.
         */
        'map_meta_cap'        => true, // bool (defaults to FALSE)

        /**
         * How the URL structure should be handled with this post type.  You can set this to an
         * array of specific arguments or true|false.  If set to FALSE, it will prevent rewrite
         * rules from being created.
         *If you want the URL to be rewritten, more userfriendly. 
         */
        'rewrite' => array(
            'slug'                  => 'project',
            'with_front'            => false,
            'pages'                 => true,
            'feeds'                 => false,
        ),

        /**
         * What WordPress features the post type supports.  Many arguments are strictly useful on
         * the edit post screen in the admin.  However, this will help other themes and plugins
         * decide what to do in certain situations.  You can pass an array of specific features or
         * set it to FALSE to prevent any features from being added.  You can use
         * add_post_type_support() to add features or remove_post_type_support() to remove features
         * later.  The default features are 'title' and 'editor'.
         */
        'supports' => array(

            /* Post titles ($post->post_title). */
            'title',

            /* Post content ($post->post_content). */
            'editor',

            /* Post author ($post->post_author). */

            'author',

            /* Featured images (the user's theme must support 'post-thumbnails'). */
            'thumbnail',


        ),

        /**
         * Labels used when displaying the posts in the admin and sometimes on the front end.  These
         * labels do not cover post updated, error, and related messages.  You'll need to filter the
         * 'post_updated_messages' hook to customize those.
         */
        'taxonomies'            => array( 'project_skill', ' project_type' ),
        'labels' => array(
            'name'               => __( 'Projects',                   'project-textdomain' ),
            'singular_name'      => __( 'Project',                    'project-textdomain' ),
            'menu_name'          => __( 'Projects',                   'project-textdomain' ),
            'name_admin_bar'     => __( 'Projects',                   'project-textdomain' ),
            'add_new'            => __( 'Add New',                    'project-textdomain' ),
            'add_new_item'       => __( 'Add New Project',            'project-textdomain' ),
            'edit_item'          => __( 'Edit Project',               'project-textdomain' ),
            'new_item'           => __( 'New Project',                'project-textdomain' ),
            'view_item'          => __( 'View Project',               'project-textdomain' ),
            'search_items'       => __( 'Search Projects',            'project-textdomain' ),
            'not_found'          => __( 'No projects found',          'project-textdomain' ),
            'not_found_in_trash' => __( 'No projects found in trash', 'project-textdomain' ),
            'all_items'          => __( 'All Projects',               'project-textdomain' ),
        )
    );

    /* Register the post type. Another function here 'post_type_name' $settings)*/
    register_post_type( 
        'project', // Post type name. Max of 20 characters. Uppercase and spaces not allowed.
        $args      // Arguments for post type.
    );
}

/* Register custom post types on the 'init' hook. */
add_action( 'init', 'project_post_type' );
?>