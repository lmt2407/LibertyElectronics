<?php
class Pages extends CI_Controller {
  public function view($page = 'home')
  {
    if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
    {
            // Whoops, we don't have a page for that!
            show_404();
    }

  $this->load->helper('url');
  $data['header'] = $this->load->view('templates/header', NULL, TRUE);
  $data['navigation'] = $this->load->view('templates/navigation', NULL, TRUE);
  $data['footer'] = $this->load->view('templates/footer', NULL , TRUE);
  $data['content'] = $this->load->view('pages/'.$page, NULL , TRUE);
  $this->load->view('templates/layout', $data);
  }
}