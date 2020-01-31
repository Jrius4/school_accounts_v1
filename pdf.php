



<?php
session_start();
	include_once 'includes/db.php';
$date = date( "d/m/y" );
$time = date( "h : i a" );
$duedt = explode( "/", $date );
$week = mktime( 0, 0, 0, $duedt[ 1 ], $duedt[ 0 ], $duedt[ 2 ] );
$years = ( int )date( 'Y', $week );
$sRoll = $_SESSION[ 'ARid' ];
$sql = "SELECT tblastudents.FullName,tblastudents.Gender,tblastudents.profilepic,tblastudents.RollNo,tblclasses.ClassName,tblstreams.StreamName,tblastudents.CombinationId,tblteachers.FullName as tr,tblteachers.Gender as trgd FROM tblastudents join tblclasses on tblclasses.id=tblastudents.ClassId join tblstreams on tblstreams.id=tblastudents.StreamId inner join tblteachers on tblteachers.id=tblclasses.ClassTeacherId WHERE RollNo='$sRoll';";
$result = mysqli_query( $conn, $sql );
$row = mysqli_fetch_assoc( $result );
$pp="uploads/".$row['profilepic'];
$name="Name: ".$row['FullName'];
$class="Class: ".$row['ClassName'];
$stream="Stream: ".$row['StreamName'];
if($row['trgd'] == "Male"){
	$ct= "ClassTeacher: Mr. ".$row['tr'];
}else{
$ct= "ClassTeacher: Ms. ".$row['tr']; }
	if($row['Gender'] == "Male"){
	$g= "Gender: M";
	}else{
	$g= "Gender: F";
	}

require('fpdf/fpdf.php');
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
// image(file name,x position,y position, [width],[height])
$pdf->Image('img/message/1.jpg',10,10);
//cell(width,height,text,border,endline,[align])
$pdf->SetFont('Arial','B',18);
//cell protruding from img
$pdf->SetTextColor(0,0,255);
$pdf->Cell(50,20,'',0,0);$pdf->Cell(100,10,'FRIENDS ACADEMY KATENDE',0,1);
$pdf->SetFont('Arial','',11);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(50,20,'',0,0);$pdf->Cell(100,2,'',0,1);
$pdf->Cell(50,20,'',0,0);$pdf->Cell(100,5,'MIXED DAY AND BOARDING SECONDARY SCHOOL',0,1);
$pdf->Cell(50,20,'',0,0);$pdf->Cell(100,5,'ARTS AND SCIENCES',0,1);
$pdf->Cell(50,20,'',0,0);$pdf->Cell(100,5,'P.O.Box 27625 Kampala',0,1);
$pdf->Cell(50,20,'',0,0);$pdf->Cell(100,5,'Tel:+256(0)312113547, 0712855644, 0788315945',0,1);
$pdf->Cell(50,20,'',0,0);$pdf->Cell(100,5,'Website:www.friendsacademy.co.ug ',0,1);
$pdf->Cell(50,20,'',0,0);$pdf->Cell(100,5,'Email:info@friendsacademy.co.ug',0,1);
//student image
$pdf->Image($pp,160,10,30,30);
//dummy cells for space
$pdf->Cell(70,5,'',0,0);$pdf->Cell(50,5,'',0,0);$pdf->Cell(50,5,'',0,1);
$pdf->Cell(70,5,$name,0,0);$pdf->Cell(50,5,$class,0,0);$pdf->Cell(50,5,$stream,0,1);
//dummy cells for space
$pdf->Cell(70,5,'',0,0);$pdf->Cell(50,5,'',0,0);$pdf->Cell(50,5,'',0,1);
$pdf->Cell(70,5,$ct,0,0);$pdf->Cell(50,5,'Term: One',0,0);$pdf->Cell(50,5,$g,0,1);
//dummy cells for space
$pdf->Cell(70,5,'',0,0);$pdf->Cell(50,5,'',0,0);$pdf->Cell(50,5,'',0,1);
//start of table header
$pdf->SetFillColor(21,21,21);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(60,10,'Subject',1,0,'L',true);
$pdf->Cell(18,10,'B.O.T',1,0,'C',true);
$pdf->Cell(18,10,'M.T',1,0,'C',true);
$pdf->Cell(18,10,'E.O.T',1,0,'C',true);$pdf->Cell(18,10,'Avg',1,0,'C',true);
$pdf->Cell(18,10,'Grade',1,0,'C',true);$pdf->Cell(40,10,'Remarks',1,1,'C',true);
//start of table content
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',11);
//first paper
$pdf->Cell(50,30,'Subject',1,0,'L',true);
//paper 1
$pdf->Cell(10,10,'P1',1,0,'L',true);
$pdf->Cell(18,10,'B.O.T',1,0,'C',true);
$pdf->Cell(18,10,'M.T',1,0,'C',true);
$pdf->Cell(18,10,'E.O.T',1,0,'C',true);$pdf->Cell(18,10,'Avg',1,0,'C',true);
$pdf->Cell(18,10,'Grade',1,0,'C',true);$pdf->Cell(40,10,'Remarks',1,1,'C',true);
$pdf->Cell(50,10,'',0,0);
//paper 2 start
$pdf->Cell(10,10,'P2',1,0,'L',true);
$pdf->Cell(18,10,'B.O.T',1,0,'C',true);
$pdf->Cell(18,10,'M.T',1,0,'C',true);
$pdf->Cell(18,10,'E.O.T',1,0,'C',true);$pdf->Cell(18,10,'Avg',1,0,'C',true);
$pdf->Cell(18,10,'Grade',1,0,'C',true);$pdf->Cell(40,10,'Remarks',1,1,'C',true);
$pdf->Cell(50,10,'',0,0);
//paper 3 start
$pdf->Cell(10,10,'P3',1,0,'L',true);
$pdf->Cell(18,10,'B.O.T',1,0,'C',true);
$pdf->Cell(18,10,'M.T',1,0,'C',true);
$pdf->Cell(18,10,'E.O.T',1,0,'C',true);$pdf->Cell(18,10,'Avg',1,0,'C',true);
$pdf->Cell(18,10,'Grade',1,0,'C',true);$pdf->Cell(40,10,'Remarks',1,1,'C',true);
//second paper
$pdf->Cell(50,30,'Subject',1,0,'L',true);
//paper 1
$pdf->Cell(10,10,'P1',1,0,'L',true);
$pdf->Cell(18,10,'B.O.T',1,0,'C',true);
$pdf->Cell(18,10,'M.T',1,0,'C',true);
$pdf->Cell(18,10,'E.O.T',1,0,'C',true);$pdf->Cell(18,10,'Avg',1,0,'C',true);
$pdf->Cell(18,10,'Grade',1,0,'C',true);$pdf->Cell(40,10,'Remarks',1,1,'C',true);
$pdf->Cell(50,10,'',0,0);
//paper 2 start
$pdf->Cell(10,10,'P2',1,0,'L',true);
$pdf->Cell(18,10,'B.O.T',1,0,'C',true);
$pdf->Cell(18,10,'M.T',1,0,'C',true);
$pdf->Cell(18,10,'E.O.T',1,0,'C',true);$pdf->Cell(18,10,'Avg',1,0,'C',true);
$pdf->Cell(18,10,'Grade',1,0,'C',true);$pdf->Cell(40,10,'Remarks',1,1,'C',true);
$pdf->Cell(50,10,'',0,0);
//paper 3 start
$pdf->Cell(10,10,'P3',1,0,'L',true);
$pdf->Cell(18,10,'B.O.T',1,0,'C',true);
$pdf->Cell(18,10,'M.T',1,0,'C',true);
$pdf->Cell(18,10,'E.O.T',1,0,'C',true);$pdf->Cell(18,10,'Avg',1,0,'C',true);
$pdf->Cell(18,10,'Grade',1,0,'C',true);$pdf->Cell(40,10,'Remarks',1,1,'C',true);
//third paper
$pdf->Cell(50,30,'Subject',1,0,'L',true);
//paper 1
$pdf->Cell(10,10,'P1',1,0,'L',true);
$pdf->Cell(18,10,'B.O.T',1,0,'C',true);
$pdf->Cell(18,10,'M.T',1,0,'C',true);
$pdf->Cell(18,10,'E.O.T',1,0,'C',true);$pdf->Cell(18,10,'Avg',1,0,'C',true);
$pdf->Cell(18,10,'Grade',1,0,'C',true);$pdf->Cell(40,10,'Remarks',1,1,'C',true);
$pdf->Cell(50,10,'',0,0);
//paper 2 start
$pdf->Cell(10,10,'P2',1,0,'L',true);
$pdf->Cell(18,10,'B.O.T',1,0,'C',true);
$pdf->Cell(18,10,'M.T',1,0,'C',true);
$pdf->Cell(18,10,'E.O.T',1,0,'C',true);$pdf->Cell(18,10,'Avg',1,0,'C',true);
$pdf->Cell(18,10,'Grade',1,0,'C',true);$pdf->Cell(40,10,'Remarks',1,1,'C',true);
$pdf->Cell(50,10,'',0,0);
//paper 3 start
$pdf->Cell(10,10,'P3',1,0,'L',true);
$pdf->Cell(18,10,'B.O.T',1,0,'C',true);
$pdf->Cell(18,10,'M.T',1,0,'C',true);
$pdf->Cell(18,10,'E.O.T',1,0,'C',true);$pdf->Cell(18,10,'Avg',1,0,'C',true);
$pdf->Cell(18,10,'Grade',1,0,'C',true);$pdf->Cell(40,10,'Remarks',1,1,'C',true);
//ict or submath
$pdf->Cell(50,20,'Subject',1,0,'L',true);
//paper 1
$pdf->Cell(10,10,'P1',1,0,'L',true);
$pdf->Cell(18,10,'B.O.T',1,0,'C',true);
$pdf->Cell(18,10,'M.T',1,0,'C',true);
$pdf->Cell(18,10,'E.O.T',1,0,'C',true);$pdf->Cell(18,10,'Avg',1,0,'C',true);
$pdf->Cell(18,10,'Grade',1,0,'C',true);$pdf->Cell(40,10,'Remarks',1,1,'C',true);
$pdf->Cell(50,10,'',0,0);
//paper 2 start
$pdf->Cell(10,10,'P2',1,0,'L',true);
$pdf->Cell(18,10,'B.O.T',1,0,'C',true);
$pdf->Cell(18,10,'M.T',1,0,'C',true);
$pdf->Cell(18,10,'E.O.T',1,0,'C',true);$pdf->Cell(18,10,'Avg',1,0,'C',true);
$pdf->Cell(18,10,'Grade',1,0,'C',true);$pdf->Cell(40,10,'Remarks',1,1,'C',true);
//general paper
$pdf->Cell(50,10,'General Paper',1,0,'L',true);
//paper 1
$pdf->Cell(10,10,'P1',1,0,'L',true);
$pdf->Cell(18,10,'B.O.T',1,0,'C',true);
$pdf->Cell(18,10,'M.T',1,0,'C',true);
$pdf->Cell(18,10,'E.O.T',1,0,'C',true);$pdf->Cell(18,10,'Avg',1,0,'C',true);
$pdf->Cell(18,10,'Grade',1,0,'C',true);$pdf->Cell(40,10,'Remarks',1,1,'C',true);	
//summary start
$pdf->Cell(50,10,'Principal Passes',1,0,'L',true);$pdf->Cell(50,10,'Subsidiary',1,0,'L',true);
$pdf->Cell(50,10,'Total Points',1,0,'L',true);$pdf->Cell(40,10,'','R,L,T',1,'C',true);
$pdf->Cell(50,10,'Principal Passes',1,0,'L',true);$pdf->Cell(50,10,'Subsidiary',1,0,'L',true);
$pdf->Cell(50,10,'Total Points',1,0,'L',true);$pdf->Cell(40,10,'','R,L,B',1,'C',true);
//dummy cell for  space
$pdf->Cell(190,9,'',1,1,'L',true);
$pdf->Cell(80,9,'Class Teacher\'s Comment',1,0,'L',true);$pdf->Cell(110,9,'',1,1,'L',true);
$pdf->Cell(80,9,'Head Teacher\'s Comment',1,0,'L',true);$pdf->Cell(110,9,'',1,1,'L',true);
$sql="SELECT Fees FROM tblfees WHERE StudentRoll='$sRoll' AND Term=3 AND Year=$years";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$paid=$row['Fees'];
$sql1="SELECT fees FROM tbls34 WHERE RollNo='$sRoll';";
$result1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_assoc($result1);
$money=$row1['fees'];
$bal=$money-$paid;
if($bal <= 0){
	$b= "0";
}else{
	$b= $bal;
}
$pdf->Cell(80,9,'Unpaid fees',1,0,'L',true);$pdf->Cell(32,9,$b,1,0,'C',true);
$sql="SELECT nxtdate FROM tblnxtdate ORDER BY id DESC ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$dt= $row['nxtdate'];
$pdf->Cell(50,9,'Next term begins on',1,0,'L',true);$pdf->Cell(28,9,$dt,1,1,'C',true);


$pdf->Output();
?>