<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Model_Master extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getRek($noac)
    {
            return $this->db->query("SELECT ret100.noac,shdblc.aliasnm,ret100.kdcab,ret100.cno,
                                     shdblc.jenis,tginp,shdblc.sldakhir,ret100.bkyc,ret100.dupd,ret500.ket 
                                     FROM RET100 INNER JOIN SHDBLC ON RET100.NOAC = SHDBLC.NOAC 
                                                 INNER JOIN RET500 ON RET100.JENIS = RET500.JENIS
                                     WHERE RET100.NOAC like '".$noac."' AND SHDBLC.STATUS = '1'")->RESULT_ARRAY();
    }

    public function allKetKycp()
    {
            return $this->db->query("SELECT * FROM KATEGORI_KYC ORDER BY NILAI_AWAL DESC")->RESULT_ARRAY();
    }

    public function getKatKycp($nilai)
    {
            return $this->db->query("SELECT * FROM KATEGORI_KYC WHERE NILAI_AWAL <= ".$nilai." AND NILAI_AKHIR >= ".$nilai)->RESULT_ARRAY();
    }

    public function deleteKatKyc(){
            return $this->db->query("DELETE FROM KATEGORI_KYC");
    }

    
}


