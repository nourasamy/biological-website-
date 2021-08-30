<?php

function DNA_complment($DNA)
{
	$length=strlen($DNA);
	$DNA_comp="";
	for($i=0; $i<$length; $i++)
	{
		switch($DNA[$i])
		{
			case "A" :
			   $DNA_comp=$DNA_comp."T";
			   break;

			case "T" :
			   $DNA_comp=$DNA_comp."A";
			   break;

			case "G" :
			   $DNA_comp=$DNA_comp."C";
			   break;

			case "C" :
			   $DNA_comp=$DNA_comp."G";
			   break;
			default:
			$DNA_comp=DNA_comp ."X" ;
		}
	}
	return $DNA_comp;
}
function DNA_Revcomp($DNA)
{
	$length=strlen($DNA);
	$dna_Revcomp="";
	for($i=$length-1; $i>=0; $i--)
	{
		switch($DNA[$i])
		{
			case "A" :
			   $dna_Revcomp=$dna_Revcomp."T";
			   break;

			case "T" :
			   $dna_Revcomp=$dna_Revcomp."A";
			   break;

			case "G" :
			   $dna_Revcomp=$dna_Revcomp."C";
			   break;

			case "C" :
			   $dna_Revcomp=$dna_Revcomp."G";
			   break;
			default:
			$dna_Revcomp=dna_Revcomp ."X" ;
		}
	}
	return $dna_Revcomp;
}
function GC_Percentage($DNA)
{

	$GC=((Find_Count("G",$DNA)+Find_Count('C',$DNA))/(Find_Count('A',$DNA)+Find_Count('G',$DNA)+Find_Count('C',$DNA)+Find_Count('T',$DNA)))*100;
	return $GC;
}

function Find_Count ($C,$sequence) 
{
	$countt =0;
	$length=strlen($sequence);
	for($i=0; $i<$length; $i++)
	{
		if($sequence[$i]==$C) 
			$countt++;
	}
	return $countt;
}

function DNA_to_protein($DNA)
{
	$table = array (
       'ATA'=>'I', 'ATC'=>'I', 'ATT'=>'I', 'ATG'=>'M',
        'ACA'=>'T', 'ACC'=>'T', 'ACG'=>'T', 'ACT'=>'T',
        'AAC'=>'N', 'AAT'=>'N', 'AAA'=>'K', 'AAG'=>'K',
        'AGC'=>'S', 'AGT'=>'S', 'AGA'=>'R', 'AGG'=>'R',
        'CTA'=>'L', 'CTC'=>'L', 'CTG'=>'L', 'CTT'=>'L',
        'CCA'=>'P', 'CCC'=>'P', 'CCG'=>'P', 'CCT'=>'P',
        'CAC'=>'H', 'CAT'=>'H', 'CAA'=>'Q', 'CAG'=>'Q',
        'CGA'=>'R', 'CGC'=>'R', 'CGG'=>'R', 'CGT'=>'R',
        'GTA'=>'V', 'GTC'=>'V', 'GTG'=>'V', 'GTT'=>'V',
        'GCA'=>'A', 'GCC'=>'A', 'GCG'=>'A', 'GCT'=>'A',
        'GAC'=>'D', 'GAT'=>'D', 'GAA'=>'E', 'GAG'=>'E',
        'GGA'=>'G', 'GGC'=>'G', 'GGG'=>'G', 'GGT'=>'G',
        'TCA'=>'S', 'TCC'=>'S', 'TCG'=>'S', 'TCT'=>'S',
        'TTC'=>'F', 'TTT'=>'F', 'TTA'=>'L', 'TTG'=>'L',
        'TAC'=>'Y', 'TAT'=>'Y', 'TAA'=>'', 'TAG'=>'',
        'TGC'=>'C', 'TGT'=>'C', 'TGA'=>'_', 'TGG'=>'W',
        );
	$protein='';
	
	if(strlen($DNA)%3 == 0)
	{
		$key="";
		for($i=0 ;$i<strlen($DNA);$i+=3)
		{
			$codon="";
			for($j=$i; $j< $i+3; $j++)
			{
				$codon=$codon.$DNA[$j];
			}
			$key=$codon;
			$protein=$protein." " .$table[$key];
		}
	}
	else
	{
		echo "DNA len must be divied by 3";
	}
	return $protein;
}

function DNA_to_RNA($DNA)
{
	$RNA="";
	for($i=0; $i<strlen($DNA); $i++)
	{
		if($DNA[$i]=='T')
			$RNA=$RNA.'U';
		else
			$RNA=$RNA.$DNA[$i];
	}
	return $RNA;
}
function RNA_to_DNA($RNA)
{
	$DNA="";
	for($i=0; $i<strlen($RNA); $i++)
	{
		if($RNA[$i]=='U')
			$DNA=$DNA.'T';
		else
			$DNA=$DNA.$RNA[$i];
	}
	return $DNA;
}
 
?>











