<?php

class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('Blog_model');
    }
    public function index()
    {
        $query = $this->Blog_model->getBlogs();
        $data['blogs'] = $query->result_array();
        $this->load->view('blog', $data);
    }

    public function detail($url)
    {
        $query = $this->Blog_model->getSingleBlog($url);
        $data['blog'] = $query->row_array();

        $this->load->view('detail', $data);
    }
}
