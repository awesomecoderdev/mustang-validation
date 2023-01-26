<?php

if (!function_exists('config')) {
    /**
     * Get / set the specified configuration value.
     *
     * If an array is passed as the key, we will assume you want to set an array of values.
     *
     * @param  array|string|null  $key
     * @param  mixed  $default
     */
    function config($key = null, $default = null)
    {
        $config = explode(".", strtolower(preg_replace("/[^a-zA-Z0-9\_.-]+/", "", $key)));
        $file = isset($config[0]) ? $config[0] : "mustang";
        $option = isset($config[1]) ? $config[1] : false;

        if (!file_exists(__DIR__ . "/../config/$file.php")) {
            return $default;
        }

        $options = include(__DIR__ . "/../config/$file.php");

        if (!is_array($options) || is_null($key)) {
            return $default;
        }
        if ($option) {
            if (isset($options[$option])) {
                return $options[$option];
            }
        } else {
            return $options;
        }

        return $default;
    }
}
