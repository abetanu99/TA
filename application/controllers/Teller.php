<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model("model_login");
		$this->load->model("model_laporan");
		$this->load->model("model_master");
	}

	public function index()
	{		
		if ($this->session->userdata('login') == 'true'){

			$data['rek'] 		= count($this->model_master->getRek("%"));
			$data['totTrans'] 	= count($this->model_laporan->totalTrans('2023-01-01','2023-12-31'));
			$data['totKyc'] 	= count($this->model_laporan->laporanKycHis('2023-01-01','2023-12-31'));
			// $data['rek'] = $this->model_master->getRek("%");
			/////////////////////////////pie chart///////////////////////////////////////
			$pie = $this->model_laporan->pie('2023-01-01','2023-12-31');
			$nilaiKet 	= [];
			$pieKet		= [];
			for($i=0;$i < count($pie);$i++){
				$ket 	= $pie[$i]["KET_KATEGORI"];
				$nilai  =  intval($pie[$i]["TOTAL"]);
				array_push($pieKet,$ket);
				array_push($nilaiKet,$nilai);
			}
			if (!in_array("KECIL", $pieKet)){
				array_push($pieKet,"KECIL");
				array_push($nilaiKet,0);
			} else if (!in_array("SEDANG", $pieKet)){
				array_push($pieKet,"SEDANG");
				array_push($nilaiKet,0);
			} else if (!in_array("BESAR", $pieKet)){
				array_push($pieKet,"BESAR");
				array_push($nilaiKet,0);
			}
			$data['pieKet'] = json_encode($pieKet);
			$data['nilaiKet'] = json_encode($nilaiKet);
			//////////////////////////////////////////////////////////////////////////////

			////////////////////////////////line chart////////////////////////////////////
			$bulan = array("1", "2", "3", "4","5","6","7","8","9","10","11","12");
			$row = $this->model_laporan->nav('2023-01-01','2023-12-31');
			$main = [];
			$i=0;
			$x=0;
			for($i=0;$i < count($bulan);$i++){
				if ($bulan[$i] == intval($row[$x]["BULAN"])){
					$total = $row[$x]["TOTAL"];
					if(count($row) - 1 > $x){
						$x++;
					}	
				}else{
					$total = 0;
				}
				array_push($main,$total);
			}
			$data['arTotal'] = json_encode($main);
			////////////////////////////////////////////////////////////////////////////////
			$data['menu']    = "menu.php";
			$data['content'] = "navigasi/dashboard.php";
			$this->load->view('index', $data);
		}else{
			$this->login();
		}
	}

	public function nav()
	{		
		
		print_r($main);
	}
	public function Login()
	{
		if (isset($_POST['user']) || isset($_POST['pass'])) {
			$row = count($this->model_login->getUser($_POST['user'],$_POST['pass']));
			if ($row > 0){
				$this->session->set_userdata('login','true');
				$this->index();
				return;
			}
		}
        $this->load->view('login');
	}

	public function Logout()
	{
		$this->session->unset_userdata('login');
		$this->login();
	}
}
