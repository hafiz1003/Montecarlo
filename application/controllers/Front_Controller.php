<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front_Controller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function tentang(){
		$data['judul'] = 'Tentang Aplikasi';

		$this->load->view('front/templates/header', $data);
		$this->load->view('front/about', $data);
		$this->load->view('front/templates/footer', $data);
	}

	public function index(){
		$data['judul'] = 'Aplikasi Prediksi Monte Carlo';
		$this->load->view('front/templates/header', $data);
		$this->load->view('front/index', $data);
		$this->load->view('front/templates/footer', $data);
	}

	public function hitung(){

		$this->form_validation->set_rules('per1', 'Permintaan 1', 'trim|required|numeric');
		$this->form_validation->set_rules('per2', 'Permintaan 2', 'trim|required|numeric');
		$this->form_validation->set_rules('per3', 'Permintaan 3', 'trim|required|numeric');
		$this->form_validation->set_rules('per4', 'Permintaan 4', 'trim|required|numeric');
		$this->form_validation->set_rules('per5', 'Permintaan 5', 'trim|required|numeric');
		$this->form_validation->set_rules('per6', 'Permintaan 6', 'trim|required|numeric');
		$this->form_validation->set_rules('per7', 'Permintaan 7', 'trim|required|numeric');
		$this->form_validation->set_rules('per8', 'Permintaan 8', 'trim|required|numeric');
		$this->form_validation->set_rules('per9', 'Permintaan 9', 'trim|required|numeric');
		$this->form_validation->set_rules('per10', 'Permintaan 10', 'trim|required|numeric');

		$this->form_validation->set_rules('fr1', 'Frekuensi 1', 'trim|required|numeric');
		$this->form_validation->set_rules('fr2', 'Frekuensi 2', 'trim|required|numeric');
		$this->form_validation->set_rules('fr3', 'Frekuensi 3', 'trim|required|numeric');
		$this->form_validation->set_rules('fr4', 'Frekuensi 4', 'trim|required|numeric');
		$this->form_validation->set_rules('fr5', 'Frekuensi 5', 'trim|required|numeric');
		$this->form_validation->set_rules('fr6', 'Frekuensi 6', 'trim|required|numeric');
		$this->form_validation->set_rules('fr7', 'Frekuensi 7', 'trim|required|numeric');
		$this->form_validation->set_rules('fr8', 'Frekuensi 8', 'trim|required|numeric');
		$this->form_validation->set_rules('fr9', 'Frekuensi 9', 'trim|required|numeric');
		$this->form_validation->set_rules('fr10', 'Frekuensi 10', 'trim|required|numeric');

		if ($this->form_validation->run() == false) {
			$data['judul'] = 'Aplikasi Prediksi Monte Carlo';
			$this->load->view('front/templates/header', $data);
			$this->load->view('front/index', $data);
			$this->load->view('front/templates/footer', $data);

		}else{
			$data['judul'] = 'Hasil Probabilitas Distribusi';
			$permin1 = $this->input->post('per1');
			$permin2 = $this->input->post('per2');
			$permin3 = $this->input->post('per3');
			$permin4 = $this->input->post('per4');
			$permin5 = $this->input->post('per5');
			$permin6 = $this->input->post('per6');
			$permin7 = $this->input->post('per7');
			$permin8 = $this->input->post('per8');
			$permin9 = $this->input->post('per9');
			$permin10 = $this->input->post('per10');

			$frek1 = $this->input->post('fr1');
			$frek2 = $this->input->post('fr2');
			$frek3 = $this->input->post('fr3');
			$frek4 = $this->input->post('fr4');
			$frek5 = $this->input->post('fr5');
			$frek6 = $this->input->post('fr6');
			$frek7 = $this->input->post('fr7');
			$frek8 = $this->input->post('fr8');
			$frek9 = $this->input->post('fr9');
			$frek10 = $this->input->post('fr10');

			$total = $frek1+$frek2+$frek3+$frek4+$frek5+$frek6+$frek7+$frek8+$frek9+$frek10;

			$proba['pr1'] = number_format($frek1/$total,2);
			$proba['pr2'] = number_format($frek2/$total,2);
			$proba['pr3']= number_format($frek3/$total,2);
			$proba['pr4']= number_format($frek4/$total,2);
			$proba['pr5']= number_format($frek5/$total,2);
			$proba['pr6']= number_format($frek6/$total,2);
			$proba['pr7']= number_format($frek7/$total,2);
			$proba['pr8']= number_format($frek8/$total,2);
			$proba['pr9']= number_format($frek8/$total,2);
			$proba['pr10']= number_format($frek10/$total,2);

			$a = 0;
			$b = $a+$frek1/$total;
			$c = $b+$frek2/$total;
			$d = $c+$frek3/$total;
			$e = $d+$frek4/$total;
			$f = $e+$frek5/$total;
			$g = $f+$frek6/$total;
			$h = $g+$frek7/$total;
			$i = $h+$frek8/$total;
			$j = $i+$frek9/$total;
			$proba['pk1'] = number_format($a+$frek1/$total,2);
			$proba['pk2'] = number_format($b+$frek2/$total,2);
			$proba['pk3'] = number_format($c+$frek3/$total,2);
			$proba['pk4'] = number_format($d+$frek4/$total,2);
			$proba['pk5'] = number_format($e+$frek5/$total,2);
			$proba['pk6'] = number_format($f+$frek6/$total,2);
			$proba['pk7'] = number_format($g+$frek7/$total,2);
			$proba['pk8'] = number_format($h+$frek8/$total,2);
			$proba['pk9'] = number_format($i+$frek9/$total,2);
			$proba['pk10'] = number_format($i+$frek10/$total,2);

			$pkm1 = number_format($i+$frek10/$total,2,'','.');
			$total1 = number_format($pkm1);

			$proba['acak1'] = number_format(rand(0,$total1));
			$proba['acak2'] = number_format(rand(0,$total1));
			$proba['acak3'] = number_format(rand(0,$total1));
			$proba['acak4'] = number_format(rand(0,$total1));
			$proba['acak5'] = number_format(rand(0,$total1));
			$proba['acak6'] = number_format(rand(0,$total1));
			$proba['acak7'] = number_format(rand(0,$total1));
			$proba['acak8'] = number_format(rand(0,$total1));
			$proba['acak9'] = number_format(rand(0,$total1));
			$proba['acak10'] = number_format(rand(0,$total1));

			$this->load->view('front/templates/header', $data);
			$this->load->view('front/hasil', $proba, $data);
			$this->load->view('front/templates/footer', $data);
		}
	}

}

/* End of file Front_Controller.php */
/* Location: ./application/controllers/Front_Controller.php */
