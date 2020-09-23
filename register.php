
<?php

/*session_start();


$con = mysqli_connect('localhost', 'root');
if ($con) {
}

mysqli_select_db($con, 'drive');

$username = $_POST['user'];
$mail= $_POST['mail'];
$contact= $_POST['contact'];
$sap= $_POST['sap'];
$course= $_POST['branch'];
$year= $_POST['year'];
$transaction= $_POST['transaction'];


// echo $username;
// echo $password;

//$check = "select * from id where contact='$contact'";
//$resultcheck = mysqli_query($con, $check);

//$row = mysqli_num_rows($resultcheck);
//if ($row == 1) {

//} 
//else {
  
  
  
    $q = "insert into id (username, mail, contact, sap, course, year_, transaction_id) values ('$username', '$mail', '$contact', '$sap', '$course', '$year', '$transaction')";

    $result = mysqli_query($con, $q);

    $q = "UPDATE id SET ui = CONCAT('MTCM', no_)";
    $result = mysqli_query($con, $q);
*/
//}

$file =$_FILES['screenshot'];

$fileName = $_FILES['screenshot']['name'];
$fileTmpName = $_FILES['screenshot']['tmp_name'];
$fileSize = $_FILES['screenshot']['size'];
$fileError = $_FILES['screenshot']['error'];
$fileType = $_FILES['screenshot']['type'];
/*
$fileExt = explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));

$allowed = array('jpg', 'jpeg', 'png', 'pdf');

if (in_array($fileActualExt, $allowed))
    {
        if ($fileError == 0)
            {
                if ($fileSize < 100000)
                    {
                        $fileNameNew = "test".".".$fileActualExt;
                        $fileDestnation = 'uploads/'. $fileNameNew;
                        move_uploaded_file($fileTmpName,$fileDestnation);
                        header("location: register.php?uploadsuccess");
                    }
                else
                    {
                        echo "File is too big!";
                    }    
            }
        else
            {
                echo "Error encountered while uploading file!";
            }   
    }

else
    {
    echo "Invalid file type!";
    }


*/


?>


