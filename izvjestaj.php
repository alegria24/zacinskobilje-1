<?php
require('./fpdf181/fpdf.php');
class PDF extends FPDF
{
    function Header()
    {
        $this->SetFont('Times', 'B', 15);
        $this->Cell(30, 40, 'Our Spices', 0, 0);
    }
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Times','I', 10);
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
    function BasicTable($header, $data)
    {
        $this->SetX(10);
        foreach($header as $col){
            $this->SetFont('Times', 'B', 10);
            $this->Cell(60, 58, $col, 0);
        }
        $this->Ln();
        
        $this->SetY(45);
        $this->SetFont('Times', '', 10);
        foreach($data as $row)
        {
            foreach($row as $col){
                $this->Cell(60, 8, $col, 0, 0);
            }
            $this->Ln();
        }
    }
}
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage('L');
    $pdf->SetFont('Times', '', 12);
    $header = array('Name', 'Cuisine', 'Flavor', 'Usage', 'Price');
    $xml = simplexml_load_file('proizvodi.xml');
    $pdf->BasicTable($header, $xml);
    $pdf->SetX(15);
    $pdf->SetY(40);
    $pdf->Output();
?>