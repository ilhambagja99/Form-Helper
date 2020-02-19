<?php
class Cnews extends CI_Controller {
 public function __construct()
 {
 parent::__construct();
 $this->load->model('Mnews');
 $this->load->helper('url_helper');
 }
 public function index()
 {
 $data['news'] = $this->Mnews->get_news();
 $data['title'] = 'News archive';
 $this->load->view('index', $data);
 }
 public function view($slug = NULL)
 {
 $data['news_item'] = $this->Mnews->get_news($slug);

 if (empty($data['news_item']))
 {
 show_404();
 }
 $data['title'] = $data['news_item']['title'];
 $this->load->view('view', $data);
 }

 public function create()
 {
 $this->load->helper('form');
 $this->load->library('form_validation');
 $data['title'] = 'Create a news item';
 $this->form_validation->set_rules('title', 'Title', 'required');
 $this->form_validation->set_rules('text', 'Text', 'required');
 if ($this->form_validation->run() === FALSE)
 {
 $this->load->view('create');
 }
 else
 {
 $this->Mnews->set_news();
 $this->load->view('success');
 }
 }

 public function edit()
 {
 $id = $this->uri->segment(3);

 if (empty($id))
 {
 show_404();
 }

 $this->load->helper('form');
 $this->load->library('form_validation');

 $data['title'] = 'Edit a news item';
 $data['news_item'] = $this->Mnews->get_news_by_id($id);

 $this->form_validation->set_rules('title', 'Title', 'required');
 $this->form_validation->set_rules('text', 'Text', 'required');
 if ($this->form_validation->run() === FALSE)
 {
 $this->load->view('edit', $data);
 }
 else
 {
 $this->Mnews->set_news($id);
 //$this->load->view('news/success');
 redirect( base_url() . 'Cnews');
 }
 }

 public function delete()
 {
 $id = $this->uri->segment(3);

 if (empty($id))
 {
 show_404();
 }

 $news_item = $this->Mnews->get_news_by_id($id);

 $this->Mnews->delete_news($id);
 redirect( base_url() . 'Cnews');
 }
}
