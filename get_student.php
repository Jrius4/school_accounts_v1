<?php
session_start();
include( 'includes/db.php' );
// Code for Subjects
if ( !empty( $_POST[ "classid1" ] ) ) {
	$cid1 = intval( $_POST[ 'classid1' ] );
	$_SESSION[ 'cid1' ] = $cid1;
	if ( !is_numeric( $cid1 ) ) {

		echo htmlentities( "invalid Class" );
		exit;
	} else {
		$status = 0;
		$tid = $_SESSION[ 'tid' ];
		?>
		<option value="">Select Category</option>
		<?php
		if ( $cid1 == 1 || $cid1 == 2 || $cid1 == 3 || $cid1 == 4 ) {
			$stmt = "SELECT tblsubjects.SubjectName,tblsubjects.id,tblsubjects.Level FROM teachersubjectcombination join tblsubjects on tblsubjects.id=teachersubjectcombination.SubjectId WHERE teachersubjectcombination.Level='O-Level' AND teachersubjectcombination.TeacherId=$tid AND teachersubjectcombination.Status!=$status order by tblsubjects.SubjectName;";
			$resultsmtnt = mysqli_query( $conn, $stmt );
			while ( $rows = mysqli_fetch_assoc( $resultsmtnt ) ) {
				?>

				<option value="<?php echo $rows['id'] ?>">
					<?php echo $rows['SubjectName']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rows['Level'] ?>
				</option>

				<?php
			}
		} else {

			$stmt1 = "SELECT tblsubjects.SubjectName,tblsubjects.id,tblsubjects.Level FROM teachersubjectcombination join tblsubjects on tblsubjects.id=teachersubjectcombination.SubjectId WHERE teachersubjectcombination.Level='A-Level' AND teachersubjectcombination.TeacherId=$tid AND teachersubjectcombination.Status!=$status order by tblsubjects.SubjectName;";
			$resultsmtnt1 = mysqli_query( $conn, $stmt1 );
			while ( $rows1 = mysqli_fetch_assoc( $resultsmtnt1 ) ) {
				?>

				<option value="<?php echo $rows1['id'] ?>">
					<?php echo $rows1['SubjectName']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$rows1['Level'] ?>
				</option>
				<?php
			}
		}
	}
}
?>

<!--Code for Papers-->
<?php
if ( !empty( $_POST[ "subjectid" ] ) ) {
	$sid = intval( $_POST[ 'subjectid' ] );
	if ( !is_numeric( $sid ) ) {

		echo "invalid Subject";
		exit();
	} else {
		$status = 0;
		$stmt2 = "SELECT tblpapers.PaperName,tblPapers.id FROM tblpapers join tblsubjects on tblsubjects.id=tblpapers.SubjectId WHERE tblpapers.SubjectId=$sid and tblpapers.Status!=$status order by tblpapers.PaperName;";
		$resultsmtnt2 = mysqli_query( $conn, $stmt2 );
		while ( $rows2 = mysqli_fetch_assoc( $resultsmtnt2 ) ) {
			?>
			<p>
				<?php echo $rows2['PaperName']; ?>
			</p>
			<div class="">
				<input type="text" name="marks[]" value="" class="form-control" required="required" autocomplete="off">
			</div>

			<?php
		}
	}
}
?>

<!--code for students(teacher)-->
<?php
if ( !empty( $_POST[ "subjectid1" ] ) ) {
	$sid2 = intval( $_POST[ 'subjectid1' ] );
	if ( !is_numeric( $sid2 ) ) {

		echo "invalid Subject";
		exit();
	} else {
		$status = 0;
		$cids = $_SESSION[ 'cid1' ];
		?>
		<option value="">Select</option>
		<?php
		$sql6 = "SELECT Level,compulsory FROM tblsubjects WHERE id=$sid2";
		$result6 = mysqli_query( $conn, $sql6 );
		$row6 = mysqli_fetch_assoc( $result6 );
		if ( $row6[ 'Level' ] == 'O-Level' && $row6[ 'compulsory' ] == 1 ) {
			if ( $cids == 1 || $cids == 2 ) {

				$sql = "SELECT FullName,id,RollNo FROM tbls21 WHERE Status=1 AND ClassId= $cids order by FullName";
				$result = mysqli_query( $conn, $sql );
				while ( $row = mysqli_fetch_assoc( $result ) ) {
					?>
					<option value="<?php echo $row['RollNo'] ?>">
						<?php echo $row['FullName']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Roll No.".$row['RollNo'] ?>
					</option>
					<?php
				}
			} else {
				$sql7 = "SELECT FullName,id,RollNo FROM tbls34 WHERE Status=1 AND ClassId= $cids order by FullName";
				$result7 = mysqli_query( $conn, $sql7 );
				while ( $row7 = mysqli_fetch_assoc( $result7 ) ) {
					?>
					<option value="<?php echo $row7['RollNo'] ?>">
						<?php echo $row7['FullName']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Roll No.".$row7['RollNo'] ?>
					</option>

					<?php
				}
			}
		} else if ( $row6[ 'Level' ] == 'O-Level' && $row6[ 'compulsory' ] == 0 ) {

			if ( $cids == 1 || $cids == 2 ) {
				$sqlw = "SELECT FullName,id,RollNo FROM tbls21 WHERE Status=1 AND ClassId= $cids order by FullName";
				$resultw = mysqli_query( $conn, $sqlw );
				while ( $roww = mysqli_fetch_assoc( $resultw ) ) {
					?>
					<option value="<?php echo $roww['RollNo'] ?>">
						<?php echo $roww['FullName']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Roll No.".$roww['RollNo'] ?>
					</option>
					<?php
				}
			} else {
				$sql8 = "SELECT FullName,id,RollNo FROM tbls34 WHERE Status=1 AND ClassId=$cids AND (Subject1Id=$sid2 OR Subject2Id=$sid2 OR Subject3Id=$sid2) order by FullName";
				$result8 = mysqli_query( $conn, $sql8 );
				while ( $row8 = mysqli_fetch_assoc( $result8 ) ) {
					?>
					<option value="<?php echo $row8['RollNo'] ?>">
						<?php echo $row8['FullName']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Roll No.".$row8['RollNo'] ?>
					</option>

					<?php
				}
			}
		} else if ( $row6[ 'Level' ] == 'A-Level' ) {
			$combids = array();
			$sql9 = "SELECT id FROM tblacombination WHERE Status=1 AND (SubjectId1=$sid2 OR SubjectId2=$sid2 OR SubjectId3=$sid2 OR Subsidiary=$sid2 OR GP=$sid2)";
			$result9 = mysqli_query( $conn, $sql9 );
			while ( $row9 = mysqli_fetch_assoc( $result9 ) ) {
				$combids[] = $row9[ 'id' ];
			}

			$sql10 = "SELECT FullName,id,RollNo,CombinationId FROM tblastudents WHERE ClassId=$cids order by FullName";
			$result10 = mysqli_query( $conn, $sql10 );
			while ( $row10 = mysqli_fetch_assoc( $result10 ) ) {
				if ( in_array( $row10[ 'CombinationId' ], $combids ) ) {
					?>
					<option value="<?php echo $row10['RollNo'] ?>">
						<?php echo $row10['FullName']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Roll No.".$row10['RollNo'] ?>
					</option>
					<?php

				}
			}

		}
	}
}
?>



<!-- Code for stream 56-(addstudent.php)-->
<?php
if ( !empty( $_POST[ "stream" ] ) ) {
	$sid1 = intval( $_POST[ 'stream' ] );
	if ( !is_numeric( $sid1 ) ) {

		echo "invalid Subject";
		exit();
	} else {
		?>
		<option value="">Select</option>
		<?php
		$sql3 = "SELECT id,StreamName from tblstreams where ClassId=$sid1;";
		$result3 = mysqli_query( $conn, $sql3 );
		while ( $row3 = mysqli_fetch_assoc( $result3 ) ) {
			?>
			<option value="<?php echo $row3['id'] ?>">
				<?php echo $row3['StreamName'] ?>
			</option>
			<?php } ?>

			<?php
		}
	}
	?>
<!--	 Code for stream 45-(addstudent.php)-->
	<?php
	if ( !empty( $_POST[ "stream45" ] ) ) {
		$sid45 = intval( $_POST[ 'stream45' ] );
		if ( !is_numeric( $sid45 ) ) {

			echo "invalid Subject";
			exit();
		} else {
			?>
			<option value="">Select</option>
			<?php
			$sql4 = "SELECT id,StreamName from tblstreams where ClassId=$sid45;";
			$result4 = mysqli_query( $conn, $sql4 );
			while ( $row4 = mysqli_fetch_assoc( $result4 ) ) {
				?>
				<option value="<?php echo $row4['id'] ?>">
					<?php echo $row4['StreamName'] ?>
				</option>
				<?php } ?>

				<?php
			}
		}
		?>
<!--		 Code for stream 21-(addstudent.php)-->
		<?php
		if ( !empty( $_POST[ "stream21" ] ) ) {
			$sid21 = intval( $_POST[ 'stream21' ] );
			if ( !is_numeric( $sid21 ) ) {

				echo "invalid Subject";
				exit();
			} else {
				?>
				<option value="">Select</option>
				<?php
				$sql5 = "SELECT id,StreamName from tblstreams where ClassId=$sid21;";
				$result5 = mysqli_query( $conn, $sql5 );
				while ( $row5 = mysqli_fetch_assoc( $result5 ) ) {
					?>
					<option value="<?php echo $row5['id'] ?>">
						<?php echo $row5['StreamName'] ?>
					</option>
					<?php } ?>

					<?php
				}
			}
			?>


<!--			get students(payfees.php)-->
			<?php
			if ( !empty( $_POST[ "classid" ] ) ) {
				$cid = intval( $_POST[ 'classid' ] );
				if ( !is_numeric( $cid ) ) {

					echo "invalid Subject";
					exit();
				} else {
					?>
					<option value="">Select</option>
					<?php
					if ( $cid == 1 || $cid == 2 ) {

						$sql11 = "SELECT FullName,id,RollNo FROM tbls21 WHERE Status=1 AND ClassId= $cid order by FullName";
						$result11 = mysqli_query( $conn, $sql11 );
						while ( $row11 = mysqli_fetch_assoc( $result11 ) ) {
							?>
							<option value="<?php echo $row11['RollNo'] ?>">
								<?php echo $row11['FullName']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Roll No.".$row11['RollNo'] ?>
							</option>

							<?php
						}
					} else if ( $cid == 3 || $cid == 4 ) {

						$sql11 = "SELECT FullName,id,RollNo FROM tbls34 WHERE Status=1 AND ClassId= $cid order by FullName";
						$result11 = mysqli_query( $conn, $sql11 );
						while ( $row11 = mysqli_fetch_assoc( $result11 ) ) {
							?>
							<option value="<?php echo $row11['RollNo'] ?>">
								<?php echo $row11['FullName']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Roll No.".$row11['RollNo'] ?>
							</option>

							<?php
						}
					} else if ( $cid == 5 || $cid == 6 ) {

						$sql11 = "SELECT FullName,id,RollNo FROM tblastudents WHERE Status=1 AND ClassId= $cid order by FullName";
						$result11 = mysqli_query( $conn, $sql11 );
						while ( $row11 = mysqli_fetch_assoc( $result11 ) ) {
							?>
							<option value="<?php echo $row11['RollNo'] ?>">
								<?php echo $row11['FullName']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Roll No.".$row11['RollNo'] ?>
							</option>

							<?php
						}
					}
				}
			}
			?>

<!-- Code for Papers(setpaperpercentage.php)-->
<?php
if ( !empty( $_POST[ "subjectidp" ] ) ) {
	$sidp = intval( $_POST[ 'subjectidp' ] );
	if ( !is_numeric( $sidp ) ) {

		echo "invalid Subject";
		exit();
	} else {
		$status = 0;
		$stm = "SELECT tblpapers.PaperName,tblPapers.id FROM tblpapers join tblsubjects on tblsubjects.id=tblpapers.SubjectId WHERE tblpapers.SubjectId=$sidp and tblpapers.Status!=$status order by tblpapers.PaperName;";
		$resultsmt = mysqli_query( $conn, $stm );
		while ( $rows2s = mysqli_fetch_assoc( $resultsmt ) ) {
			?>
			<p>
				<?php echo $rows2s['PaperName']; ?>
			</p>
			<div class="">
				<input type="text" name="paperper[]" value="" placeholder="out of 100%" class="form-control" required="required">
			</div>

			<?php
		}
	}
}
?>

<!--code for getting term(managemarkst1)-->
<?php
		if ( !empty( $_POST[ "terms" ] ) ) {
	$t = intval( $_POST[ 'terms' ] );
	if ( !is_numeric( $t ) ) {

		echo "invalid Term";
		exit();
	} else {
		?>
			<option>Select</option>
<option value="1">Term 1</option>
	<option value="2">Term 2</option>
<option value="3">Term 3</option>
			<?php
	}
}
			?>

<!--code for getting exam set(managemarkst1)-->
<?php
		if ( !empty( $_POST[ "examset" ] ) ) {
	$t = intval( $_POST[ 'examset' ] );
	if ( !is_numeric( $t ) ) {

		echo "invalid examset";
		exit();
	} else {
		?>
			<option>Select</option>
<option value="1">B.O.T</option>
	<option value="2">M.T</option>
<option value="3">E.O.T</option>
			<?php
	}
}
			?>

<!--code for table term 1 info(managemarkst1)-->
	<?php
if ( !empty( $_POST[ "subjectidm" ] ) ) {
	 $id= $_POST['subjectidm'];
 $dta=explode("$",$id);
$tid=$dta[0];
$sid3=$dta[1];
	$t=$dta[2];
	 $date = date("d/m/y");
    $time = date("h : i a");
    $duedt = explode("/",$date);
    $week = mktime(0,0,0,$duedt[1],$duedt[0],$duedt[2]);
    $years = (int)date('Y',$week);
		$status = 0;
		$cids = $_SESSION[ 'cid1' ];
		$sql6 = "SELECT Level FROM tblsubjects WHERE id=$sid3";
		$result6 = mysqli_query( $conn, $sql6 );
		$row6 = mysqli_fetch_assoc( $result6 );
		if ( $row6[ 'Level' ] == 'O-Level') {
			if ( $cids == 1 || $cids == 2 ) {
				if($t==1){
					$sql = "SELECT tblresult.id,tblresult.Marks,tblpapers.PaperName,tbls21.profilepic,tbls21.FullName FROM tblresult join tblpapers on tblpapers.id=tblresult.PaperId join tbls21 on tbls21.RollNo=tblresult.StudentRoll WHERE tblresult.Term=$tid AND tblresult.SubjectId=$sid3 AND tblresult.Year=$years AND tblresult.ClassId=$cids AND tbls21.Status=1 ORDER BY tbls21.FullName";
				$result = mysqli_query( $conn, $sql );
				while ( $row = mysqli_fetch_assoc( $result ) ) {
					?>
					<tr>
											<td><img src="uploads/<?php echo $row['profilepic'] ?>" alt="image" style="width: 200px;height: 50px;"></td>
											<td><?php echo $row['FullName'] ?></td>
											<td><?php echo $row['PaperName'] ?></td>
											<td><?php echo $row['Marks'] ?></td>
											<td><a href="editmarkst1.php?acid=<?php echo $row['id'] ?>" style="color: #4E52F3"> <i class="fa fa-edit" title="Edit Record"></i></a></td>
										</tr>
					<?php
				}
				}else if($t==2){
					$sql = "SELECT tblresultmt.id,tblresultmt.Marks,tblpapers.PaperName,tbls21.profilepic,tbls21.FullName FROM tblresultmt join tblpapers on tblpapers.id=tblresultmt.PaperId join tbls21 on tbls21.RollNo=tblresultmt.StudentRoll WHERE tblresultmt.Term=$tid AND tblresultmt.SubjectId=$sid3 AND tblresultmt.Year=$years AND tblresultmt.ClassId=$cids AND tbls21.Status=1 ORDER BY tbls21.FullName";
				$result = mysqli_query( $conn, $sql );
				while ( $row = mysqli_fetch_assoc( $result ) ) {
					?>
					<tr>
											<td><img src="uploads/<?php echo $row['profilepic'] ?>" alt="image" style="width: 200px;height: 50px;"></td>
											<td><?php echo $row['FullName'] ?></td>
											<td><?php echo $row['PaperName'] ?></td>
											<td><?php echo $row['Marks'] ?></td>
											<td><a href="editmarkst2.php?acid=<?php echo $row['id'] ?>" style="color: #4E52F3"> <i class="fa fa-edit" title="Edit Record"></i></a></td>
										</tr>
					<?php
				}
				}else if($t==3){
					
					$sql = "SELECT tblresulteot.id,tblresulteot.Marks,tblpapers.PaperName,tbls21.profilepic,tbls21.FullName FROM tblresulteot join tblpapers on tblpapers.id=tblresulteot.PaperId join tbls21 on tbls21.RollNo=tblresulteot.StudentRoll WHERE tblresulteot.Term=$tid AND tblresulteot.SubjectId=$sid3 AND tblresulteot.Year=$years AND tblresulteot.ClassId=$cids AND tbls21.Status=1 ORDER BY tbls21.FullName";
				$result = mysqli_query( $conn, $sql );
				while ( $row = mysqli_fetch_assoc( $result ) ) {
					?>
					<tr>
											<td><img src="uploads/<?php echo $row['profilepic'] ?>" alt="image" style="width: 200px;height: 50px;"></td>
											<td><?php echo $row['FullName'] ?></td>
											<td><?php echo $row['PaperName'] ?></td>
											<td><?php echo $row['Marks'] ?></td>
											<td><a href="editmarkst3.php?acid=<?php echo $row['id'] ?>" style="color: #4E52F3"> <i class="fa fa-edit" title="Edit Record"></i></a></td>
										</tr>
					<?php
				}
				}
				
			} else {
				if($t==1){
					$sql = "SELECT tblresult.id,tblresult.Marks,tblpapers.PaperName,tbls34.profilepic,tbls34.FullName FROM tblresult join tblpapers on tblpapers.id=tblresult.PaperId join tbls34 on tbls34.RollNo=tblresult.StudentRoll WHERE tblresult.Term=$tid AND tblresult.SubjectId=$sid3 AND tblresult.Year=$years AND tblresult.ClassId=$cids AND tbls34.Status=1 ORDER BY tbls34.FullName";
				$result = mysqli_query( $conn, $sql );
				while ( $row = mysqli_fetch_assoc( $result ) ) {
					?>
					<tr>
											<td><img src="uploads/<?php echo $row['profilepic'] ?>" alt="image" style="width: 200px;height: 50px;"></td>
											<td><?php echo $row['FullName'] ?></td>
											<td><?php echo $row['PaperName'] ?></td>
											<td><?php echo $row['Marks'] ?></td>
											<td><a href="editmarkst1.php?acid=<?php echo $row['id'] ?>" style="color: #4E52F3"> <i class="fa fa-edit" title="Edit Record"></i></a></td>
										</tr>
					<?php
				}
				}else if($t==2){
					$sql = "SELECT tblresultmt.id,tblresultmt.Marks,tblpapers.PaperName,tbls34.profilepic,tbls34.FullName FROM tblresultmt join tblpapers on tblpapers.id=tblresultmt.PaperId join tbls34 on tbls34.RollNo=tblresultmt.StudentRoll WHERE tblresultmt.Term=$tid AND tblresultmt.SubjectId=$sid3 AND tblresultmt.Year=$years AND tblresultmt.ClassId=$cids AND tbls34.Status=1 ORDER BY tbls34.FullName";
				$result = mysqli_query( $conn, $sql );
				while ( $row = mysqli_fetch_assoc( $result ) ) {
					?>
					<tr>
											<td><img src="uploads/<?php echo $row['profilepic'] ?>" alt="image" style="width: 200px;height: 50px;"></td>
											<td><?php echo $row['FullName'] ?></td>
											<td><?php echo $row['PaperName'] ?></td>
											<td><?php echo $row['Marks'] ?></td>
											<td><a href="editmarkst2.php?acid=<?php echo $row['id'] ?>" style="color: #4E52F3"> <i class="fa fa-edit" title="Edit Record"></i></a></td>
										</tr>
					<?php
				}
				}else if($t==3){
					$sql = "SELECT tblresulteot.id,tblresulteot.Marks,tblpapers.PaperName,tbls34.profilepic,tbls34.FullName FROM tblresulteot join tblpapers on tblpapers.id=tblresulteot.PaperId join tbls34 on tbls34.RollNo=tblresulteot.StudentRoll WHERE tblresulteot.Term=$tid AND tblresulteot.SubjectId=$sid3 AND tblresulteot.Year=$years AND tblresulteot.ClassId=$cids AND tbls34.Status=1 ORDER BY tbls34.FullName";
				$result = mysqli_query( $conn, $sql );
				while ( $row = mysqli_fetch_assoc( $result ) ) {
					?>
					<tr>
											<td><img src="uploads/<?php echo $row['profilepic'] ?>" alt="image" style="width: 200px;height: 50px;"></td>
											<td><?php echo $row['FullName'] ?></td>
											<td><?php echo $row['PaperName'] ?></td>
											<td><?php echo $row['Marks'] ?></td>
											<td><a href="editmarkst3.php?acid=<?php echo $row['id'] ?>" style="color: #4E52F3"> <i class="fa fa-edit" title="Edit Record"></i></a></td>
										</tr>
					<?php
				}
				}
			}
		} else if ( $row6[ 'Level' ] == 'A-Level' ) {
			if($t==1){
				$sql = "SELECT tblresult.id,tblresult.Marks,tblpapers.PaperName,tblastudents.profilepic,tblastudents.FullName FROM tblresult join tblpapers on tblpapers.id=tblresult.PaperId join tblastudents on tblastudents.RollNo=tblresult.StudentRoll WHERE tblresult.Term=$tid AND tblresult.SubjectId=$sid3 AND tblresult.Year=$years AND tblresult.ClassId=$cids ORDER BY tblastudents.FullName";
				$result = mysqli_query( $conn, $sql );
				while ( $row = mysqli_fetch_assoc( $result ) ) {
					?>
					<tr>
											<td><img src="uploads/<?php echo $row['profilepic'] ?>" alt="image" style="width: 200px;height: 50px;"></td>
											<td><?php echo $row['FullName'] ?></td>
											<td><?php echo $row['PaperName'] ?></td>
											<td><?php echo $row['Marks'] ?></td>
											<td><a href="editmarkst1.php?acid=<?php echo $row['id'] ?>" style="color: #4E52F3"> <i class="fa fa-edit" title="Edit Record"></i></a></td>
										</tr>
					<?php
				}
			}else if($t==2){
				$sql = "SELECT tblresultmt.id,tblresultmt.Marks,tblpapers.PaperName,tblastudents.profilepic,tblastudents.FullName FROM tblresultmt join tblpapers on tblpapers.id=tblresultmt.PaperId join tblastudents on tblastudents.RollNo=tblresultmt.StudentRoll WHERE tblresultmt.Term=$tid AND tblresultmt.SubjectId=$sid3 AND tblresultmt.Year=$years AND tblresultmt.ClassId=$cids ORDER BY tblastudents.FullName";
				$result = mysqli_query( $conn, $sql );
				while ( $row = mysqli_fetch_assoc( $result ) ) {
					?>
					<tr>
											<td><img src="uploads/<?php echo $row['profilepic'] ?>" alt="image" style="width: 200px;height: 50px;"></td>
											<td><?php echo $row['FullName'] ?></td>
											<td><?php echo $row['PaperName'] ?></td>
											<td><?php echo $row['Marks'] ?></td>
											<td><a href="editmarkst2.php?acid=<?php echo $row['id'] ?>" style="color: #4E52F3"> <i class="fa fa-edit" title="Edit Record"></i></a></td>
										</tr>
					<?php
				}
			}else if($t==3){
				$sql = "SELECT tblresulteot.id,tblresulteot.Marks,tblpapers.PaperName,tblastudents.profilepic,tblastudents.FullName FROM tblresulteot join tblpapers on tblpapers.id=tblresulteot.PaperId join tblastudents on tblastudents.RollNo=tblresulteot.StudentRoll WHERE tblresulteot.Term=$tid AND tblresulteot.SubjectId=$sid3 AND tblresulteot.Year=$years AND tblresulteot.ClassId=$cids ORDER BY tblastudents.FullName";
				$result = mysqli_query( $conn, $sql );
				while ( $row = mysqli_fetch_assoc( $result ) ) {
					?>
					<tr>
											<td><img src="uploads/<?php echo $row['profilepic'] ?>" alt="image" style="width: 200px;height: 50px;"></td>
											<td><?php echo $row['FullName'] ?></td>
											<td><?php echo $row['PaperName'] ?></td>
											<td><?php echo $row['Marks'] ?></td>
											<td><a href="editmarkst3.php?acid=<?php echo $row['id'] ?>" style="color: #4E52F3"> <i class="fa fa-edit" title="Edit Record"></i></a></td>
										</tr>
					<?php
				}
			}

		}
}
?>
