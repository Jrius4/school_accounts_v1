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
	$gd= "Gender: M";
	}else{
	$gd= "Gender: F";
	}

$sql3 = "SELECT tblsubjects.SubjectName,tblsubjects.id FROM tblsubjects join tblacombination on tblacombination.SubjectId1=tblsubjects.id inner join tblastudents on tblastudents.CombinationId=tblacombination.id  WHERE tblastudents.RollNo='$sRoll';";
												$result3 = mysqli_query( $conn, $sql3 );
												$row3 = mysqli_fetch_assoc( $result3 );
												$s1 = $row3[ 'id' ];
												$sub1= $row3[ 'SubjectName' ];
$sid = $row3[ 'id' ];
												$sql4 = "SELECT PaperName,tblpapers.id FROM tblPapers join tblsubjects on tblsubjects.id=tblpapers.SubjectId WHERE tblpapers.Status=1 AND tblsubjects.id=$sid";
												$result4 = mysqli_query( $conn, $sql4 );
												$pa = array();
												$paid = array();
												while ( $row4 = mysqli_fetch_assoc( $result4 ) ) {
													$pa[] = $row4[ 'PaperName' ];
													$paid[] = $row4[ 'id' ];
												}
												$pa[] = "";
													$paid[] = "";
												$paper1= $pa[ 0 ];
												$paper2= $pa[ 1 ];
												$paper3= $pa[ 2 ];
	//paper1 marks start
											//											bot marks start
												$paid1 = $paid[ 0 ];
												$sql5 = "SELECT FinalMark AS fn1 FROM tblfinal WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid1 AND Term=2;";
												$result5 = mysqli_query( $conn, $sql5 );
												$row5 = mysqli_fetch_assoc( $result5 );
												$botp1=$row5[ 'fn1' ];
//											bot end
											
//											mt start
											$sql6 = "SELECT FinalMark AS fn1 FROM tblfinalmt WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid1 AND Term=2;";
												$result6 = mysqli_query( $conn, $sql6 );
												$row6 = mysqli_fetch_assoc( $result6 );
												$mtp1=$row6[ 'fn1' ];
//											mt end
//											eot start
											$sql7 = "SELECT FinalMark AS fn1 FROM tblfinaleot WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid1 AND Term=2;";
												$result7 = mysqli_query( $conn, $sql7 );
												$row7 = mysqli_fetch_assoc( $result7 );
												$eotp1=$row7[ 'fn1' ];
//											eot end
//											paper 1 marks end
//											paper 2 start
//											bot start
											$paid2 = $paid[1];
												$sql8 = "SELECT FinalMark AS fn1 FROM tblfinal WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid2 AND Term=2;";
												$result8 = mysqli_query( $conn, $sql8 );
												$row8 = mysqli_fetch_assoc( $result8 );
												$botp2=$row8[ 'fn1' ];
//											bot end
//										mt start
												$sql9 = "SELECT FinalMark AS fn1 FROM tblfinalmt WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid2 AND Term=2;";
												$result9 = mysqli_query( $conn, $sql9 );
												$row9 = mysqli_fetch_assoc( $result9 );
												$mtp2=$row9[ 'fn1' ];
//											mt end
//											eot start
												$sql10 = "SELECT FinalMark AS fn1 FROM tblfinaleot WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid2 AND Term=2;";
												$result10 = mysqli_query( $conn, $sql10 );
												$row10 = mysqli_fetch_assoc( $result10 );
												$eotp2=$row10[ 'fn1' ];
//											eot end
//											paper 2 end
//											paper 3 start
//											bot start
												$paid3 = $paid[ 2 ];
if($paid3==""){
													$botp3="";
													$mtp3="";
													$eotp3="";
												}else{
												$sql11 = "SELECT FinalMark AS fn1 FROM tblfinal WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid3 AND Term=2;";
												$result11 = mysqli_query( $conn, $sql11 );
												$row11 = mysqli_fetch_assoc( $result11 );
												$botp3=$row11[ 'fn1' ];
//											bot end
//											mt start
											$sql12 = "SELECT FinalMark AS fn1 FROM tblfinalmt WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid3 AND Term=2;";
												$result12 = mysqli_query( $conn, $sql12 );
												$row12 = mysqli_fetch_assoc( $result12 );
												$mtp3=$row12[ 'fn1' ];
//											mt end
//											eot start
												$sql13 = "SELECT FinalMark AS fn1 FROM tblfinaleot WHERE SubjectId=$s1 AND StudentRoll='$sRoll' AND PaperId=$paid3 AND Term=2;";
												$result13 = mysqli_query( $conn, $sql13 );
												$row13 = mysqli_fetch_assoc( $result13 );
												$eotp3=$row13[ 'fn1' ];
												}
//											eot end
//											paper 3 end
//											total for bot
											if($botp3==""){
												$botp3=0;
											}
											$avgb=$botp1+$botp2+$botp3;
												if($botp3==0){
												$botp3="";
											}
//											total for mt
											if($mtp3==""){
												$mtp3=0;
											}
											$avgb2=$mtp1+$mtp2+$mtp3;
												if($mtp3==0){
												$mtp3="";
											}
//											total for eot
											if($eotp3==""){
												$eotp3=0;
											}
											$avgb3=$eotp1+$eotp2+$eotp3;
											if($eotp3==0){
												$eotp3="";
											}
											$avgs2=($avgb+$avgb2+$avgb3)/3;

											$gg2=array();
if($avgb==""){
$gr="";
												}else if($avgb >=0 && $avgb <=39){
											$gr= "F9";
											}else if($avgb >=40 && $avgb <=44){
											$gr= "P8";
											}else if($avgb >=45 && $avgb <=49){
											$gr= "P7";
											}else if($avgb >=50 && $avgb <=54){
											$gr= "C6";
											}else if($avgb >=55 && $avgb <=59){
											$gr= "C5";
											}else if($avgb >=60 && $avgb <=65){
											$gr= "C4";
											}else if($avgb >=66 && 
													 $avgb <=74){
											$gr= "C3";
											}else if($avgb >=75 && 
													 $avgb <=79){
											$gr= "D2";
											}else if($avgb >=80){
											$gr= "D1";
											}
if($avgb2==""){
$grm1="";
												}else if($avgb2 >=0 && $avgb2 <=39){
											$grm1= "F9";
											}else if($avgb2 >=40 && $avgb2 <=44){
											$grm1= "P8";
											}else if($avgb2 >=45 && $avgb2 <=49){
											$grm1= "P7";
											}else if($avgb2 >=50 && $avgb2 <=54){
											$grm1= "C6";
											}else if($avgb2 >=55 && $avgb2 <=59){
											$grm1= "C5";
											}else if($avgb2 >=60 && $avgb2 <=65){
											$grm1= "C4";
											}else if($avgb2 >=66 && 
													 $avgb2 <=74){
											$grm1= "C3";
											}else if($avgb2 >=75 && 
													 $avgb2 <=79){
											$grm1= "D2";
											}else if($avgb2 >=80){
											$grm1= "D1";
											}
if($avgb3==""){
$gre1="";
												}else if($avgb3 >=0 && $avgb3 <=39){
											$gre1= "F9";
											}else if($avgb3 >=40 && $avgb3 <=44){
											$gre1= "P8";
											}else if($avgb3 >=45 && $avgb3 <=49){
											$gre1= "P7";
											}else if($avgb3 >=50 && $avgb3 <=54){
											$gre1= "C6";
											}else if($avgb3 >=55 && $avgb3 <=59){
											$gre1= "C5";
											}else if($avgb3 >=60 && $avgb3 <=65){
											$gre1= "C4";
											}else if($avgb3 >=66 && 
													 $avgb3 <=74){
											$gre1= "C3";
											}else if($avgb3 >=75 && 
													 $avgb3 <=79){
											$gre1= "D2";
											}else if($avgb3 >=80){
											$gre1= "D1";
											}
if($avgs2==""){
													$pp1=0;
													$tp1=0;
												}else if($avgs2 >=0 && $avgs2 <=39){
											
													$g='F';
													$pp1=0;
													$tp1=0;
											}else if($avgs2 >=40 && $avgs2 <=44){
											
													$g='O';
													$pp1=0;
													$tp1=1;
											}else if($avgs2 >=45 && $avgs2 <=55){
											
													$g='E';
													$pp1=1;
													$tp1=2;
											}else if($avgs2 >=56 && $avgs2 <=65){
											
													$g='D';
													$pp1=1;
													$tp1=3;
											}else if($avgs2 >=66 && 
													 $avgs2 <=74){
											
													$g='C';
													$pp1=1;
													$tp1=4;
											}else if($avgs2 >=75 && 
													 $avgs2 <=79){
											
													$g='B';
													$pp1=1;
													$tp1=5;
											}else if($avgs2 >=80){
											
													$g='A';
													$pp1=1;
													$tp1=6;
											}
$gg2[]=$g;
											$tmp = array_count_values($gg2);
											$cnt = $tmp[$g];
											if($cnt == 1){
												if($g == "A"){
												$cm1= "Keep this up";
												}else if($g == "B"){
												$cm1= "Good work";
												}else if($g == "C"){
												$cm1= "Fairly good work";
												}else if($g == "D"){
												$cm1= "You can do better";
												}else if($g == "O"){
												$cm1= "Aim higher";
												}else if($g == "E"){
												$cm1= "Work more harder";
												}else if($g == "F"){
												$cm1= "Tripple your effort";
												}
												}
//second subject start
$sql3 = "SELECT tblsubjects.SubjectName,tblsubjects.id FROM tblsubjects join tblacombination on tblacombination.SubjectId2=tblsubjects.id inner join tblastudents on tblastudents.CombinationId=tblacombination.id  WHERE tblastudents.RollNo='$sRoll';";
												$result3 = mysqli_query( $conn, $sql3 );
												$row3 = mysqli_fetch_assoc( $result3 );
												$s12 = $row3[ 'id' ];
												$sub2= $row3[ 'SubjectName' ];
$sid2 = $row3[ 'id' ];
												$sql4 = "SELECT PaperName,tblpapers.id FROM tblPapers join tblsubjects on tblsubjects.id=tblpapers.SubjectId WHERE tblpapers.Status=1 AND tblsubjects.id=$sid2";
												$result4 = mysqli_query( $conn, $sql4 );
												$pa = array();
												$paid = array();
												while ( $row4 = mysqli_fetch_assoc( $result4 ) ) {
													$pa[] = $row4[ 'PaperName' ];
													$paid[] = $row4[ 'id' ];
												}
												$pa[] = "";
												$paid[]="";
												$paper12= $pa[ 0 ];
												$paper22= $pa[ 1 ];
												$paper32= $pa[ 2 ];
												//											paper1 marks start
											//											bot marks start
												$paid1 = $paid[ 0 ];
												$sql5 = "SELECT FinalMark AS fn1 FROM tblfinal WHERE SubjectId=$s12 AND StudentRoll='$sRoll' AND PaperId=$paid1 AND Term=2;";
												$result5 = mysqli_query( $conn, $sql5 );
												$row5 = mysqli_fetch_assoc( $result5 );
												$botp12= $row5[ 'fn1' ];
//											bot end
											
//											mt start
											$sql6 = "SELECT FinalMark AS fn1 FROM tblfinalmt WHERE SubjectId=$s12 AND StudentRoll='$sRoll' AND PaperId=$paid1 AND Term=2;";
												$result6 = mysqli_query( $conn, $sql6 );
												$row6 = mysqli_fetch_assoc( $result6 );
											$mtp12=$row6[ 'fn1' ];
//											mt end
//											eot start
											$sql7 = "SELECT FinalMark AS fn1 FROM tblfinaleot WHERE SubjectId=$s12 AND StudentRoll='$sRoll' AND PaperId=$paid1 AND Term=2;";
												$result7 = mysqli_query( $conn, $sql7 );
												$row7 = mysqli_fetch_assoc( $result7 );
											$eotp12=$row7[ 'fn1' ];
//											eot end
//											paper 1 marks end
//											paper 2 start
//											bot start
											$paid2 = $paid[1];
												$sql8 = "SELECT FinalMark AS fn1 FROM tblfinal WHERE SubjectId=$s12 AND StudentRoll='$sRoll' AND PaperId=$paid2 AND Term=2;";
												$result8 = mysqli_query( $conn, $sql8 );
												$row8 = mysqli_fetch_assoc( $result8 );
												$botp22=$row8[ 'fn1' ];
//											bot end
//										mt start
												$sql9 = "SELECT FinalMark AS fn1 FROM tblfinalmt WHERE SubjectId=$s12 AND StudentRoll='$sRoll' AND PaperId=$paid2 AND Term=2;";
												$result9 = mysqli_query( $conn, $sql9 );
												$row9 = mysqli_fetch_assoc( $result9 );
												$mtp22=$row9[ 'fn1' ];
//											mt end
//											eot start
												$sql10 = "SELECT FinalMark AS fn1 FROM tblfinaleot WHERE SubjectId=$s12 AND StudentRoll='$sRoll' AND PaperId=$paid2 AND Term=2;";
												$result10 = mysqli_query( $conn, $sql10 );
												$row10 = mysqli_fetch_assoc( $result10 );
												$eotp22=$row10[ 'fn1' ];
//											eot end
//											paper 2 end
//											paper 3 start
//											bot start
												$paid3 = $paid[ 2 ];
												if($paid3==""){
													$botp32="";
													$mtp32="";
													$eotp32="";
												}else{
												$sql11 = "SELECT FinalMark AS fn1 FROM tblfinal WHERE SubjectId=$s12 AND StudentRoll='$sRoll' AND PaperId=$paid3 AND Term=2;";
												$result11 = mysqli_query( $conn, $sql11 );
												$row11 = mysqli_fetch_assoc( $result11 );
												$botp32=$row11[ 'fn1' ];
//											bot end
//											mt start
											$sql12 = "SELECT FinalMark AS fn1 FROM tblfinalmt WHERE SubjectId=$s12 AND StudentRoll='$sRoll' AND PaperId=$paid3 AND Term=2;";
												$result12 = mysqli_query( $conn, $sql12 );
												$row12 = mysqli_fetch_assoc( $result12 );
												$mtp32=$row12[ 'fn1' ];
//											mt end
//											eot start
												$sql13 = "SELECT FinalMark AS fn1 FROM tblfinaleot WHERE SubjectId=$s12 AND StudentRoll='$sRoll' AND PaperId=$paid3 AND Term=2;";
												$result13 = mysqli_query( $conn, $sql13 );
												$row13 = mysqli_fetch_assoc( $result13 );
												$eotp32=$row13[ 'fn1' ];
												}
//											eot end
//											paper 3 end
//											total for bot
											if($botp32==""){
												$botp32=0;
											}
											$avgb=$botp12+$botp22+$botp32;
												if($botp32==0){
												$botp32="";
											}
//											total for mt
											if($mtp32==""){
												$mtp32=0;
											}
											$avgb2=$mtp12+$mtp22+$mtp32;
												if($mtp32==0){
												$mtp32="";
											}
//											total for eot
											if($eotp32==""){
												$eotp32=0;
											}
											$avgb3=$eotp12+$eotp22+$eotp32;
											if($eotp32==0){
												$eotp32="";
											}
											$avgs1=($avgb+$avgb2+$avgb3)/3;
if($avgb==""){
$gr2="";
												}else if($avgb >=0 && $avgb <=39){
											$gr2= "F9";
											}else if($avgb >=40 && $avgb <=44){
											$gr2= "P8";
											}else if($avgb >=45 && $avgb <=49){
											$gr2= "P7";
											}else if($avgb >=50 && $avgb <=54){
											$gr2= "C6";
											}else if($avgb >=55 && $avgb <=59){
											$gr2= "C5";
											}else if($avgb >=60 && $avgb <=65){
											$gr2= "C4";
											}else if($avgb >=66 && 
													 $avgb <=74){
											$gr2= "C3";
											}else if($avgb >=75 && 
													 $avgb <=79){
											$gr2= "D2";
											}else if($avgb >=80){
											$gr2= "D1";
											}
if($avgb2==""){
$grm22="";
												}else if($avgb2 >=0 && $avgb2 <=39){
											$grm22= "F9";
											}else if($avgb2 >=40 && $avgb2 <=44){
											$grm22= "P8";
											}else if($avgb2 >=45 && $avgb2 <=49){
											$grm22= "P7";
											}else if($avgb2 >=50 && $avgb2 <=54){
											$grm22= "C6";
											}else if($avgb2 >=55 && $avgb2 <=59){
											$grm22= "C5";
											}else if($avgb2 >=60 && $avgb2 <=65){
											$grm22= "C4";
											}else if($avgb2 >=66 && 
													 $avgb2 <=74){
											$grm22= "C3";
											}else if($avgb2 >=75 && 
													 $avgb2 <=79){
											$grm22= "D2";
											}else if($avgb2 >=80){
											$grm22= "D1";
											}
if($avgb3==""){
$gre12="";
												}else if($avgb3 >=0 && $avgb3 <=39){
											$gre12= "F9";
											}else if($avgb3 >=40 && $avgb3 <=44){
											$gre12= "P8";
											}else if($avgb3 >=45 && $avgb3 <=49){
											$gre12= "P7";
											}else if($avgb3 >=50 && $avgb3 <=54){
											$gre12= "C6";
											}else if($avgb3 >=55 && $avgb3 <=59){
											$gre12= "C5";
											}else if($avgb3 >=60 && $avgb3 <=65){
											$gre12= "C4";
											}else if($avgb3 >=66 && 
													 $avgb3 <=74){
											$gre12= "C3";
											}else if($avgb3 >=75 && 
													 $avgb3 <=79){
											$gre12= "D2";
											}else if($avgb3 >=80){
											$gre12= "D1";
											}
if($avgs1==""){
													$pp2=0;
													$tp2=0;
												}else if($avgs1 >=0 && $avgs1 <=39){
											
													$g2='F';
													$pp2=0;
													$tp2=0;
											}else if($avgs1 >=40 && $avgs1 <=44){
											
													$g2='O';
													$pp2=0;
													$tp2=1;
											}else if($avgs1 >=45 && $avgs1 <=55){
											
													$g2='E';
													$pp2=1;
													$tp2=2;
											}else if($avgs1 >=56 && $avgs1 <=65){
											
													$g2='D';
													$pp2=1;
													$tp2=3;
											}else if($avgs1 >=66 && 
													 $avgs1 <=74){
											
													$g2='C';
													$pp2=1;
													$tp2=4;
											}else if($avgs1 >=75 && 
													 $avgs1 <=79){
											
													$g2='B';
													$pp2=1;
													$tp2=5;
											}else if($avgs1 >=80){
											
													$g2='A';
													$pp2=1;
													$tp2=6;
											}
$gg2[]=$g2;
											$tmp = array_count_values($gg2);
											$cnt = $tmp[$g2];
											if($cnt == 1){
												if($g2 == "A"){
												$cm12= "Keep this up";
												}else if($g2 == "B"){
												$cm12= "Good work";
												}else if($g2 == "C"){
												$cm12= "Fairly good work";
												}else if($g2 == "D"){
												$cm12= "You can do better";
												}else if($g2 == "O"){
												$cm12= "Aim higher";
												}else if($g2 == "E"){
												$cm12= "Work more harder";
												}else if($g2 == "F"){
												$cm12= "Tripple your effort";
												}
												} else if($cnt == 2){
												if($g2 == "A"){
												$cm12= "Very impressive work";
												}else if($g2 == "B"){
												$cm12= "Determined student";
												}else if($g2 == "C"){
												$cm12= "You are getting there";
												}else if($g2 == "D"){
												$cm12= "average performance";
												}else if($g2 == "O"){
												$cm12= "You can achieve more";
												}else if($g2 == "E"){
												$cm12= "Concentrate on studies";
												}else if($g2 == "F"){
												$cm12= "Pull up";
												}
												}
//Subject three start
$sql3 = "SELECT tblsubjects.SubjectName,tblsubjects.id FROM tblsubjects join tblacombination on tblacombination.SubjectId3=tblsubjects.id inner join tblastudents on tblastudents.CombinationId=tblacombination.id  WHERE tblastudents.RollNo='$sRoll';";
												$result3 = mysqli_query( $conn, $sql3 );
												$row3 = mysqli_fetch_assoc( $result3 );
												$s13 = $row3[ 'id' ];
												$sub3= $row3[ 'SubjectName' ];
$sid = $row3[ 'id' ];
												$sql4 = "SELECT PaperName,tblpapers.id FROM tblPapers join tblsubjects on tblsubjects.id=tblpapers.SubjectId WHERE tblpapers.Status=1 AND tblsubjects.id=$s13";
												$result4 = mysqli_query( $conn, $sql4 );
												$pa = array();
												$paid = array();
												while ( $row4 = mysqli_fetch_assoc( $result4 ) ) {
													$pa[] = $row4[ 'PaperName' ];
													$paid[] = $row4[ 'id' ];
												}
												$pa[] = "";
												$paid[]="";
												$paper13= $pa[ 0 ];
												$paper23= $pa[ 1 ];
												$paper33= $pa[ 2 ];
											//											paper1 marks start
											//											bot marks start
												$paid1 = $paid[ 0 ];
												$sql5 = "SELECT FinalMark AS fn1 FROM tblfinal WHERE SubjectId=$s13 AND StudentRoll='$sRoll' AND PaperId=$paid1 AND Term=2;";
												$result5 = mysqli_query( $conn, $sql5 );
												$row5 = mysqli_fetch_assoc( $result5 );
												$botp13=$row5[ 'fn1' ];
//											bot end
											
//											mt start
											$sql6 = "SELECT FinalMark AS fn1 FROM tblfinalmt WHERE SubjectId=$s13 AND StudentRoll='$sRoll' AND PaperId=$paid1 AND Term=2;";
												$result6 = mysqli_query( $conn, $sql6 );
												$row6 = mysqli_fetch_assoc( $result6 );
												$mtp13=$row6[ 'fn1' ];
//											mt end
//											eot start
											$sql7 = "SELECT FinalMark AS fn1 FROM tblfinaleot WHERE SubjectId=$s13 AND StudentRoll='$sRoll' AND PaperId=$paid1 AND Term=2;";
												$result7 = mysqli_query( $conn, $sql7 );
												$row7 = mysqli_fetch_assoc( $result7 );
												$eotp13=$row7[ 'fn1' ];
//											eot end
//											paper 1 marks end
//											paper 2 start
//											bot start
											$paid2 = $paid[1];
												$sql8 = "SELECT FinalMark AS fn1 FROM tblfinal WHERE SubjectId=$s13 AND StudentRoll='$sRoll' AND PaperId=$paid2 AND Term=2;";
												$result8 = mysqli_query( $conn, $sql8 );
												$row8 = mysqli_fetch_assoc( $result8 );
												$botp23=$row8[ 'fn1' ];
//											bot end
//										mt start
												$sql9 = "SELECT FinalMark AS fn1 FROM tblfinalmt WHERE SubjectId=$s13 AND StudentRoll='$sRoll' AND PaperId=$paid2 AND Term=2;";
												$result9 = mysqli_query( $conn, $sql9 );
												$row9 = mysqli_fetch_assoc( $result9 );
												$mtp23=$row9[ 'fn1' ];
//											mt end
//											eot start
												$sql10 = "SELECT FinalMark AS fn1 FROM tblfinaleot WHERE SubjectId=$s13 AND StudentRoll='$sRoll' AND PaperId=$paid2 AND Term=2;";
												$result10 = mysqli_query( $conn, $sql10 );
												$row10 = mysqli_fetch_assoc( $result10 );
												$eotp23=$row10[ 'fn1' ];
//											eot end
//											paper 2 end
//											paper 3 start
//											bot start
												$paid3 = $paid[ 2 ];
												if($paid3==""){
													$botp33="";
													$mtp33="";
													$eotp33="";
												}else{
												$sql11 = "SELECT FinalMark AS fn1 FROM tblfinal WHERE SubjectId=$s13 AND StudentRoll='$sRoll' AND PaperId=$paid3 AND Term=2;";
												$result11 = mysqli_query( $conn, $sql11 );
												$row11 = mysqli_fetch_assoc( $result11 );
													$botp33=$row11[ 'fn1' ];
//											bot end
//											mt start
											$sql12 = "SELECT FinalMark AS fn1 FROM tblfinalmt WHERE SubjectId=$s13 AND StudentRoll='$sRoll' AND PaperId=$paid3 AND Term=2;";
												$result12 = mysqli_query( $conn, $sql12 );
												$row12 = mysqli_fetch_assoc( $result12 );
													$mtp33=$row12[ 'fn1' ];
//											mt end
//											eot start
												$sql13 = "SELECT FinalMark AS fn1 FROM tblfinaleot WHERE SubjectId=$s13 AND StudentRoll='$sRoll' AND PaperId=$paid3 AND Term=2;";
												$result13 = mysqli_query( $conn, $sql13 );
												$row13 = mysqli_fetch_assoc( $result13 );
													$eotp33=$row13[ 'fn1' ];
												}
//											eot end
//											paper 3 end
//											total for bot
											if($botp33==""){
												$botp33=0;
											}
											$avgc=$botp13+$botp23+$botp33;
												if($botp33==0){
												$botp33="";
											}
//											total for mt
											if($mtp33==""){
												$mtp33=0;
											}
											$avgc2=$mtp13+$mtp23+$mtp33;
												if($mtp33==0){
												$mtp33="";
											}
//											total for eot
											if($eotp33==""){
												$eotp33=0;
											}
											$avgc3=$eotp13+$eotp23+$eotp33;
											if($eotp33==0){
												$eotp33="";
											}
											$avgs3=($avgc+$avgc2+$avgc3)/3;
if($avgc==""){
$gr3="";
												}else if($avgc >=0 && $avgc <=39){
											$gr3= "F9";
											}else if($avgc >=40 && $avgc <=44){
											$gr3= "P8";
											}else if($avgc >=45 && $avgc <=49){
											$gr3= "P7";
											}else if($avgc >=50 && $avgc <=54){
											$gr3= "C6";
											}else if($avgc >=55 && $avgc <=59){
											$gr3= "C5";
											}else if($avgc >=60 && $avgc <=65){
											$gr3= "C4";
											}else if($avgc >=66 && 
													 $avgc <=74){
											$gr3= "C3";
											}else if($avgc >=75 && 
													 $avgc <=79){
											$gr3= "D2";
											}else if($avgc >=80){
											$gr3= "D1";
											}
if($avgc2==""){
$grm23="";
												}else if($avgc2 >=0 && $avgc2 <=39){
											$grm23= "F9";
											}else if($avgc2 >=40 && $avgc2 <=44){
											$grm23= "P8";
											}else if($avgc2 >=45 && $avgc2 <=49){
											$grm23= "P7";
											}else if($avgc2 >=50 && $avgc2 <=54){
											$grm23= "C6";
											}else if($avgc2 >=55 && $avgc2 <=59){
											$grm23= "C5";
											}else if($avgc2 >=60 && $avgc2 <=65){
											$grm23= "C4";
											}else if($avgc2 >=66 && 
													 $avgc2 <=74){
											$grm23= "C3";
											}else if($avgc2 >=75 && 
													 $avgc2 <=79){
											$grm23= "D2";
											}else if($avgc2 >=80){
											$grm23= "D1";
											}
if($avgc3==""){
$gre13="";
												}else if($avgc3 >=0 && $avgc3 <=39){
											$gre13= "F9";
											}else if($avgc3 >=40 && $avgc3 <=44){
											$gre13= "P8";
											}else if($avgc3 >=45 && $avgc3 <=49){
											$gre13= "P7";
											}else if($avgc3 >=50 && $avgc3 <=54){
											$gre13= "C6";
											}else if($avgc3 >=55 && $avgc3 <=59){
											$gre13= "C5";
											}else if($avgc3 >=60 && $avgc3 <=65){
											$gre13= "C4";
											}else if($avgc3 >=66 && 
													 $avgc3 <=74){
											$gre13= "C3";
											}else if($avgc3 >=75 && 
													 $avgc3 <=79){
											$gre13= "D2";
											}else if($avgc3 >=80){
											$gre13= "D1";
											}
	if($avgs3==""){
													$pp3=0;
													$tp3=0;
												}else if($avgs3 >=0 && $avgs3 <=39){
											
													$g3='F';
													$pp3=0;
													$tp3=0;
											}else if($avgs3 >=40 && $avgs3 <=44){
											
													$g3='O';
													$pp3=0;
													$tp3=1;
											}else if($avgs3 >=45 && $avgs3 <=55){
											
													$g3='E';
													$pp3=1;
													$tp3=2;
											}else if($avgs3 >=56 && $avgs3 <=65){
											
													$g3='D';
													$pp3=1;
													$tp3=3;
											}else if($avgs3 >=66 && 
													 $avgs3 <=74){
											
													$g3='C';
													$pp3=1;
													$tp3=4;
											}else if($avgs3 >=75 && 
													 $avgs3 <=79){
											
													$g3='B';
													$pp3=1;
													$tp3=5;
											}else if($avg >=80){
											
													$g3='A';
													$pp3=1;
													$tp3=6;
											}
$gg2[]=$g3;
											$tmp = array_count_values($gg2);
											$cnt = $tmp[$g3];
											if($cnt == 1){
												if($g3 == "A"){
												$cm13= "Keep this up";
												}else if($g3 == "B"){
												$cm13= "Good work";
												}else if($g3 == "C"){
												$cm13= "Fairly good work";
												}else if($g3 == "D"){
												$cm13= "You can do better";
												}else if($g3 == "O"){
												$cm13= "Aim higher";
												}else if($g3 == "E"){
												$cm13= "Work more harder";
												}else if($g3 == "F"){
												$cm13= "Tripple your effort";
												}

												} else if($cnt == 2){
												if($g2 == "A"){
												$cm13= "Very impressive work";
												}else if($g2 == "B"){
												$cm13= "Determined student";
												}else if($g2 == "C"){
												$cm13= "You are getting there";
												}else if($g2 == "D"){
												$cm13= "average performance";
												}else if($g2 == "O"){
												$cm13= "You can achieve more";
												}else if($g2 == "E"){
												$cm13= "Concentrate on studies";
												}else if($g2 == "F"){
												$cm13= "Pull up";
												}
												} else if($cnt == 3){
												if($g2 == "A"){
												$cm13= "Excellent Work";
												}else if($g2 == "B"){
												$cm13= "Keep on with the smart work";
												}else if($g2 == "C"){
												$cm13= "You can do it";
												}else if($g2 == "D"){
												$cm13= "Never give up";
												}else if($g2 == "O"){
												$cm13= "Read more";
												}else if($g2 == "E"){
												$cm13= "Work harder than this";
												}else if($g2 == "F"){
												$cm13= "Always consult";
												}
												}
//Subsidiary
$sql9= "SELECT tblsubjects.SubjectCode,tblsubjects.id FROM tblsubjects join tblacombination on tblacombination.Subsidiary=tblsubjects.id inner join tblastudents on tblastudents.CombinationId=tblacombination.id  WHERE tblastudents.RollNo='$sRoll';";
												$result9 = mysqli_query( $conn, $sql9 );
												$row9 = mysqli_fetch_assoc( $result9 );
												$s1s = $row9[ 'id' ];

												$subsi= $row9['SubjectCode'] ;
$sql4 = "SELECT PaperName,tblpapers.id FROM tblPapers join tblsubjects on tblsubjects.id=tblpapers.SubjectId WHERE tblpapers.Status=1 AND tblsubjects.id=$s1s";
												$result4 = mysqli_query( $conn, $sql4 );
												$pa = array();
												$paidz = array();
												while ( $row4 = mysqli_fetch_assoc( $result4 ) ) {
													$pa[] = $row4[ 'PaperName' ];
													$paidz[] = $row4[ 'id' ];
												}
$pa[]="";
$paidz[]="";
												$paper1s= $pa[ 0 ];
												$paper2s= $pa[ 1 ];
													$paidz1 = $paidz[0];
//											bot paper1
												$sql5 = "SELECT tblfinal.FinalMark FROM tblfinal WHERE StudentRoll='$sRoll' AND Term=2 AND Year=$years AND SubjectId=$s1s AND Paperid=$paidz1";
												$result5 = mysqli_query( $conn, $sql5 );
												$row5 = mysqli_fetch_assoc( $result5 );
												$botp1s=$row5['FinalMark'];
//											mt paper 1
											$sql6 = "SELECT tblfinalmt.FinalMark FROM tblfinalmt WHERE StudentRoll='$sRoll' AND Term=2 AND Year=$years AND SubjectId=$s1s AND Paperid=$paidz1";
												$result6 = mysqli_query( $conn, $sql6 );
												$row6 = mysqli_fetch_assoc( $result6 );
												$mtp1s=$row6['FinalMark'];
//											eot paper1
											$sql7 = "SELECT tblfinaleot.FinalMark FROM tblfinaleot WHERE StudentRoll='$sRoll' AND Term=2 AND Year=$years AND SubjectId=$s1s AND Paperid=$paidz1";
												$result7 = mysqli_query( $conn, $sql7 );
												$row7 = mysqli_fetch_assoc( $result7 );
												$eotp1s=$row7['FinalMark'];
											$paid2 = $paidz[1];
											if($paid2==""){
												$botp2s="";
												$mtp2s="";
												$eotp2s="";
											}else{
//											bot paper2
												$sql8 = "SELECT tblfinal.FinalMark FROM tblfinal WHERE StudentRoll='$sRoll' AND Term=2 AND Year=$years AND SubjectId=$s1s AND Paperid=$paid2";
												$result8 = mysqli_query( $conn, $sql8 );
												$row8 = mysqli_fetch_assoc( $result8 );
												$botp2s=$row8['FinalMark'];
//											mt paper 2
											$sql9 = "SELECT tblfinalmt.FinalMark FROM tblfinalmt WHERE StudentRoll='$sRoll' AND Term=2 AND Year=$years AND SubjectId=$s1s AND Paperid=$paid2";
												$result9 = mysqli_query( $conn, $sql9 );
												$row9 = mysqli_fetch_assoc( $result9 );
												$mtp2s=$row9['FinalMark'];
//											eot paper2
											$sql10 = "SELECT tblfinaleot.FinalMark FROM tblfinaleot WHERE StudentRoll='$sRoll' AND Term=2 AND Year=$years AND SubjectId=$s1s AND Paperid=$paid2";
												$result10 = mysqli_query( $conn, $sql10 );
												$row10 = mysqli_fetch_assoc( $result10 );
												$eotp2s=$row10['FinalMark'];
											}
//											total for bot
											$m1= $row5[ 'FinalMark' ];
											$m2= $row8[ 'FinalMark' ];
											if($m2==""){
												$m2=0;
											}
											$avg2=$m1+$m2;
												if($m2==0){
												$m2="";
											}
//											total for mt
											$m1= $row6[ 'FinalMark' ];
											$m2= $row9[ 'FinalMark' ];
											if($m2==""){
												$m2=0;
											}
											$avg22=$m1+$m2;
												if($m2==0){
												$m2="";
											}
//											total for eot
											$m1= $row7[ 'FinalMark' ];
											$m2= $row10[ 'FinalMark' ];
											if($m2==""){
												$m2=0;
											}
											$avg32=$m1+$m2;
												if($m2==0){
												$m2="";
											}
											$finalavg=($avg2+$avg22+$avg32)/3;
											if($finalavg>=50){
												$ss=1;
											}else{
												$ss=0;
											}
if($ss==1){
													$ssc= "Good work done";
												}else{
													$ssc= "Practise more";
												}
if($avg2==""){
$grs="";
												}else if($avg2 >=0 && $avg2 <=39){
											$grs= "F9";
											}else if($avg2 >=40 && $avg2 <=44){
											$grs= "P8";
											}else if($avg2 >=45 && $avg2 <=49){
											$grs= "P7";
											}else if($avg2 >=50 && $avg2 <=54){
											$grs= "C6";
											}else if($avg2 >=55 && $avg2 <=59){
											$grs= "C5";
											}else if($avg2 >=60 && $avg2 <=65){
											$grs= "C4";
											}else if($avg2 >=66 && 
													 $avg2 <=74){
											$grs= "C3";
											}else if($avg2 >=75 && 
													 $avg2 <=79){
											$grs= "D2";
											}else if($avg2 >=80){
											$grs= "D1";
											}
if($avg22==""){
$grs2="";
												}else if($avg22 >=0 && $avg22 <=39){
											$grs2= "F9";
											}else if($avg22 >=40 && $avg22 <=44){
											$grs2= "P8";
											}else if($avg22 >=45 && $avg22 <=49){
											$grs2= "P7";
											}else if($avg22 >=50 && $avg22 <=54){
											$grs2= "C6";
											}else if($avg22 >=55 && $avg22 <=59){
											$grs2= "C5";
											}else if($avg22 >=60 && $avg22 <=65){
											$grs2= "C4";
											}else if($avg22 >=66 && 
													 $avg22 <=74){
											$grs2= "C3";
											}else if($avg22 >=75 && 
													 $avg22 <=79){
											$grs2= "D2";
											}else if($avg22 >=80){
											$grs2= "D1";
											}
if($avg32==""){
$grs3="";
												}else if($avg32 >=0 && $avg32 <=39){
											$grs3= "F9";
											}else if($avg32 >=40 && $avg32 <=44){
											$grs3= "P8";
											}else if($avg32 >=45 && $avg32 <=49){
											$grs3= "P7";
											}else if($avg32 >=50 && $avg32 <=54){
											$grs3= "C6";
											}else if($avg32 >=55 && $avg32 <=59){
											$grs3= "C5";
											}else if($avg32 >=60 && $avg32 <=65){
											$grs3= "C4";
											}else if($avg32 >=66 && 
													 $avg32 <=74){
											$grs3= "C3";
											}else if($avg32 >=75 && 
													 $avg32 <=79){
											$grs3= "D2";
											}else if($avg32 >=80){
											$grs3= "D1";
											}
//General paper
$sql9= "SELECT tblsubjects.SubjectCode,tblsubjects.id FROM tblsubjects join tblacombination on tblacombination.GP=tblsubjects.id inner join tblastudents on tblastudents.CombinationId=tblacombination.id  WHERE tblastudents.RollNo='$sRoll';";
												$result9 = mysqli_query( $conn, $sql9 );
												$row9 = mysqli_fetch_assoc( $result9 );
												$s1 = $row9[ 'id' ];

												$gp= $row9['SubjectCode'] ;
$sql4 = "SELECT PaperName,tblpapers.id FROM tblPapers join tblsubjects on tblsubjects.id=tblpapers.SubjectId WHERE tblpapers.Status=1 AND tblsubjects.id=$s1";
												$result4 = mysqli_query( $conn, $sql4 );
												$pa = array();
												$paid = array();
												while ( $row4 = mysqli_fetch_assoc( $result4 ) ) {
													$pa[] = $row4[ 'PaperName' ];
													$paid[] = $row4[ 'id' ];
												}
$paid1 = $paid[ 0 ];
												$sql5 = "SELECT tblresult.Marks FROM tblresult WHERE StudentRoll='$sRoll' AND Term=2 AND Year=$years AND SubjectId=$s1 AND Paperid=$paid1";
												$result5 = mysqli_query( $conn, $sql5 );
												$row5 = mysqli_fetch_assoc( $result5 );
												$botgp= $row5[ 'Marks' ];
$avg6 = $row5[ 'Marks' ];
												if($avg6==""){
$grg1="";
												}else if($avg6 >=0 && $avg6 <=39){
											$grg1= "F9";
											}else if($avg6 >=40 && $avg6 <=44){
											$grg1= "P8";
											}else if($avg6 >=45 && $avg6 <=49){
											$grg1= "P7";
											}else if($avg6 >=50 && $avg6 <=54){
											$grg1= "C6";
											}else if($avg6 >=55 && $avg6 <=59){
											$grg1= "C5";
											}else if($avg6 >=60 && $avg6 <=65){
											$grg1= "C4";
											}else if($avg6 >=66 && 
													 $avg6 <=74){
											$grg1= "C3";
											}else if($avg6 >=75 && 
													 $avg6 <=79){
											$grg1= "D2";
											}else if($avg6 >=80){
											$grg1= "D1";
											}

												$sql5 = "SELECT tblresultmt.Marks FROM tblresultmt WHERE StudentRoll='$sRoll' AND Term=2 AND Year=$years AND SubjectId=$s1 AND Paperid=$paid1";
												$result5 = mysqli_query( $conn, $sql5 );
												$row5 = mysqli_fetch_assoc( $result5 );
												$mtgp= $row5[ 'Marks' ];
$avg7 = $row5[ 'Marks' ];
												if($avg6==""){
$grg2="";
												}else if($avg7 >=0 && $avg7 <=39){
											$grg2= "F9";
											}else if($avg7 >=40 && $avg7 <=44){
											$grg2= "P8";
											}else if($avg7 >=45 && $avg7 <=49){
											$grg2= "P7";
											}else if($avg7 >=50 && $avg7 <=54){
											$grg2= "C6";
											}else if($avg7 >=55 && $avg7 <=59){
											$grg2= "C5";
											}else if($avg7 >=60 && $avg7 <=65){
											$grg2= "C4";
											}else if($avg7 >=66 && 
													 $avg7 <=74){
											$grg2= "C3";
											}else if($avg7 >=75 && 
													 $avg7 <=79){
											$grg2= "D2";
											}else if($avg7 >=80){
											$grg2= "D1";
											}

$sql5 = "SELECT tblresulteot.Marks FROM tblresulteot WHERE StudentRoll='$sRoll' AND Term=2 AND Year=$years AND SubjectId=$s1 AND Paperid=$paid1";
												$result5 = mysqli_query( $conn, $sql5 );
												$row5 = mysqli_fetch_assoc( $result5 );
												$eotgp= $row5[ 'Marks' ];

$avg8 = $row5[ 'Marks' ];
$avggp=($avg6+$avg8+$avg7)/3;
if($avggp>=50){
	$mgp=1;
}else{
	$mgp=0;
}
if($mgp==1){
													$gpc= "Congratulations";
												}else{
													$gpc= "Work smarter";
												}

												if($avggp==""){
$grg3="";
												}else if($avg8 >=0 && $avg8 <=39){
											$grg3= "F9";
											}else if($avg8 >=40 && $avg8 <=44){
											$grg3= "P8";
											}else if($avg8 >=45 && $avg8 <=49){
											$grg3= "P7";
											}else if($avg8 >=50 && $avg8 <=54){
											$grg3= "C6";
											}else if($avg8 >=55 && $avg8 <=59){
											$grg3= "C5";
											}else if($avg8 >=60 && $avg8 <=65){
											$grg3= "C4";
											}else if($avg8 >=66 && 
													 $avg8 <=74){
											$grg3= "C3";
											}else if($avg8 >=75 && 
													 $avg8 <=79){
											$grg3= "D2";
											}else if($avg8 >=80){
											$grg3= "D1";
											}
$tpp=$pp1+$pp2+$pp3;
$tss=$mgp+$ss;
$ttp=$tp1+$tp2+$tp3+$tss;
if($ttp >= 15){
												$ctc= "Keep the good work up";
											}else if($ttp >=10 && $ttp <= 14){
												$ctc= "Keep pushing, you will make it";
											}else if($ttp >=7 && $ttp <= 9){
												$ctc= "Settle for academics and get better results";
											}else if($ttp <= 6){
												$ctc= "Consult your teachers always";
											}
if($ttp >= 15){
												$htc= "Continue achieving good grades, nice work";
											}else if($ttp >=10 && $ttp <= 14){
												$htc= "This is promising";
											}else if($ttp >=7 && $ttp <= 9){
												$htc= "Tighten your stockings when it comes to  academics";
											}else if($ttp <= 6){
												$htc= "Alot more effort and seriousness is needed";
											}
$sql="SELECT Fees FROM tblfees WHERE StudentRoll='$sRoll' AND Term=1 AND Year=$years";
											$result=mysqli_query($conn,$sql);
											$row=mysqli_fetch_assoc($result);
											$paid=$row['Fees'];
											$sql1="SELECT fees FROM tblastudents WHERE RollNo='$sRoll';";
											$result1=mysqli_query($conn,$sql1);
											$row1=mysqli_fetch_assoc($result1);
											$money=$row1['fees'];
											$bal=$money-$paid;
											if($bal <= 0){
												$fs= "0";
											}else{
												$fs= $bal;
											}
$sql="SELECT nxtdate FROM tblnxtdate ORDER BY id DESC ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$dt= $row['nxtdate'];

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
$pdf->Cell(70,5,$ct,0,0);$pdf->Cell(50,5,'Term: One',0,0);$pdf->Cell(50,5,$gd,0,1);
//dummy cells for space
$pdf->Cell(70,5,'',0,0);$pdf->Cell(50,5,'',0,0);$pdf->Cell(50,5,'',0,1);
//start of table header
$pdf->SetFillColor(21,21,21);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(48,10,'Subject',1,0,'L',true);
$pdf->Cell(18,10,'B.O.T',1,0,'C',true);
$pdf->Cell(10,10,'#',1,0,'C',true);
$pdf->Cell(18,10,'M.T',1,0,'C',true);
$pdf->Cell(10,10,'#',1,0,'C',true);
$pdf->Cell(18,10,'E.O.T',1,0,'C',true);$pdf->Cell(10,10,'#',1,0,'C',true);
$pdf->Cell(18,10,'Grade',1,0,'C',true);$pdf->Cell(40,10,'Remarks',1,1,'C',true);
//start of table content
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',11);
//first paper
$pdf->Cell(38,30,$sub1,1,0,'L',true);
//paper 1
$pdf->Cell(10,10,$paper1,1,0,'L',true);
$pdf->Cell(18,10,$botp1,1,0,'C',true);$pdf->Cell(10,10,$gr,1,0,'L',true);
$pdf->Cell(18,10,$mtp1,1,0,'C',true);$pdf->Cell(10,10,$grm1,1,0,'L',true);
$pdf->Cell(18,10,$eotp1,1,0,'C',true);$pdf->Cell(10,10,$gre1,1,0,'C',true);
$pdf->SetFont('Arial','',18);$pdf->Cell(18,30,$g,1,0,'C',true);
$pdf->SetFont('Arial','',11);$pdf->Cell(40,30,$cm1,1,1,'C',true);
//second paper
$pdf->Cell(38,30,$sub2,1,0,'L',true);
//paper 1
$pdf->Cell(10,10,$paper12,1,0,'L',true);
$pdf->Cell(18,10,$botp12,1,0,'C',true);$pdf->Cell(10,10,$gr2,1,0,'L',true);
$pdf->Cell(18,10,$mtp12,1,0,'C',true);$pdf->Cell(10,10,$grm22,1,0,'L',true);
$pdf->Cell(18,10,$eotp12,1,0,'C',true);$pdf->Cell(10,10,$gre12,1,0,'C',true);
$pdf->SetFont('Arial','',18);$pdf->Cell(18,30,$g2,1,0,'C',true);
$pdf->SetFont('Arial','',11);$pdf->Cell(40,30,$cm12,1,1,'C',true);
//third paper
$pdf->Cell(38,30,$sub3,1,0,'L',true);
//paper 1
$pdf->Cell(10,10,$paper13,1,0,'L',true);
$pdf->Cell(18,10,$botp13,1,0,'C',true);$pdf->Cell(10,10,$gr3,1,0,'L',true);
$pdf->Cell(18,10,$mtp13,1,0,'C',true);$pdf->Cell(10,10,$grm23,1,0,'L',true);
$pdf->Cell(18,10,$eotp12,1,0,'C',true);$pdf->Cell(10,10,$gre13,1,0,'C',true);
$pdf->SetFont('Arial','',18);$pdf->Cell(18,30,$g3,1,0,'C',true);
$pdf->SetFont('Arial','',11);$pdf->Cell(40,30,$cm13,1,1,'C',true);

//ict /submath
$pdf->Cell(38,20,$subsi,1,0,'L',true);
//paper 1
$pdf->Cell(10,10,$paper1s,1,0,'L',true);
$pdf->Cell(18,10,$botp1s,1,0,'C',true);$pdf->Cell(10,10,$grs,1,0,'L',true);
$pdf->Cell(18,10,$mtp1s,1,0,'C',true);$pdf->Cell(10,10,$grs2,1,0,'L',true);
$pdf->Cell(18,10,$eotp1s,1,0,'C',true);$pdf->Cell(10,10,$grs3,1,0,'C',true);
$pdf->SetFont('Arial','',18);$pdf->Cell(18,20,$ss,1,0,'C',true);
$pdf->SetFont('Arial','',11);$pdf->Cell(40,20,$ssc,1,1,'C',true);
//general paper
$pdf->Cell(38,10,$gp,1,0,'L',true);
//paper 1
$pdf->Cell(10,10,'',1,0,'L',true);
$pdf->Cell(18,10,$botgp,1,0,'C',true);$pdf->Cell(10,10,$grg1,1,0,'L',true);
$pdf->Cell(18,10,$mtgp,1,0,'C',true);$pdf->Cell(10,10,$grg2,1,0,'L',true);
$pdf->Cell(18,10,$eotgp,1,0,'C',true);$pdf->Cell(10,10,$grg3,1,0,'C',true);
$pdf->Cell(18,10,$mgp,1,0,'C',true);$pdf->Cell(40,10,$gpc,1,1,'C',true);	
//summary start
$pdf->Cell(50,10,'Principal Passes',1,0,'L',true);$pdf->Cell(50,10,'Subsidiary',1,0,'L',true);
$pdf->Cell(50,10,'Total Points',1,0,'L',true);$pdf->Cell(40,10,'','R,L,T',1,'C',true);
$pdf->Cell(50,10,$tpp,1,0,'L',true);$pdf->Cell(50,10,$tss,1,0,'L',true);
$pdf->Cell(50,10,$ttp,1,0,'L',true);$pdf->Cell(40,10,'','R,L,B',1,'C',true);
//dummy cell for  space
$pdf->Cell(190,9,'',1,1,'L',true);
$pdf->Cell(80,9,'Class Teacher\'s Comment',1,0,'L',true);$pdf->Cell(110,9,$ctc,1,1,'L',true);
$pdf->Cell(80,9,'Head Teacher\'s Comment',1,0,'L',true);$pdf->Cell(110,9,$htc,1,1,'L',true);
$pdf->Cell(80,9,'Unpaid fees',1,0,'L',true);$pdf->Cell(32,9,$fs,1,0,'C',true);
$pdf->Cell(50,9,'Next term begins on',1,0,'L',true);$pdf->Cell(28,9,$dt,1,1,'C',true);

$pdf->Cell(38,-66,'',0,1);
$pdf->Cell(38,-20,'',0,0);
//paper 2 for ict/sub math
$pdf->Cell(10,-10,$paper2s,1,0,'L',true);
$pdf->Cell(18,-10,$botp2s,1,0,'C',true);$pdf->Cell(10,-10,$grs,1,0,'L',true);
$pdf->Cell(18,-10,$mtp2s,1,0,'C',true);$pdf->Cell(10,-10,$grs2,1,0,'L',true);
$pdf->Cell(18,-10,$eotp2s,1,0,'C',true);$pdf->Cell(10,-10,$grs3,1,1,'C',true);

$pdf->Cell(38,-10,'',0,1);
$pdf->Cell(38,-20,'',0,0);
//paper 3 for third subject
$pdf->Cell(10,-10,$paper33,1,0,'L',true);
$pdf->Cell(18,-10,$botp33,1,0,'C',true);$pdf->Cell(10,-10,$gr3,1,0,'L',true);
$pdf->Cell(18,-10,$mtp33,1,0,'C',true);$pdf->Cell(10,-10,$grm23,1,0,'L',true);
$pdf->Cell(18,-10,$eotp33,1,0,'C',true);$pdf->Cell(10,-10,$gre13,1,1,'C',true);
$pdf->Cell(38,-16,'',0,0);
//paper 2 for third subject
$pdf->Cell(10,-10,$paper23,1,0,'L',true);
$pdf->Cell(18,-10,$botp23,1,0,'C',true);$pdf->Cell(10,-10,$gr3,1,0,'L',true);
$pdf->Cell(18,-10,$mtp23,1,0,'C',true);$pdf->Cell(10,-10,$grm23,1,0,'L',true);
$pdf->Cell(18,-10,$eotp23,1,0,'C',true);$pdf->Cell(10,-10,$gre13,1,1,'C',true);

$pdf->Cell(38,-10,'',0,1);
$pdf->Cell(38,-20,'',0,0);
//paper 3 for second subject
$pdf->Cell(10,-10,$paper32,1,0,'L',true);
$pdf->Cell(18,-10,$botp32,1,0,'C',true);$pdf->Cell(10,-10,$gr2,1,0,'L',true);
$pdf->Cell(18,-10,$mtp32,1,0,'C',true);$pdf->Cell(10,-10,$grm22,1,0,'L',true);
$pdf->Cell(18,-10,$eotp32,1,0,'C',true);$pdf->Cell(10,-10,$gre12,1,1,'C',true);
$pdf->Cell(38,-10,'',0,0);
//paper 2 for second subject
$pdf->Cell(10,-10,$paper22,1,0,'L',true);
$pdf->Cell(18,-10,$botp22,1,0,'C',true);$pdf->Cell(10,-10,$gr2,1,0,'L',true);
$pdf->Cell(18,-10,$mtp22,1,0,'C',true);$pdf->Cell(10,-10,$grm22,1,0,'L',true);
$pdf->Cell(18,-10,$eotp22,1,0,'C',true);$pdf->Cell(10,-10,$gre12,1,1,'C',true);

$pdf->Cell(38,-10,'',0,1);
$pdf->Cell(38,-20,'',0,0);
//paper 3 for first subject
$pdf->Cell(10,-10,$paper3,1,0,'L',true);
$pdf->Cell(18,-10,$botp3,1,0,'C',true);$pdf->Cell(10,-10,$gr,1,0,'L',true);
$pdf->Cell(18,-10,$mtp3,1,0,'C',true);$pdf->Cell(10,-10,$grm1,1,0,'L',true);
$pdf->Cell(18,-10,$eotp3,1,0,'C',true);$pdf->Cell(10,-10,$gre1,1,1,'C',true);
$pdf->Cell(38,-10,'',0,0);
//paper 2 for first subject
$pdf->Cell(10,-10,$paper2,1,0,'L',true);
$pdf->Cell(18,-10,$botp2,1,0,'C',true);$pdf->Cell(10,-10,$gr,1,0,'L',true);
$pdf->Cell(18,-10,$mtp2,1,0,'C',true);$pdf->Cell(10,-10,$grm1,1,0,'L',true);
$pdf->Cell(18,-10,$eotp2,1,0,'C',true);$pdf->Cell(10,-10,$gre1,1,1,'C',true);


$pdf->Output();
?>