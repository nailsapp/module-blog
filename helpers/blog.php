<?php

/**
 * This helper brings some convinient functions for interacting with the blog module
 *
 * @package     Nails
 * @subpackage  module-blog
 * @category    Helper
 * @author      Nails Dev Team
 * @link
 */

if (!function_exists('blog_latest_posts')) {

    /**
     * Get latest blog posts
     * @param  integer $limit The maximum number of posts to return
     * @return array
     */
    function blog_latestPosts($limit = 9)
    {
        get_instance()->load->model('blog/blog_post_model');
        return get_instance()->blog_post_model->getLatest($limit);
    }
}

// --------------------------------------------------------------------------

if (!function_exists('blog_posts_with_tag')) {

    /**
     * Gets posts which are in a particular tag
     * @param  mixed   $tagIdSlug      The tag's ID or slug
     * @param  int     $page           The page to render
     * @param  int     $perPage        The number of posts per page
     * @param  array   $data           Data to pass to getCountCommon()
     * @param  boolean $includeDeleted Whether to include deleted posts in the result
     * @return array
     */
    function blog_posts_with_tag($tagIdSlug, $page = null, $perPage = null, $data = null, $includeDeleted = false)
    {
        get_instance()->load->model('blog/blog_post_model');
        return get_instance()->blog_post_model->getWithTag($tagIdSlug, $page, $perPage, $data, $includeDeleted);
    }
}

// --------------------------------------------------------------------------


if (!function_exists('blog_posts_with_category')) {

    /**
     * Gets posts which are in a particular category
     * @param  mixed   $categoryIdSlug The category's ID or slug
     * @param  int     $page           The page to render
     * @param  int     $perPage        The number of posts per page
     * @param  array   $data           Data to pass to getCountCommon()
     * @param  boolean $includeDeleted Whether to include deleted posts in the result
     * @return array
     */
    function blog_posts_with_category($categoryIdSlug, $page = null, $perPage = null, $data = null, $includeDeleted = false)
    {
        get_instance()->load->model('blog/blog_post_model');
        return get_instance()->blog_post_model->getWithCategory($categoryIdSlug, $page, $perPage, $data, $includeDeleted);
    }
}

// --------------------------------------------------------------------------

if (!function_exists('blog_posts_with_association')) {

    /**
     * Get posts with a particular association
     * @param  int $associationIndex The association's index
     * @param  int $associatedId     The Id of the item to be associated with
     * @return array
     */
    function blog_posts_with_association($associationIndex, $associatedId)
    {
        get_instance()->load->model('blog/blog_post_model');
        return get_instance()->blog_post_model->getWithAssociation($associationIndex, $associatedId);
    }
}

// --------------------------------------------------------------------------

if (!function_exists('blogSkinSetting')) {

    /**
     * Retrives a skin setting
     * @param  string $sKey  The key to retrieve
     * @param  string $sType The skin's type
     * @return mixed
     */
    function blogSkinSetting($sKey, $sType)
    {
        $oSkinModel = Factory::model('Skin', 'nailsapp/module-blog');
        return $oSkinModel->getSetting($sKey, $sType);
    }
}
