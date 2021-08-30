<?php

if(isset($_POST['delete']))

{
$con = mysqli_connect("localhost", "root", "", "fci");
$Genome_Name = $_POST['Genome_Name'];

$q = "DELETE FROM `pneumonia` WHERE Genome_Name= '$Genome_Name'";
#$q2 = "SELECT * FROM `pneumonia` WHERE id= ".$id;

#$mysq2 = mysqli_query($con, $q2);
$mysq = mysqli_query($con, $q);
if (mysqli_affected_rows($con)) 
{   
    #echo "deleted";
       
    header("Location:index.html");
} else
{
    header("Location:delete.php");
}

foreach ($mysq as $post) {
    $id=$post['id'];
    $Genome_Symbol =  $post["Genome_Symbol"];
    $Genome_Name =  $post["Genome_Name"];
    $Gene_Type =  $post["Gene_Type"];
    $Fasta_Seq =  $post["Fasta_Seq"];
 
    $Complete_Genome =  $post["Complete_Genome"];
}
}
?>

<!DOCTYPE html>
    <html>

    <head>
        <title>Genome Delete</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="C.css">
    </head>

    <body>
        <script src="J.js"></script>
        <form name="myForm" action="delete.php" method="POST" onsubmit="return validateForm()">
            <fieldset>

                <br><label for="id">Genome Name :</label>
                <input type="text" id="id" name="Genome_Name" required><br><br>

                
                <input type="submit" name="delete" value="delete" /><br><br>

            </fieldset>
        </form>
    </body>

    </html>