<?php
/**
 Helper functions to project
 * Something like response(), app()
 */

if ( ! function_exists('app')) {

}

if ( ! function_exists('redirect')) {

}

if ( ! function_exists('response')) {
    /**
     *
     * @param string $content
     * @param int $status
     * @param array $headers
     * @return \Pinapi\Http\ResponseFactory
     */
    function response($content = null, $status = 200, array $headers = [])
    {
        $factory = new Pinapi\Http\ResponseFactory;
        return (is_array($content)) ? $factory->json() : $factory;
    }

}