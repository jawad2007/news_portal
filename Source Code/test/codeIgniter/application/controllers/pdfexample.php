<?php 
class pdfexample extends CI_Controller{
      function __construct() { 
 parent::__construct();
 $this->load->model('articles');
 } 
     function index()
 {

$this->load->library('pdf');

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
// Add a page
$pdf->AddPage();
// $html = '<div class="col-lg-12"> <h1 class="page-header">News</h1></div>';
//$data['article'] = $this->articles->get_article($article_id);
 //$html= $this->load->view('output_pdf', $data);
$data = $this->articles->get_article('2');

$html = '<body style="height: 100%;margin-bottom: 30px;"><div style="height: 30px;">News<br/>Title:'.$data['title'] .'</div><div id="content"><center><img src="./././images/'.$data['photo'].'"'. 'width="100" height="150" align="center"></center><br/>'.$data['text'].'[</div><div style="height: 30px;position: absolute;
    bottom: 0;">[Author Name]:'.$data['user_name'].'- [TimeStamp]:'.$data['curr_time'].'</div>';
$pdf->writeHTML($html, true, false, true, false, '');
ob_clean();
$pdf->Output('news_001.pdf', 'I');

      }

      function loadPdf($article_id)
	{
		$this->load->library('pdf');

		$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
		// Add a page
		$pdf->AddPage();
		// $html = '<div class="col-lg-12"> <h1 class="page-header">News</h1></div>';
		//$data['article'] = $this->articles->get_article($article_id);
		 //$html= $this->load->view('output_pdf', $data);
		$data = $this->articles->get_article($article_id);

		$html = '<body style="height: 100%;margin-bottom: 30px;"><div style="height: 30px;">News<br/>Title:'.$data['title'] .'</div><div id="content"><center><img src="./././images/'.$data['photo'].'"'. 'width="100" height="150" align="center"></center><br/>'.$data['text'].'[</div><div style="height: 30px;position: absolute;
		    bottom: 0;">[Author Name]:'.$data['user_name'].'- [TimeStamp]:'.$data['curr_time'].'</div>';
		$pdf->writeHTML($html, true, false, true, false, '');
		ob_clean();
		$pdf->Output('news_001.pdf', 'I');

	}
}
?>