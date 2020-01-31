<?php
session_start();
	include_once 'includes/db.php';

$sRoll = $_SESSION[ 'S21id' ];
						$sql = "SELECT tbls21.FullName,tbls21.Gender,tbls21.profilepic,tbls21.RollNo,tblclasses.ClassName,tblstreams.StreamName,tblteachers.FullName as tr,tblteachers.Gender as trgd FROM tbls21 join tblclasses on tblclasses.id=tbls21.ClassId join tblstreams on tblstreams.id=tbls21.StreamId inner join tblteachers on tblteachers.id=tblclasses.ClassTeacherId WHERE tbls21.RollNo='$sRoll';";
				$result = mysqli_query( $conn, $sql );
						$row = mysqli_fetch_assoc( $result );
						$count = mysqli_num_rows($result);
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
//$pdf->Image($pp,160,10,30,30);
//dummy cells for space
$pdf->Cell(70,5,'',0,0);$pdf->Cell(50,5,'',0,0);$pdf->Cell(50,5,'',0,1);
$pdf->Cell(70,5,$name,0,0);$pdf->Cell(50,5,$class,0,0);$pdf->Cell(50,5,$stream,0,1);
//dummycells for space
$pdf->Cell(70,5,'',0,0);$pdf->Cell(50,5,'',0,0);$pdf->Cell(50,5,'',0,1);
$pdf->Cell(70,5,$ct,0,0);$pdf->Cell(50,5,'Term: One',0,0);$pdf->Cell(50,5,$g,0,1);
//dummycells for space
$pdf->Cell(70,5,'',0,0);$pdf->Cell(50,5,'',0,0);$pdf->Cell(50,5,'',0,1);
//start of table header
$pdf->SetFillColor(21,21,21);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(60,10,'Subject',1,0,'L',true);$pdf->Cell(18,10,'B.O.T',1,0,'C',true);
$pdf->Cell(18,10,'M.T',1,0,'C',true);
$pdf->Cell(18,10,'E.O.T',1,0,'C',true);$pdf->Cell(18,10,'Avg',1,0,'C',true);
$pdf->Cell(18,10,'Grade',1,0,'C',true);$pdf->Cell(40,10,'Remarks',1,1,'C',true);
//start of table content
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',11);
$date = date( "d/m/y" );
$time = date( "h : i a" );
$duedt = explode( "/", $date );
$week = mktime( 0, 0, 0, $duedt[ 1 ], $duedt[ 0 ], $duedt[ 2 ] );
$years = ( int )date( 'Y', $week );

$avga=array();
$agg=array();
$ss=array();
$sql3 = "SELECT id,SubjectName FROM tblsubjects WHERE Level='O-Level';";
$result3 = mysqli_query( $conn, $sql3 );
while ( $row3 = mysqli_fetch_assoc( $result3 ) ) {
$subject=$row3[ 'SubjectName' ];
$si =$row3[ 'id' ];
$sql="SELECT SUM(FinalMark) AS fn FROM tblfinal WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=1 AND Year=$years;";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
	$s1=$row['fn'];
$sql5="SELECT SUM(FinalMark) AS fn1 FROM tblfinalmt WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=1 AND Year=$years;;";
$result5=mysqli_query($conn,$sql5);
$row5=mysqli_fetch_assoc($result5);
$s2=$row5['fn1'];
$sql6="SELECT SUM(FinalMark) AS fn2 FROM tblfinaleot WHERE SubjectId=$si AND StudentRoll='$sRoll' AND Term=1 AND Year=$years;;";
$result6=mysqli_query($conn,$sql6);
$row6=mysqli_fetch_assoc($result6);
$s3= $row6['fn2'];
$avg = ($s1+$s2+$s3)/3;
$avg = round($avg,0);
	
if($avg >=0 && $avg <=39){
$m="F9";
$a=9;
}else if($avg >=40 && $avg <=44){
$m="P8";
$a=8;
}else if($avg >=45 && $avg <=49){
$m="P7";
$a=7;
}else if($avg >=50 && $avg <=54){
$m="C6";
$a=6;
}else if($avg >=55 && $avg <=59){
$m="C5";
$a=5;
}else if($avg >=60 && $avg <=65){
$m="C4";
$a=4;
}else if($avg >=66 && $avg <=74){
$m="C3";
$a=3;
}else if($avg >=75 && $avg <=79){
$m="D2";
$a=2;
}else if($avg >=80){
$m="D1";
$a=1;
}

$avga[]=$m;
$agg[]=$a;
$tmp = array_count_values($avga);
$cnt = $tmp[$m];
if($cnt == 1){
	if($m == "D1"){
		$cm= "Excellent";
	}else if($m == "D2"){
		$cm= "Very Good";
	}else if($m == "C3"){
		$cm= "Quite Good";
	}else if($m == "C4"){
		$cm= "Good";
	}else if($m == "C5"){
		$cm= "Promising";
	}else if($m == "C6"){
	$cm= "Average Work";
	}else if($m == "P7"){
	$cm= "Double efforts";
	}else if($m == "P8"){
	$cm= "More effort";
	}else if($m == "F9"){
	$cm= "Tripple Effort";
	}
}else if($cnt == 2){
	if($m == "D1"){
		$cm= "Keep it Up";
	}else if($m == "D2"){
		$cm= "Satisfactory";
	}else if($m == "C3"){
		$cm= "Impressive";
	}else if($m == "C4"){
		$cm= "Fairly Good";
	}else if($m == "C5"){
		$cm= "Fair Attempt";
	}else if($m == "C6"){
	$cm= "Can do better";
	}else if($m == "P7"){
	$cm= "Aim higher";
	}else if($m == "P8"){
	$cm= "Double effort";
	}else if($m == "F9"){
	$cm= "Still low";
	}
}else if($cnt == 3){
	if($m == "D1"){
		$cm= "Maintain this";
	}else if($m == "D2"){
		$cm= "Very promising";
	}else if($m == "C3"){
		$cm= "Quite promising";
	}else if($m == "C4"){
		$cm= "Not bad";
	}else if($m == "C5"){
		$cm= "Tighten up";
	}else if($m == "C6"){
	$cm= "Can do better";
	}else if($m == "P7"){
	$cm= "Read More";
	}else if($m == "P8"){
	$cm= "Work harder";
	}else if($m == "F9"){
	$cm= "Pull up";
	}
}else if($cnt == 4){
	if($m == "D1"){
		$cm= "Very determined";
	}else if($m == "D2"){
		$cm= "Awesome";
	}else if($m == "C3"){
		$cm= "Your getting there";
	}else if($m == "C4"){
		$cm= "ok marks";
	}else if($m == "C5"){
		$cm= "Buckle up";
	}else if($m == "C6"){
	$cm= "Can improve";
	}else if($m == "P7"){
	$cm= "Always consult";
	}else if($m == "P8"){
	$cm= "Pay more attention";
	}else if($m == "F9"){
	$cm= "Alot of energy needed";
	}
}else{
	if($m == "D1"){
		$cm= "Very determined";
	}else if($m == "D2"){
		$cm= "Awesome";
	}else if($m == "C3"){
		$cm= "Your getting there";
	}else if($m == "C4"){
		$cm= "ok marks";
	}else if($m == "C5"){
		$cm= "Buckle up";
	}else if($m == "C6"){
	$cm= "Can improve";
	}else if($m == "P7"){
	$cm= "Always consult";
	}else if($m == "P8"){
	$cm= "Pay more attention";
	}else if($m == "F9"){
	$cm= "Alot of energy needed";
	}
}
	
$pdf->Cell(60,9,$subject,1,0,'L',true);$pdf->Cell(18,9,$s1,1,0,'C',true);
$pdf->Cell(18,9,$s2,1,0,'C',true);
$pdf->Cell(18,9,$s3,1,0,'C',true);$pdf->Cell(18,9,$avg,1,0,'C',true);
$pdf->Cell(18,9,$m,1,0,'C',true);$pdf->Cell(40,9,$cm,1,1,'C',true);
	}
//conclusionson report start
sort($agg);
$agg=array_slice($agg,0,8);
$arrs = array_sum($agg);
if($arrs < 32){
	$dv= "I";
}else if($arrs >= 33 && $arrs <= 50){
	$dv= "II";
}else if($arrs >= 51){
	$dv= "III";
}
$pdf->Cell(78,9,'Aggregate in best 8',1,0,'L',true);$pdf->Cell(18,9,$arrs,1,0,'C',true);
$pdf->Cell(76,9,'Division',1,0,'L',true);$pdf->Cell(18,9,$dv,1,1,'C',true);
//dummy cell for  space
$pdf->Cell(190,9,'',1,1,'L',true);
if($arrs < 32){
	$ctc= "Maximize the good grades in all subjects";
}else if($arrs >= 33 && $arrs <= 50){
	$ctc= "Settle for academics and get better results";
}else if($arrs >= 51){
	$ctc= "Consult your teachers always";
}
$pdf->Cell(80,9,'Class Teacher\'s Comment',1,0,'L',true);$pdf->Cell(110,9,$ctc,1,1,'L',true);
if($arrs < 32){
	$htc= "This is promising";
}else if($arrs >= 33 && $arrs <= 50){
	$htc= "Get more serious on your academics";
}else if($arrs >= 51){
	$htc= "Alot more effort and seriousness is needed";
}
$pdf->Cell(80,9,'Head Teacher\'s Comment',1,0,'L',true);$pdf->Cell(110,9,$htc,1,1,'L',true);
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