<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Model_Transaksi extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getTcd($trncode)
    {
            return $this->db->query("SELECT * FROM TBLTCD WHERE TRN_CODE like '".$trncode."%'")->RESULT_ARRAY();
    }

    public function getRek($noac)
    {
            return $this->db->query("SELECT SHDBLC.NOAC,SHDBLC.SLDAKHIR,SHDBLC.BKYC,SHDBLC.ALIASNM,RET500.DBGL,RET500.CRGL,RET100.STATMENT FROM SHDBLC INNER JOIN RET100 ON SHDBLC.NOAC = RET100.NOAC
                                                          INNER JOIN RET500 ON SHDBLC.JENIS = RET500.JENIS WHERE SHDBLC.NOAC like '".$noac."%'")->RESULT_ARRAY();
    }

    public function getSlno($slno)
    {
            return $this->db->query("SELECT * FROM TBLCOA WHERE SLNO like '".$slno."%'")->RESULT_ARRAY();
    }

    public function insertRet200($ret200){
        return $this->db->query("INSERT INTO RET200 (NOREF, TGVAL, NOU, TCD, KDCAB, NOAC, NOGL, DOC, NILAI, KET, STATUS, DUPD )
                                VALUES ('".$ret200['NOREF']."', TO_DATE('".$ret200['TGVAL']."','DD/MM/YYYY'), '".$ret200['NOU']."', '".$ret200['TCD']."', '".$ret200['KDCAB']."',
                                        '".$ret200['NOAC']."', '".$ret200['NOGL']."', '".$ret200['DOC']."', '".$ret200['NILAI']."', '".$ret200['KET']."', '".$ret200['STATUS']."', 
                                        SYSDATE ) ");
    }
}