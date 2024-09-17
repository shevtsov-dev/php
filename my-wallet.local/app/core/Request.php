<?php

namespace Yasha\Wallet\Core;

class Request
{
    private $get = [];
    private $post = [];

    public function __construct()
    {
        $get_key = array_keys($_GET);
        $get_value = array_values($_GET);

        $get_key = array_map('htmlentities', $get_key);//htmlspecialchars //strip_tags
        $get_value = array_map('htmlentities', $get_value);//htmlspecialchars //strip_tags

        foreach ($get_value as $key => $value) {
            $this->get[$get_key[$key]] = $value;
        }
        $this->post = array_map('htmlentities', array_values($_POST));
    }

    /**
     * @return array
     */
    public function getGet()
    {
        return $this->get;
    }

    /**
     * @param array $get
     */
    public function setGet($get)
    {
        $this->get = $get;
    }

    /**
     * @return array
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * @param array $post
     */
    public function setPost($post)
    {
        $this->post = $post;
    }


}