<?php
require('fpdf.php');
class PDF extends FPDF
{
   //Cabecera de p�gina
	function Header()
	{

//Logo
	$this->Image("./assets/img/FindGAS.png", 5, 5, 50, 50, "PNG");
 
      //Arial bold 15
	 
	    $this->SetFont('Arial', 'B', 24);
      //Movernos a la derecha
		//$this->Cell(80);
      //T�tulo
		//$this->Cell(60,8,'',2,1,'R');
		//$this->Cell(80);
		$this->Cell(160,10,utf8_decode('Listado Cortes'),2,0,'R');
		$this->Ln();
		$this->Cell(70);
		
        $this->SetFillColor(224,224,224);
		
      //Salto de línea
		$this->Ln(15);

	}
// Pie de p�gina
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',12);
    // N�mero de página
    $this->Cell(0,10,'CIFP Santa Catalina  ' ,0,0,'C');
	   $this->SetFont('Arial','I',8);
	   $this->Cell(0,10,'  Pgna.: '.$this->PageNo() ,0,0,'C');
}
}
$w=array(40,50,50,50);
$alturafila=5;
$alturafila2=8;
 

//Creaci�n del objeto de la clase heredada
$pdf=new PDF();
$pdf->SetMargins(10, 15 , 20);
$pdf->AddPage();

$pdf->SetFillColor(224,224,224);
//$pdf->Cell(80,140,'',1,0,'L',True);
//http://www.fpdf.org/en/doc/ln.htm
// Salto de linea de 5 lineas
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->SetDrawColor(0,80,180);
 $pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(220,90,50);
    // Ancho del borde (1 mm)
$pdf->SetLineWidth(1);
// Tutorial http://fpdf.org/en/doc/cell.htm
$pdf->SetFillColor(186,247,254);
$pdf->Cell(40,$alturafila2,utf8_decode('Titulo'),1,0,'C',True);
$pdf->Cell(50,$alturafila2,utf8_decode('Tema '),1,0,'C',True);
$pdf->Cell(50,$alturafila2,utf8_decode('Descripción'),1,0,'C',True);
$pdf->Cell(50,$alturafila2,utf8_decode('Palabras clave'),1,0,'C',True);


//$pdf->Cell(171,150,'',1,0);
$pdf->SetFont('Arial','',10);
 $pdf->SetDrawColor(0,80,180);
    $pdf->SetFillColor(230,230,0);
    $pdf->SetTextColor(0,0,0);
    // Ancho del borde (1 mm)
    $pdf->SetLineWidth(0.2);

	
function cabecera($pdf)
{
 $pdf->SetMargins(10, 15 , 20);
 

$pdf->SetFillColor(224,224,224);
//$pdf->Cell(80,140,'',1,0,'L',True);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->SetDrawColor(0,80,180);
$pdf->SetFillColor(247,255,196);
$pdf->SetTextColor(220,50,50);
    // Ancho del borde (1 mm)
$pdf->SetLineWidth(2);
$alturafila2=12;
 

$pdf->Cell(40,$alturafila2,utf8_decode('Titulo'),1,0,'L',True);
$pdf->Cell(50,$alturafila2,utf8_decode('Tema '),1,0,'L');
$pdf->Cell(50,$alturafila2,utf8_decode('Descripción'),1,0,'L',True);
$pdf->Cell(50,$alturafila2,utf8_decode('Palabras clave'),1,0,'L');



//$pdf->Cell(171,150,'',1,0);
$pdf->SetFont('Arial','',10);
 $pdf->SetDrawColor(0,80,180);
    $pdf->SetFillColor(230,230,0);
    $pdf->SetTextColor(0,0,0);
    // Ancho del borde (1 mm)
    $pdf->SetLineWidth(0.2);
	 $pdf->SetFillColor(226,247,254);
	 $pdf->Ln(5);
}

include_once "funciones.php";

$usuario = $_SESSION['usuario'];

$bd = obtenerConexion();
$sql="SELECT ideess, direccion, localidad, horario FROM eess WHERE usuario = '".$usuario."'";

$resultado = mysqli_query($bd, $sql); 


    

    if (!$resultado) {
        echo "Error";
    } else {
		$pintaFondo='';
		$nlinea=0;
		 $pdf->SetFillColor(226,247,254);
		 $pdf->Ln();
        while ($fila = mysqli_fetch_row($resultado)) {
			
		 
			$pdf->Cell($w[0],$alturafila2,utf8_decode($fila[1]),1,0,'L',$pintaFondo);
			$pdf->Cell($w[1],$alturafila2,utf8_decode($fila[5]),1,0,'L',$pintaFondo);

			$pdf->Cell($w[2],$alturafila2,utf8_decode($fila[6]),1,0,'L',$pintaFondo);

			$pdf->Cell($w[3],$alturafila2,utf8_decode($fila[7]),1,0,'L',$pintaFondo);
			$pdf->Ln();
			if(	$pintaFondo=='True'){	$pintaFondo=''; }else{$pintaFondo='True';}
			$nlinea=$nlinea+1;

			if($nlinea>10){$nlinea=0;$pdf->AddPage();
            	cabecera($pdf);
			}
	     }
    } 

mysqli_free_result($resultado);
$pdf->Ln();
//$pdf->Output();  
$filename="Cortes.pdf";
$pdf->Output($filename,"I");
// $pdf->Output("F","EUrbanos.pdf");
 


	?>