<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class BaseController extends CI_Controller
{
    public $title = '';

    public function __construct()
    {
        parent::__construct();
    }

    public function _output($content)
    {
        // Load the base template with output content available as $content
        $data['content'] = &$content;
        echo ($this->load->view('partials/base', $data, true));
    }
}
