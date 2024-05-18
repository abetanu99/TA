<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Model_Laporan extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function laporanKycHis($tanggal1,$tanggal2)
    {
            return $this->db->query("SELECT * FROM (SELECT ret200.noref, ret200.tgval, ret200.noac, ret200.nilai, ret200.ket,
                ret200.doc, shdblc.aliasnm, kategori_kyc.ket ket_kategori, to_char(ret200.tgval,'DD/MM/YYYY') TANGGAL,
                ((ret200.nilai - shdblc.bkyc)/shdblc.bkyc)*100 persentase
            FROM ret200 INNER JOIN ret100 ON ret200.noac = ret100.noac
                        INNER JOIN shdblc ON ret100.noac = shdblc.noac
                        LEFT OUTER JOIN kategori_kyc ON nilai_awal <= ((ret200.nilai - shdblc.bkyc)/shdblc.bkyc)*100 AND nilai_akhir >= ((ret200.nilai - shdblc.bkyc)/shdblc.bkyc)*100
            WHERE doc = 'C' AND statment <> '2' AND ret200.status LIKE '%KYC%'           
            UNION ALL
            SELECT rethhis200.noref, rethis200.dupd tgval, rethis200.noac, rethis200.nilai,
                    rethis200.ket, rethis200.doc, SHDBLC.ALIASNM, KATEGORI_KYC.KET KET_KATEGORI, to_char(rethis200.dupd,'DD/MM/YYYY') TANGGAL,
                    ((rethis200.nilai - shdblc.bkyc)/shdblc.bkyc)*100 persentase
            FROM rethhis200 INNER JOIN rethis200 ON rethhis200.noref = rethis200.noref
                            INNER JOIN ret100 ON rethis200.noac = ret100.noac
                            INNER JOIN shdblc ON ret100.noac = shdblc.noac
                            LEFT OUTER JOIN KATEGORI_KYC ON NILAI_AWAL <= ((rethis200.nilai - shdblc.bkyc)/shdblc.bkyc)*100  AND NILAI_AKHIR >= ((rethis200.nilai - shdblc.bkyc)/shdblc.bkyc)*100
            WHERE doc = 'C' AND statment <> '2' AND rethhis200.jnsovr LIKE '%KYC%')
            WHERE TGVAL >= to_date('".$tanggal1."','yyyy-mm-dd') 
                AND TGVAL <= to_date('".$tanggal2."','yyyy-mm-dd')  ")->RESULT_ARRAY();
    }
    public function totalTrans($tanggal1,$tanggal2)
    {
        return $this->db->query("select * from (select noref,tgval from ret200
                                                union all
                                                select noref,dupd tgval from rethis200) WHERE TGVAL >= to_date('".$tanggal1."','yyyy-mm-dd') 
                                                                AND TGVAL <= to_date('".$tanggal2."','yyyy-mm-dd')")->RESULT_ARRAY();
    }
    
    public function nav($tanggal1,$tanggal2)
    {
            return $this->db->query("SELECT BULAN,COUNT(*) TOTAL FROM (SELECT to_char(ret200.tgval,'MM') BULAN,ret200.tgval
            FROM ret200 INNER JOIN ret100 ON ret200.noac = ret100.noac
                        INNER JOIN shdblc ON ret100.noac = shdblc.noac
                        LEFT OUTER JOIN kategori_kyc ON nilai_awal <= ((ret200.nilai - shdblc.bkyc)/shdblc.bkyc)*100 AND nilai_akhir >= ((ret200.nilai - shdblc.bkyc)/shdblc.bkyc)*100
            WHERE doc = 'C' AND statment <> '2' AND ret200.status LIKE '%KYC%'           
            UNION ALL
            SELECT to_char(rethis200.dupd,'MM') BULAN,rethis200.dupd tgval
            FROM rethhis200 INNER JOIN rethis200 ON rethhis200.noref = rethis200.noref
                            INNER JOIN ret100 ON rethis200.noac = ret100.noac
                            INNER JOIN shdblc ON ret100.noac = shdblc.noac
                            LEFT OUTER JOIN KATEGORI_KYC ON NILAI_AWAL <= ((rethis200.nilai - shdblc.bkyc)/shdblc.bkyc)*100  AND NILAI_AKHIR >= ((rethis200.nilai - shdblc.bkyc)/shdblc.bkyc)*100
            WHERE doc = 'C' AND statment <> '2' AND rethhis200.jnsovr LIKE '%KYC%')
            WHERE TGVAL >= to_date('".$tanggal1."','yyyy-mm-dd') AND TGVAL <= to_date('".$tanggal2."','yyyy-mm-dd')  GROUP BY BULAN ORDER BY BULAN  ")->RESULT_ARRAY();
    }

    public function pie($tanggal1,$tanggal2)
    {
            return $this->db->query("SELECT ket_kategori,count(*) TOTAL FROM (SELECT ret200.noref, ret200.tgval, ret200.noac, ret200.nilai, ret200.ket,
                ret200.doc, shdblc.aliasnm, kategori_kyc.ket ket_kategori, to_char(ret200.tgval,'DD/MM/YYYY') TANGGAL,
                ((ret200.nilai - shdblc.bkyc)/shdblc.bkyc)*100 persentase
            FROM ret200 INNER JOIN ret100 ON ret200.noac = ret100.noac
                        INNER JOIN shdblc ON ret100.noac = shdblc.noac
                        LEFT OUTER JOIN kategori_kyc ON nilai_awal <= ((ret200.nilai - shdblc.bkyc)/shdblc.bkyc)*100 AND nilai_akhir >= ((ret200.nilai - shdblc.bkyc)/shdblc.bkyc)*100
            WHERE doc = 'C' AND statment <> '2' AND ret200.status LIKE '%KYC%'           
            UNION ALL
            SELECT rethhis200.noref, rethis200.dupd tgval, rethis200.noac, rethis200.nilai,
                    rethis200.ket, rethis200.doc, SHDBLC.ALIASNM, KATEGORI_KYC.KET KET_KATEGORI, to_char(rethis200.dupd,'DD/MM/YYYY') TANGGAL,
                    ((rethis200.nilai - shdblc.bkyc)/shdblc.bkyc)*100 persentase
            FROM rethhis200 INNER JOIN rethis200 ON rethhis200.noref = rethis200.noref
                            INNER JOIN ret100 ON rethis200.noac = ret100.noac
                            INNER JOIN shdblc ON ret100.noac = shdblc.noac
                            LEFT OUTER JOIN KATEGORI_KYC ON NILAI_AWAL <= ((rethis200.nilai - shdblc.bkyc)/shdblc.bkyc)*100  AND NILAI_AKHIR >= ((rethis200.nilai - shdblc.bkyc)/shdblc.bkyc)*100
            WHERE doc = 'C' AND statment <> '2' AND rethhis200.jnsovr LIKE '%KYC%') WHERE TGVAL >= to_date('".$tanggal1."','yyyy-mm-dd') 
                AND TGVAL <= to_date('".$tanggal2."','yyyy-mm-dd') group by ket_kategori")->RESULT_ARRAY();
    }   
}