<?php

namespace Mustang;

use Mustang\Core\Handler;
use Mustang\Core\MetaBox;
use Mustang\Core\Mustang;
use Mustang\Core\ShortCode;

class Plugin
{

    /**
     * Define the core functionality of the woocommerce.
     *
     * Check woocommerce activated or not.
     *
     * @since    1.0.0
     */
    public function __construct()
    {
        // do something
    }


    /**
     * Short Description. (use period)
     *
     * Long Description.
     *
     * @since    1.0.0
     */
    public static function instance()
    {
        $instance = new Mustang();
        $instance->run();

        // load ShortCode
        ShortCode::run();

        // load MetaBox
        $metaBox = new MetaBox();
        $metaBox->run();

        // load Handler
        Handler::init();
    }

    /**
     * Short Description. (use period)
     *
     * Long Description.
     *
     * @since    1.0.0
     */
    public static function activate()
    {
        Activator::activate();
    }

    /**
     * Short Description. (use period)
     *
     * Long Description.
     *
     * @since    1.0.0
     */
    public static function deactivate()
    {
        Deactivator::deactivate();
    }
}
