<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanTeller extends CI_Controller {

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
		$this->load->model("model_laporan");
		
	}

	public function index()
	{		
		$data['content'] = "navigasi/dashboard.php";
		$this->load->view('index', $data);
	}

	public function kyclap()
	{		
		$data['menu']    = "menu.php";
		$data['content'] = "laporan/laporan_kyc.php";
		$this->load->view('index', $data);
	}

	public function laporanKyc()
	{		
		$tanggal1=$_GET['tgl1'];
		$tanggal2=$_GET['tgl2'];
		// $tanggal1="2021/02/02";
		// $tanggal2="2023/02/02";
		$rek = ($this->model_laporan->laporanKycHis($tanggal1,$tanggal2));
		print_r(json_encode($rek));
	} 

	public function linechart($tahun)
	{
		$awal_tahun =  $tahun.'-01-01';
		$akhir_tahun =  $tahun.'-12-31';

		$bulan = array("1", "2", "3", "4","5","6","7","8","9","10","11","12");
		$row = $this->model_laporan->nav($awal_tahun,$akhir_tahun);
		$main = [];
		$i=0;
		$x=0;
		for($i=0;$i < count($bulan);$i++){
			if (count($row) > 0 ) {
				if ($bulan[$i] == intval($row[$x]["BULAN"])){
					$total = $row[$x]["TOTAL"];
					if(count($row) - 1 > $x){
						$x++;
					}	
				}else{
					$total = 0;
				}
			} else {
				$total = 0;
			}
			array_push($main,$total);
		}
		print_r(json_encode($main));
	}

}
