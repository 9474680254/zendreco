<?php
$con=mysqli_connect("localhost","root","","admission_form");
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name=$_POST['email'];
    $pass1=$_POST['password'];
    $pass2=$_POST['password1'];
    $roe="SELECT * FROM `login`";
    $re=mysqli_query($con,$roe);
    while($row = mysqli_fetch_assoc($re)){
        if($row['name']==$name){
           $if=456;
            break;
        }
        else{
            $if=1;
        }
    }
     if(456==$if){
        echo"<h1>you allradey give respons<h1>";
        echo"<style>
        
        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
             text-align: center;
             color:white;
        }</style>";
        
    }
    
    else{
                 if($pass1==$pass2){
                                $qur="INSERT INTO `login` (`name`, `password`, `id`) VALUES ('$name', '$pass1', NULL)";
                                mysqli_query($con,$qur);
                                 echo "<script> window.location.href = 'stu_poto_signature.php?message=$name'</script>";
                                 }
                            else{
                                 echo "<h1>CHAKE YOUR Password <h1>";
                                 echo"<style>
        
                                 body {
                                     font-family: 'Poppins', sans-serif;
                                     display: flex;
                                     justify-content: center;
                                     align-items: center;
                                     height: 100vh;
                                     margin: 0;
                                     background: linear-gradient(135deg, #71b7e6, #9b59b6);
                                      text-align: center;
                                      color:white;
                                 }</style>";

                                 }
           
        }
    
    
    
}

?>
