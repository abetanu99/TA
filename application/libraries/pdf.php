<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

require 'fpdf.php';
class PDF extends FPDF
{
    public function __construct($orientation = 'P', $unit = 'mm', $size = 'A4')
    {
        parent::__construct($orientation, $unit, $size);
    }
    public function Header()
    {
        // $this->Image('C:\xampp\htdocs\fixed_asset_barcode\assets\logo\logo.png',10,5,97);
        $this->SetFont('Times', 'B', 12);
        // $this->Cell(280, 0, 'LAPORAN FIXED ASSET', 0, 0, 'C');
        $this->Ln(1);
    }

    public function Footer()
    {
        $this->SetY(-12);
        $lebar = $this->w;
        $this->SetFont('Times', 'I', 8);
        $this->line($this->GetX(), $this->GetY(), $this->GetX() + $lebar - 17, $this->GetY());
        $this->SetY(-20);
        $this->SetX(0);
        $this->Ln(1);
        $hal = 'Hal : ' . $this->PageNo() . '/{Laporan Fixed Asset}';
        $this->Cell($this->GetStringWidth($hal), 10, $hal);
        $datestring = "Year: %Y Month: %m Day: %d - %h:%i %a";
        $tanggal    = 'Dicetak : ' . date('d-m-Y  h:i-a') . ' ';
        $this->Cell($lebar - $this->GetStringWidth($hal) - $this->GetStringWidth($tanggal) - 20);
        $this->Cell($this->GetStringWidth($tanggal), 10, $tanggal);

    }
}
