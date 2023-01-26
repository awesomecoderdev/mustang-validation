<?php

namespace Mustang\Module;

/**
 * Represents configuration for a WordPress shortcode in an immutable struct-like form.
 *
 * @since 0.1
 */
class ShortCode
{
    /**
     * @since 0.1
     *
     * @var string
     */
    protected $tag;

    /**
     * @since 0.1
     *
     * @var callable
     */
    protected $callback;

    /**
     * Constructor.
     *
     * @since 0.1
     *
     * @param string   $tag      The shortcode tag.
     * @param callable $callback The function that renders the shortcode. Should return a string containing the
     *                           rendered result.
     */
    public function __construct(string $tag, callable $callback)
    {
        $this->tag = $tag;
        $this->callback = $callback;
    }

    /**
     * @since 0.1
     *
     * @return string
     */
    public function getTag(): string
    {
        return $this->tag;
    }

    /**
     * @since 0.1
     *
     * @return callable
     */
    public function getCallback(): callable
    {
        return $this->callback;
    }

    /**
     * Registers a shortcode to WordPress.
     *
     * @since 0.1
     *
     * @param ShortCode $shortcode The shortcode instance to register.
     */
    public static function register(ShortCode $shortcode)
    {
        add_shortcode($shortcode->tag, $shortcode->callback);
    }
}
