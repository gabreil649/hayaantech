
<?php

if(isset($_POST["firstname"])) {
    
 include 'conn.php';
    
    $sql = 'INSERT INTO `contact`(`firstn`, `lastn`, `email`, `phone`, `subject`, `message`, `date`) VALUES (?,?,?,?,?,?,?)';
    
    $fn = $_POST["firstname"];
    $ln = $_POST["lastname"];
    $em = $_POST["email"];
    $ph = $_POST["phone"];
    $su = $_POST["subject"];
    $me = $_POST["message"];
    $date = date("j, n, Y");
    
    $stmt2 = $conn->Prepare($sql);

    $stmt2->bindParam(1, $fn);
    $stmt2->bindParam(2, $ln);
    $stmt2->bindParam(3, $em);
    $stmt2->bindParam(4, $ph);
    $stmt2->bindParam(5, $su);
    $stmt2->bindParam(6, $me);
    $stmt2->bindParam(7, $date);

   $re =  $stmt2->execute();
    if($re == ture)
    {
        echo '<script type="text/javascript">
           window.location = "index.html"
      </script>';
        die();
    }
    else
    {
        echo "fu";
    }
}
?>