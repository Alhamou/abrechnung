<?php

// require ("../include/connect.php");
define('FPDF_FONTPATH','font/');

if (isset($_POST['geschlecht'])) {


require('fpdf.php');

class PDF extends FPDF {
    function Header()
    {
        $this->Image('../partials/img/euros.png',30,8,30);
        $this->Ln(40);
        $this->SetFont('Arial','U',14);
        $this->Cell(10);
        $this->Cell(40,10,'Kunden Informationen',0,0,'L');
        $this->Ln(13);
        // 


        $this->SetFont('Arial','',10);
        //geschlecht
        $this->Cell(10);
        $this->Cell(40,10,'geschlecht',0,0,'L');
        $this->Cell(10);
        $this->Cell(40,10, $_POST['geschlecht'],0,0,'L');
        $this->Ln(13);
        
        //Kunden Name
        $this->Cell(10);
        $this->Cell(40,10,'Kunden Name',0,0,'L');
        $this->Cell(10);
        $this->Cell(40,10, $_POST['kundname'],0,0,'L');
        $this->Ln(13);
        
        //Straße
        $this->Cell(10);
        $this->Cell(40,10,iconv('UTF-8', 'windows-1252', 'Straße'),0,0,'L');
        $this->Cell(10);
        $this->Cell(40,10, $_POST['straße'],0,0,'L');
        $this->Ln(13);
        
        //Stadt
        $this->Cell(10);
        $this->Cell(40,10,'Stadt',0,0,'L');
        $this->Cell(10);
        $this->Cell(40,10, $_POST['stadt'],0,0,'L');
        $this->Ln(13);
        
        //PLZ
        $this->Cell(10);
        $this->Cell(40,10,'PLZ',0,0,'L');
        $this->Cell(10);
        $this->Cell(40,10, $_POST['plz'],0,0,'L');
        $this->Ln(13);
        
        //Kunden Nummer
        $this->Cell(10);
        $this->Cell(40,10,'Kunden Nummer',0,0,'L');
        $this->Cell(10);
        $this->Cell(40,10, $_POST['kundnumer'],0,0,'L');
        $this->Ln(13);
        
        //Steuer Nummer
        $this->Cell(10);
        $this->Cell(40,10,'Steuer Nummer',0,0,'L');
        $this->Cell(10);
        $this->Cell(40,10, $_POST['steuernumer'],0,0,'L');
        $this->Ln(13);
        

        $this->SetFont('Arial','U',14);
        $this->Cell(10);
        $this->Cell(40,10,'Rechnung Informationen',0,0,'L');
        $this->Ln(13);



        $this->SetFont('Arial','',10);
        //Rechnung Nummer
        $this->Cell(10);
        $this->Cell(40,10,'Rechnung Nummer',0,0,'L');
        $this->Cell(10);
        $this->Cell(40,10, $_POST['rechnungnumer'],0,0,'L');
        $this->Ln(13);
        
        //Datum
        $this->Cell(10);
        $this->Cell(40,10,'Datum',0,0,'L');
        $this->Cell(10);
        $this->Cell(40,10, $_POST['datum'],0,0,'L');
        $this->Ln(13);
        
        //Article Name
        $this->Cell(10);
        $this->Cell(40,10,'Article Name',0,0,'L');
        $this->Cell(10);
        $this->Cell(40,10, $_POST['article'],0,0,'L');
        $this->Ln(13);
        
        //Mange
        $this->Cell(10);
        $this->Cell(40,10,'Mange',0,0,'L');
        $this->Cell(10);
        $this->Cell(40,10, $_POST['mange'],0,0,'L');
        $this->Ln(13);
        
        //Einzelpreise
        $this->Cell(10);
        $this->Cell(40,10,'Einzelpreise',0,0,'L');
        $this->Cell(10);
        $this->Cell(40,10, $_POST['einzelpreise'],0,0,'L');
        $this->Ln(13);
        
        //Rabat
        $this->Cell(10);
        $this->Cell(40,10,'Rabat',0,0,'L');
        $this->Cell(10);
        $this->Cell(40,10, $_POST['rabat'],0,0,'L');
        $this->Ln(13);
        
        //Beschreibung
        $this->Cell(10);
        $this->Cell(40,10,'Beschreibung',0,0,'L');
        $this->Cell(10);// $pdf->WordWrap($text,120);
        $this->Cell(40,10, $_POST['beschreibung'],0,0,'L');
        $this->Ln(13);






    }
}
$pdf = new PDF();

$pdf->Output();
}




?>


