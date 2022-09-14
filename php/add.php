<?php
include 'connection.php';

if(isset($_POST['addimage'])) {   
 
 $fileExistsFlag = 0; 
 $fileName = $_FILES['i_rdoc']['name'];
 /* 
 *	Checking whether the file already exists in the destination folder 
 */
 
  
 $query = "SELECT Image FROM g_picture WHERE Image ='$fileName'"; 
 $result = mysqli_query($conn, $query) or die("Error : ".mysqli_error($conn));
 while($row = mysqli_fetch_array($result)) {
 if($row['Image'] == $fileName) {
 $fileExistsFlag = 1;
 } 
 }
 
 if($fileExistsFlag == 0) { 
 $target = "../images/"; 
 $fileTarget = $target.$fileName; 
 $tempFileName = $_FILES["i_rdoc"]["tmp_name"];
 $result = move_uploaded_file($tempFileName,$fileTarget);
 //echo $fileTarget;
 }
 
 $rname =$_POST['rname'];
 $rjina =$_POST['rjina'];
 $abstinf = $_POST['i_abstinf'];
 $pyear = $_POST['pyear'];
 $dte = $_POST['s_dte'];
 $aina = $_POST['aina'];

 
 $filecov = addslashes(file_get_contents($_FILES['rcover']['tmp_name']));
 
 $rnamepyear = $rname." ".$pyear;
 $sectorpyear = $sector." ".$pyear;;
 $rnamesectorpyear = $sector." ".$rname." ".$pyear;
 
 //if(move_uploaded_file($file_loc,$folder.$final_file)){
 $sql ="INSERT INTO `g_picture`(`AlbamName`, `Image`, `Date_uploided`, `Maelezo`, `Jina`, `Aina`) VALUES ('$rname','$fileName', '$dte', '$abstinf','$rjina','$aina')";
 
 // $sql="INSERT INTO `tbl_uploads`(`afile`, `atype`, `asize`, `aname`) VALUES('$file', '$file_type', '$file_size', '$file_loc')";
  
  	if (mysqli_query($conn, $sql)) {
	               //header("refresh:0.5; url=http://www.zenjitech/ocgs/adminform2.php");
				   //header("refresh:0.5; url=adminform22.php");
					echo "<script>
						  alert('successfully uploaded');
						   window.location.href='../admin.php';
								</script>";
				} else {		
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}			
//} else {
   //echo "<scrip
 

} 
?>