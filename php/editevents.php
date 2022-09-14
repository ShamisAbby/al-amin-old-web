<?php 
// if the form's submit button is clicked, we need to process the form
include 'connection.php';

if (isset($_POST['e_addd'])){
// get variables from the URL/form
		$id = $_POST['id'];
		$rname =$_POST['e_rname'];
		 $abstinf = $_POST['e_abstinf'];
		 $dateUpd = $_POST['e_dte'];
		 $dtUpd = $_POST['e_dte1'];

// check that firstname and lastname are both not empty

			$sql = "UPDATE `tbl_events` SET `e_Name`='$rname', `e_Description`='$abstinf', `Date_uploided`='$dtUpd', `e_Date`='$dateUpd' WHERE id='$id'";
			if(mysqli_query($conn, $sql)){  
			     // redirect user after delete is successful
				 header("refresh:1; url=../adminpanel.php");
				 echo "<script>
						alert('Record updated successfully');
						</script>";
				//echo "Record updated successfully";  
			}else{  
			    // redirect user after delete is successful
				header("refresh:1; url=../adminpanel.php");
				$msg = "Could not update record: ".mysqli_error($conn);  
			     echo "<script>
						alert('Could not update record');
				 </script>";
			}  
		
}
mysqli_close($conn);
// redirect user after delete is successful
 //header("refresh:1; url=http://www.zenjitech.com/ocgs/adminpanel.php");
?>