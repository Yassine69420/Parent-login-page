<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
    function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
    $cin = validate($_POST["cin"]);
    $date = validate($_POST["date"]);

    if (empty($cin)) {
		header("Location: loginpage.php?error= svp entrez votre cin ");
	    exit();
	}else if(empty($date)){
        header("Location: loginpage.php?error= svp entrez votre date de naissance ");
	    exit();
    }
    else{
      include("DB.php");
      $sql = "SELECT * FROM parents WHERE CIN='$cin' AND DATE='$date'";
	  $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result)== 1) {
          $row = mysqli_fetch_assoc($result);
          if ($row['CIN'] === $cin && $row['DATE'] === $date) {
                header("Location: Parentpage.php");
            	$_SESSION['cin'] = $row['CIN'];
            	$_SESSION['date'] = $row['DATE'];
		        exit();
            }
            else{
                	header("Location: loginpage.php?error= les informations sont incorrect");
            }
    }
    else{
                	header("Location: loginpage.php?error= les informations sont incorrect");
            }

    }
    }

    
?>
