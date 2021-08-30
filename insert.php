
<?php
print_r($_POST);
die;
if (isset($_POST["submit"]))
 {
    
    $Genome_Symbol = $_POST["Genome_Symbol"];
    $Genome_Name = $_POST["Genome_Name"];
    $Gene_Type = $_POST["Gene_Type"];
    $Fasta_Seq = $_POST["Fasta_Seq"];
    $Complete_Genome = $_POST["Complete_Genome"];

    $conn = mysqli_connect("localhost", "root", "", "fci");

    $q = "INSERT INTO `pneumonia`( `Genome_Symbol`, `Genome_Name`,  `Gene_Type`,`Fasta_Seq`,`Complete_Genome`) VALUES ('$Genome_Symbol','$Genome_Name','$Gene_Type','$Fasta_Seq','$Complete_Genome')";

    mysqli_query($conn, $q);
    if (mysqli_affected_rows($conn))
    {
        echo "done";
    }
     else 
     {
        "error";
    }
}

?>