<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Feed extends CI_Controller {
    public function __construct(){  
        parent::__construct();
        //load xml helper and text helper
        $this->load->helper(array('xml'));
        // load the models
        $this->load->model('articles');
    }
    public function index()
    {
   // set feed Name will display at title area and page top
       $this->data['feed_name'] = 'bbc.com';
       // set page encoding
       $this->data['encoding'] = 'utf-8';
       // set feed url
       $this->data['feed_url'] = 'http://bbc.com/feed';
       // set page language
       $this->data['page_language'] = 'en';
       // set page Description
       $this->data['page_description'] = 'Today Latest News';
       // set author email
       $this->data['creator_email'] = 'jawadsmail@gmail.com';
       // get the feeds  from database through model method called get_feeds()
       $this->data['query'] = $this->view_table();;
       // this line is very important, this will let browser to display XML format output  
       header("Content-Type: application/rss+xml");
       $this->load->view('feed_view',$this->data);
    }

    public function view_table(){
      $result = $this->articles->show_all_news();
        if ($result != false) {
        return $result;
        } else {
        return 'Database is empty !';
      }
  }
}
