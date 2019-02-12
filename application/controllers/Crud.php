<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud extends BaseController
{
    public $title = 'CodeIgniter';

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *     - or -
     *         http://example.com/index.php/welcome/index
     *     - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
        $this->load->helper('url');
        $this->load->helper('form');
    }

    public function index()
    {
        $data['users']       = $this->users_model->retrieve();
        $data['total_users'] = $this->users_model->total_users();

        $this->slice->view('crud.index', $data);
        // $this->load->view('crud/index', $data);
    }

    public function create()
    {
        $this->slice->view('crud/create');
    }

    public function store()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if (!$this->form_validation->run()) {
            $this->slice->view('crud/create');
        }

        $this->users_model->insert();
        redirect('/crud');
    }

    public function show($id)
    {
        $data['user'] = $this->users_model->retrieve($id);

        $this->slice->view('crud/show', $data);
    }

    public function edit($id)
    {
        $data['user'] = $this->users_model->retrieve($id);

        $this->slice->view('crud/edit', $data);
    }

    public function update()
    {
        $this->users_model->update();
        redirect('crud/show/' . $this->input->post('id'));
    }

    public function destroy($id)
    {
        $this->users_model->delete($id);
        redirect('/crud/index');
    }
}
