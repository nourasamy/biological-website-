<?php
include ('p.php');

$Genome_Name = $_POST["Genome_Name"];
if(!empty($Genome_Name)){
    $test=0;
$ch = $_POST["ch"];

$con = mysqli_connect("localhost", "root", "", "fci");
$q = "SELECT * FROM `pneumonia` WHERE Genome_Name= '$Genome_Name'";
$mysq = mysqli_query($con, $q);
foreach ($mysq as $post) {
    $id=$post['id'];
    $Genome_Symbol =  $post["Genome_Symbol"];
    $Genome_Name =  $post["Genome_Name"];
    $Gene_Type =  $post["Gene_Type"];
    $Fasta_Seq =  $post["Fasta_Seq"];
    $result =  $post[$ch];
 
    $Complete_Genome =  $post["Complete_Genome"];
}}
else
{$test=1;
$ch = $_POST["ch"];
$seq= $_POST["Sequence"];

if($ch=='complement'){
    $result= DNA_complment($seq);

}
elseif ($ch=='transcription') {
    $result=DNA_to_RNA($seq);
}
elseif ($ch=='translation') {
    $result=DNA_to_protein($seq);
}elseif ($ch=='Gc') {
    $result= GC_Percentage($seq);
}elseif ($ch=='Reverse') {
    $result= DNA_Revcomp($seq);
}



}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Genome Process</title>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="C.css">
</head>
<body>
  <script src="J.js"></script>
    <form name="myForm" action='choose.php' method="POST" >
<fieldset>
    <legend > Result </legend>

    <?php if($test==0){;?>
    <p>Genome Name :</p>
    <?=$Genome_Name;
    ?>
    <br><br>
    <p>Gene Type :</p>
    <?=$Gene_Type;
    ?>
    <br><br>
    <p>Fasta Seq :</p>
    <textarea style="width:50%;height:100%;"><?=$Fasta_Seq ;
    ?></textarea>
    <br><br>

    <p>Complete Genome :</p>
    <textarea style="width:50%;height:100%;"><?=$Complete_Genome;
    ?></textarea>
    
    <br><br>
    <?php } ?>
    

    <?php if($test==1){?>
    <p>Sequence  :</p>
    <textarea style="width:50%;height:100%;"><?=$seq ;
    ?></textarea>
    <br><br>
    <?php } ?>
    <p>Result : </p>
    <?=$result ;
    ?>
  </fieldset>
</form>
</body>
</html>
