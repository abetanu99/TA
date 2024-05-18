<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TransTeller extends CI_Controller {

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
		$this->load->model("model_transaksi");		
	}

	public function index()
	{		
		$data['content'] = "navigasi/dashboard.php";
		$this->load->view('index', $data);
	}

	public function trntllr()
	{		
		$data['menu']    = "menu.php";
		$data['content'] = "transaksi/transaksi_teller.php";
		$this->load->view('index', $data);
	}

	public function save_trans_teller()
	{	
		if (isset($_POST["rek_debet"])) {
			$rek = $this->model_transaksi->getRek($_POST["rek_debet"]);
			// echo $rek[0]['SLDAKHIR'];
			// echo $_POST["nilai_debet"];
			$saldo = $rek[0]['SLDAKHIR'] - $_POST["nilai_debet"];
			$update_saldo = array(
				'SLDAKHIR' 	=> $saldo,
				'SLDPAKAI'  => $saldo,
				'SLDBNG'  	=> $saldo
			);
			$this->db->where('NOAC', $_POST["rek_debet"]);
			$this->db->update('SHDBLC', $update_saldo);
		}
		if (isset($_POST["rek_kredit"])) {
			$rekening = $this->model_transaksi->getRek($_POST["rek_kredit"]);
			$saldo = $rekening[0]['SLDAKHIR'] + $_POST["nilai_kredit"];
			$update_saldo = array(
				'SLDAKHIR' 	=> $saldo,
				'SLDPAKAI'  => $saldo,
				'SLDBNG'  	=> $saldo
			);
			$this->db->where('NOAC', $_POST["rek_kredit"]);
			$this->db->update('SHDBLC', $update_saldo);
			if ($rekening[0]['STATMENT'] <> '2' && $rekening[0]['BKYC'] < $_POST["nilai_kredit"] ) {
				$status = "KYC";
			} else {
				$status = "";
			}
		}
		//debet
		$debet = array(
			'NOREF' => $_POST["noref"],
			'TGVAL' => date('d / m / Y'),
			'NOU' => '1',
			'TCD' => $_POST["trncode"],
			'KDCAB' => '001',
			'NOAC' => isset($_POST["rek_debet"]) ? $_POST["rek_debet"] : "",
			'NOGL' => $_POST["hidden_slno_debet"],
			'DOC' => $_POST["doc_debet"],
			'NILAI' => $_POST["nilai_debet"],
			'KET' => $_POST["ket_debet"],
			'STATUS' => $status
		);
		$this->model_transaksi->insertRet200($debet);
		//kredit
		$kredit  = array(
			'NOREF' => $_POST["noref"],
			'TGVAL' => date('d / m / Y'),
			'NOU' => '2',
			'TCD' => $_POST["trncode"],
			'KDCAB' => '001',
			'NOAC' => isset($_POST["rek_kredit"]) ? $_POST["rek_kredit"] : "",
			'NOGL' => $_POST["hidden_slno_kredit"],
			'DOC' => $_POST["doc_kredit"],
			'NILAI' => $_POST["nilai_kredit"],
			'KET' => $_POST["ket_kredit"],
			'STATUS' => $status
		);
		$this->model_transaksi->insertRet200($kredit);
	}

	public function getTcd($trncode = "%")
	{		
		$tcd = ($this->model_transaksi->getTcd($trncode));
		print_r(json_encode($tcd));
	}

	public function getRek($noac = "%")
	{		
		$rek = ($this->model_transaksi->getRek($noac));
		print_r(json_encode($rek));
	}

	public function getSlno($slno = "%")
	{		
		$ledger = ($this->model_transaksi->getSlno($slno));
		print_r(json_encode($ledger));
	}
}
