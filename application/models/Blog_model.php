<?php

class Blog_model extends CI_Model
{
    public function getBlogs()
    {
        return $this->db->get("blog");
    }

    public function getSingleBlog($url)
    {
        $this->db->where('url', $url);
        return $this->db->get('blog');
    }
}
