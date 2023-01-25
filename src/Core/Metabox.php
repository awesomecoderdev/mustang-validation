<?php

namespace Mustang\Core;

class MetaBox
{
    /**
     * The instacne of the metabox.
     *
     * @since    1.0.0
     * @access   private
     * @var      bool    $instance    The instacne of the metabox.
     */
    private $instance = false;

    /**
     * Define the core functionality of the metabox.
     *
     * Check metabox activated or not.
     *
     * @since    1.0.0
     */
    public function __construct()
    {
        // do something
    }

    /**
     * Define the metabox of the product.
     *
     * @since    1.0.0
     */
    public function post()
    {
        ob_start();
        include_once MUSTANG_PATH . 'backend/views/index.php';
        $output = ob_get_contents();
        ob_end_clean();
        echo $output;
    }

    /**
     * Define the metabox of the page.
     *
     * @since    1.0.0
     */
    public function save_post_metadata($post_id, $post, $update)
    {
        $fields = [
            // "mustang_app_icon",
        ];

        foreach ($fields as $key => $option) {
            if (isset($_POST[$option])) {
                $value = $_POST[$option] ?? "";
                update_post_meta($post_id, $option, $value);
            }
        }

        if (isset($_POST["mustang_app_icon"])) {
            $icon = $_POST["mustang_app_icon"] ?? "";
            if (strpos($icon, site_url("/")) === false) {
                $response = wp_remote_get($icon);
                if (!is_wp_error($response)) {
                    $icon = md5($icon . date("Y_m_d") . time());
                    $upload = wp_upload_bits("$icon.png", null, file_get_contents($_POST["mustang_app_icon"]));
                    $icon = $upload["url"] ?? $icon;
                }
            }
            update_post_meta($post_id, "mustang_app_icon", $icon);
        }
    }

    /**
     * Define the action of the metabox.
     *
     * @since    1.0.0
     */
    public function action()
    {
        // save pages fields
        add_action("save_post_post",  [$this, 'save_post_metadata'], 10, 3);
        // add metabox
        add_action('add_meta_boxes', [$this, 'metabox'], 10, 2);
    }

    /**
     * Define the metabox of the worker manager.
     *
     * @since    1.0.0
     */
    public function metabox($post_type, $post)
    {
        // add post.
        add_meta_box(
            'mustang_app_icon',
            __('Mustang Validation', 'mustang-validation'),
            [$this, 'post'],
            ['post'],
            'normal',
            'high'
        );
    }

    /**
     * Run the loader to execute all of the hooks with woocommerce.
     *
     * @since    1.0.0
     */
    public function run()
    {
        // load all action
        $this->action();
    }
}
