<?php
include ('p.php');
if (isset($_POST["submit"]))
 {
    $Genome_Symbol = $_POST["Gsymbol"];
    $id = $_POST["G_id"];

    $Genome_Name = $_POST["GName"];
    $Gene_Type = "protein coding";
    $Fasta_Seq = $_POST["Fasta"];
    $Complete_Genome = "ACGCGAAAAAATGCATAACAAAACTATCAACCTGAAAAAAGTTAGGACAAGTGAAGATTGCTAGTCCCAA
    AGACCAGAATCATGGGCTGTAATGTGATGATGGAGCTTGATTATGGTGGACGAGCTGCATGGCTGGCATT
    CCACATAACCAACTTTGATAGGTCAGATTTGGAAACTATCCTAAGAGGTGCTAGGGTGTGCAATACATGG
    CAAGATCAGAGACTCTCCGTGTACCTTGTGGGAAGGGATTGCAATTTGTTAAGACCATTTGTGCAAGCTG
    CCAAATTTATCCATAATACTAGGAGAGGCCAAACATTAACACATTGGTTCACAAAAAATATCGTGTTTAG
    TTCTACAGGGCAAGAGACAGAGCCTCCCATTGACCCCACATGTGAGCTGTTGGTAGAGCTGATCAGTGGT
    TAAGATGACAGCACATTATGTAGTTAATTAAAACAAAGGGTAGGACAAGTCCTAATGTCCACAGCTATGA
    ACAAGTTCACTCAGACCATCTCTAAACCTGCCACTATCTTGAATATTTCAGACAGTGAAGAGTCGGGCGA
    TGAGGCAGGGGTGGGCAAGGTGTCCCGTACCACACAGAGCTCAGAGAGGTGGCTTGATTTGCTCATTGAA
    AAGTTCCAGCCGAGCCTACAAAACATCACTAGATACATCAACTGGAACTTCATCAGGATCTGCAATGATA
    GGCTTAAAAAAGAAAAAATGGGGTACATTGAGGCCAAGCAATATGTGGAAGACATGGCTTGGATGGTGAT
    AGCATCTGAGGCAGACAGCATTGAGTGGAAGTGCATAAGGAGGCAGGAGAAAGTGACTGGGGTGAAATAC
    CCAAAGTTCTTCTTTGTACAACACAAAGAGGACTGGATTGAGTGCACAGGATGCATTCCGTACCCAGGCC
    ATGACTTGATCTATGATGAGGATGATGATGACTGAGCTGACTCAGATCACTCCAACCAGCAGAGAGATCC
    ACCACCTATAGCAAGTGATGTAGTATTTAGTCTATGATTAGTTATAGAAAAACATTAGGATAAATACACA
    TCCTAGGCCGGGCCAAAATGTCTCTAGACAGATTGAAGCTCAATGATGTCTCAAACAAGGATAGCCTGCT
    GTCCAACTGCAAATACAGTGTTACCAGATCCACAGGCGATGTAACCAGTGTGTCTGGTCATGCTATGCAG
    AAAGCCCTTGCAAGGACACTCGGCATGTTCTTACTTACTGCCTTCAACCGTTGCGAAGAAGTGGCAGAAA
    TAGGGCTCCAATATGCCATGTCCTTGCTAGGCAGAGATGATAGCATCAAGATATTAAGAGAAGCCGGCTA
    CAATGTAAAATGTGTGGACACACAGCTCAAGGACTTTACAATCAAATTACAAGGAAAGGAATACAAAATA
    CAAGTCCTAGATATAGTGGGAATAGATGCAGCCAATTTAGCTGATCTAGAGATACAAGCCAGAGGAGTGG
    TAGCAAAAGAACTCAAAACAGGAGCCAGGCTACCTGACAATCGGAGGCATGATGCACCAGATTGTGGTGT
    GATAGTTCTCTGTATTGCAGCATTAGTTGTTTCCAAATTAGCTGCAGGGGACAGGGGAGGACTTGATGCT
    GTGGAAAGAAGGGCTTTAAATGTGCTGAAAGCCGAGAAAGCCAGGTACCCCAACATGGAGGTCAAGCAGA
    TAGCTGAAAGTTTTTATGATCTGTTTGAAAGGAAGCCTTATTACATTGATGTCTTCATCACTTTTGGCCT
    GGCCCAGTCTAGTGTCAAGGGAGGCAGCAAAGTTGAGGGGCTGTTTTCAGGTCTCTTCATGAATGCATAC
    GGGGCAGGACAAGTTATGCTGAGGTGGGGTTTACTGGCAAAATCTGTCAAGAACATCATGCTAGGCCATG
    CTAGTGTACAAGCTGAGATGGAACAGGTGGTTGAGGTTTACGAATATGCTCAGAAGCAAGGAGGGGAGGC
    AGGATTCTATCACATCAGAAATAATCCAAAAGCTTCACTTCTCTCTTTGACCAATTGTCCTAATTTCACC
    AGTGTTGTGCTTGGCAATGCTGCAGGTTTAGGCATCATAGGGTCATATAAGGGTGCTCCTAGGAATAGAG
    AACTCTTTGATGCTGCCAAAGATTATGCAGAAAGATTAAAGGACAACAATGTAATTAACTACAGTGCATT
    AAACTTGACTGCAGAAGAAAGAGAGCTGATCAGCCAGCAGCTGAACATTGTTGATGACACTCCTGATGAT
    GATATTTAATTAAAACTGGAAAATGTAGGATAAATATGGAGAAATTCGCCCCCGAATTTGTTGGCGAGGA
    TGCTAACAAGAAGGCAGAGGAGTTTCTCAAACATAGATCCTTCCCTTCGGAAAAACCACTAGCTGGTATA
    CCGAACACTGCCACTCATGTCACCAAATATAACATGCCCCCTATATTGCGTAGCTCATTCAAACTCCCTT
    CCCCGAGAGTTGCTGCAAATCTTACTGAACCCTCTGCTCCCCCTACCACTCCACCACCCACACCTCCCCA
    GAACAAGGAAGAGCAGCCCAAAGAGTCTGATGTTGACATTGAGACTATGCATGTCTGTAAGGTTCCTGAC
    AATCCGGAACACAGCAAGAAGCCATGCTGCTCAGATGATACCGATACTAAGAAAACTAGGAAGCCGATGG
    TCACCTTTGTGGAACCCGAGGAGAAATTTGTCGGATTGGGAGCTAGCTTGTACAGGGAGACCATGCAGAC
    CTTTGCTGCTGATGGTTATGATGAAGAAAGCAACCTATCGTTTGAGGAGACTAACCAAGAGCCGGGTTCT
    TCATCTGTAGAACAAAGACTAGATAGAATAGAGGAGAAATTGTCCTACATAATAGGCCTTTTAAACACCA
    TAATGGTAGCGACTGCTGGACCTACCACTGCTAGAGATGAGATTAGAGATGCCCTTATAGGCACTAGAGA
    AGAACTTATTGAGATGATCAAGTCTGACATCTTGACTGTCAATGACAGAATAGTGGCCATGGAGAAGCTC
    AGAGATGAGGAATGCTCCAGAGCTGACACTGATGATGGATCAGCCTGTTATTTAACAGACAGAGCAAGGA
    TACTAGATAAGATAGTGTCCAGCAATGCTGAAGAGGCTAAGGAAGATTTGGATGTTGATGACATCATGGG
    CATTAATTTTTAGTTAATTAAAATAACAACAGGACAAATAATGGAGGCCTACTTGGTAGAGATGTACCAT
    GGTGTCCCATATACAGCTGCAGTACAGCTAAACTTGGTTGAAAAACATTCAGCCAACATATCACTAACTG
    TGTGGATACCGATGTTTCAAACATCTCTACCAAAGAACTCCGTTATGGACCTGCTACATGATGTTACAGT
    CATTTGTACACAGATATCAACAGTGCATGGTCCCATGATCAAGGTAGATCTGAGCTCTTCCAATGCAGGT
    TTAGCTACCATGCCAAGGCAATTCTTGATAAATGCTATCATAGCTTTGGATGACTGGGGCAACATGGATT
    ACGAAGTGCCTGTTGCTTTTGATAAAAAGAGCTTCTGTGTGACAATTCTTAAGCCTAAAAACATGCTTTA
    CACTGTACCCAGCATTACTCCCACTAATCGACCTACTCATGAGCTGATAGCTGTCTGCTCTTTCCATAAC
    AGGGTAACATTAAAGTCATTCAATATACCTGTCTTCATCAGAGCACTGTATATCAGACAGCAGGGCCTTG
    ATAGTGTGGAGCAGGCTATAAGCTCCGATGTGGACCATGCTATAACAACAGCTAGGGTGGCTCCCTATGC
    AGGGCTTACACTTGTAATCAACATCACATCCACCAAAGGAGCATTCAAACTGCTAAAGGCAGGTAGTCAG
    ATTCTTGCAGAACTGGGTCCCTATCTGACGCAGGTGAGCCTACATGATGTGATTATGAACTGGAAACATA
    CAGGCACTTCCTACATACTCAAGAGCTCCTCAACAAGTGGATGAAAAAGAGAAAGTCACCATTGATCAGC
    TCAATCCACAACTACAACCCCACGATTTCACACAGCACAACAACCACCGCCACCAACATCCACATGACAA
    CCACACATACACACCCACATACATATATACACATATCTTAGTTAAATAAAATCAGGATAAATAATGGATC
    CTAACATGACCTCACACCAGATCACCCTCGAGATCAACATGACCAGCAGCCGTATTGGCACACACACTAC
    ACCAGCCCCAACAGCTCCTCTCCTTGCATGTGCCGTCATCAACACAGTGTGTGCGCTGATAATGGCCTGC
    AGCAGTAGAAGCACTGCCACATCAGGCATTGTCAGCAGCCAATGCACAGTTCATCCCAATCACCCTCCAC
    CAAGTTATGGCGTCAATGTAACTGGTCTGCCGGGTAACCTATACTCAAGGAACACTACATAACATTATAA
    ATAACAGAAATTATCCTTCAATAAACCCCAGGCCAGACAGCTTTACCCTGCTAGACGATTCAATCAGCCC
    TTGCAGTATGTCGTCTAGTTAACAAAAAATTAGGATAAGTACTATCCTATTGGAACCAAACGAGACCTGT
    AGAGCAGCTCACACAAGAGAACCACAAGCTGACTTCACCTAGTATGGGAAGGAACTTAGAAGTGAGTGGC
    AGCATTACCAATTTGAACTTTGAGAGAACTCAGCATCCTGACACATTTAGGACTGTTGTAAAAAGTGAAC
    CAAATGTGTAAGCTTATTGCAGGTGTGCTCACAAGTGCTGCTGTGGCAGTTTGTGTGGGGGTCATAATGT
    ATTCTGTTTTCACATCAAACCACAAGGCCAACTCCACGCAGAATGCCACGACCCGGAACAGCACATCCAC
    CCCTCCCCAACCAACCGCCGGTCTGCCCACCACAGAGCAAGGGACCATCCCCAGATTCACCAAACCCCCC
    ACCAAAACCGCCACCCACCATGAGATCACAGAGCCCGTCAAAATGGCAACACCTTCAGAGGATCCCTACC
    AATGCTCCAGCAATGGTTATTTGGACCGACCTGATTTACCTGAAAATTTCAAACTCGTATTGGATGTTAT
    ATGCAAGCCTCCAGGTCCTGAACATCACAACACCAGCTGTTATGAGAAACGTGAAATCAACCCAGGAAGT
    GTTTGCCCTGATCTTGTAACAATGAAGGCAAACATGGGCTTAAACAATGGTGGTGGGGAGGATGCTGCAC
    CTTATATAGAGGTTACCACCCTTTCTACGTACTCCAACAAAAGGGCAATGTGTGTCCACAATGGGTGTGA
    TCAAGGCTTCTGTTTCTTCCTTTCTGGTTTAAGCACTGATCAGGAGAGAGCTGTGCTAGAGCTTGGAGGT
    CAACAGGCTATCATGGAGTTGCATTATGATTCCTACTGGAAACACTATTGGAGTAACTCTAATTGTGTTG
    TTCCCAGAACAAACTGCAACCTGACAGACCAAACTGAGATTTTGTTTCCTAGGTTTAACAACAAGAATCA
    GTCTGAGTGTACCACCTGTGCAGATTCAGCTGGCCTAGATAACAAATTTTATCTCACATGTGATGGGCTT
    TTAAGAACCCTCCCTCTAGTTGGACTACCCAGCCTAAGTCCTCAGGCTTACAAAGCTGTACCCACACAAA
    CTACAGGCACCACCACGGCACCAACATCAGAGACGAGGCACCCAACCCCTGCACCCAGGAGGTCCAAACC
    TCTCAGTCGGAAGAAGAGAGCTTTATGTGGTGTAGACTCAAGCAGAGAACCCAAACCAACAATGCCTTAC
    TGGTGTCCTATGCTCCAATTATTTCCAAGGAGGTCTAATTCTTAAGTGACCTATTCCTGAATTAACTTCA
    GAATAAGTACCAACCTTATCAGTAGTTAATGAAAACTAAGCTTTGATATAATAGGACAAATATGATTCCT
    GGCAGGATCTTTCTAGTCCTTCTGGTGATCTTCAACACCAAGCCAATTCACCCAAATACATTAACAGAAA
    AATACTATGAGTCCACATGTAGTGTTGAGACTGCAGGTTATAAGAGTGCCCTTAGAACAGGTTGGCATAT
    GACAGTTATGTCAATTAAGTTGTCTCAAATAAATATTGAGTCATGCAAGAGCAGCAACTCGTTATTGGCT
    CATGAGCTTGCAATCTATAGTAGTGCAGTGGATGAATTGAGAACGTTATCATCCAATGCCTTGAAGTCCA
    AAAGGAAGAAGAGGTTCCTCGGTTTGATTCTTGGTCTCGGAGCTGCAGTCACTGCCGGGGTGGCTTTAGC
    CAAGACAGTGCAACTTGAAAGTGAGATTGCATTGATTAGAGATGCAGTGAGAAATACAAATGAGGCTGTT
    GTTAGCCTAACCAACGGCATGTCAGTGTTGGCTAAAGTGGTGGATGATTTGAAAAACTTCATATCTAAAG
    AATTACTCCCAAAAATAAACCGAGTCTCTTGTGATGTGCACGACATCACTGCCGTCATTAGATTCCAACA
    GCTCAACAAAAGACTTTTGGAAGTATCTCGTGAATTTTCATCTAATGCAGGATTAACACACACTGTTTCA
    TCTTTTATGTTAACAGACCGCGAACTCACCTCCATTGTAGGCGGCATGGCTGTTTCAGCAGGCCAAAAAG
    AGATAATGCTATCTAGCAAAGCTATAATGAGAAGAAATGGGTTAGCAATATTAAGTTCAGTCAACGCTGA
    CACACTGGTTTATGTAATACAACTCCCATTATTTGGTGTTATGGACACAGATTGTTGGGTAATAAGAAGT
    TCTATAGACTGTCATAACATAGCAGACAAGTATGCTTGTTTGGCTAGAGCTGATAATGGCTGGTATTGTC
    ACAATGCTGGCTCATTATCATACTTCCCGTCGCCAACGGATTGTGAGATCCACAATGGGTATGCTTTCTG
    TGACACTCTAAAAAGTCTAACTGTACCTGTAACATCACGAGAATGCAACTCAAACATGTATACCACTAAC
    TACGATTGTAAGATTTCCACAAGTAAAACTTATGTGAGTACAGCGGTACTGACTACAATGGGTTGCTTGG
    TATCTTGTTATGGTCATAACAGTTGCACAGTCATCAATAATGACAAAGGTATAATAAGGACTCTGCCAGA
    TGGTTGCCACTACATCTCCAACAAAGGTGTGGACAGGGTTCAAGTAGGTAACACTGTTTACTATCTTAGC
    AAAGAAGTTGGCAAGTCAATTGTTGTCAGAGGGGAACCATTGGTCTTGAAATATGACCCTTTGAGTTTCC
    CTGACGATAAATTTGATGTTGCTATAAGAGATGTGGAGCATAGCATCAATCAGACACGCACATTCTTCAA
    GGCCTCTGATCAGTTATTGGACTTAAGTGAAAACAGAGAGAATAAAAATTTAAACAAGTCATATATACTA
    ACAACTCTGCTCTTCGTTGTAATGCTTATTATAATAATGGCTGTCATAGGGTTCATTCTGTATAAGGTAT
    TGAAAATGATCAGAGACAACAAGTTGAAATCCAAAAGTACACCTGGCCTCACAGTTTTATCATGACAATT
    GTACCAAACCATAATTGAGTTAGTTAATTAAAAACTTAGGATAAGTGACAATCCAGACCCAACACCTCTT
    TCAACTCTCAAGGATAAGGTAGGATGAGTGTGAGACCTTGCAAATTTGAGGTTCAAGGGTTTTGTTCCAG
    AGGGAGGAATTGCAAGTATAGTCATAAATATTGGGAATGGCCTTTGAAAACTCTTATGCTCAGGCAGAAC
    TACATGCTTAATAGGATTTATAGGTTCCTCGACACCAACACAGATGCAATGTCAGATGTCAGCGGATTTG
    ATGCACCACAAAGGACTGCTGAGTATGCCTTGGGAACCATAGGTGTGCTGAAAAGTTACCTGGAAAAAAC
    TAACAACATCACTAAATCAATAGCTTGTGGCAGTTTGATCACTGTATTGCAGAACTTGGATGTTGGTCTA
    GTAATACAAGCAAGAGATAGCAACACTGAGGACACCAATTACTTGAGAAGTTGCAACACTATACTGTCTT
    ATATAGACAAGATACACAAGAAGAGACAAATTATTCACATTCTCAAAAGACTGCCAGTAGGAGTACTATG
    CAATCTGATCCAATCTGTCATCTCCATCGAGGAGAAGATAAATTCTTCTATGAAAACAGAATGATAAGGC
    TGCCTAAATACTATCCAGCCATACTGCATAAGATGTATATTATTAGAGTAAATAGAAACCTCACTTACGA
    TGGGTCTGGACCATCCACAATAATAGATGCAGGAAAGTCTGTGGTGTGGAATCGTGTTGATGTGATAGCT
    TGTGTGAAAGAGGCCTTGTGCTGCATAGAATTCAGCTGGAATAACCAAGTGATCATAGACTTTGATTATA
    GCCAGGCCAGATGATGTGGACTGTATTCCTTTTTTTGTCAGTAATCAGTTATTAACCCAAAATTGTTAAT
    TATGTAGACTTTAAGTTAACTAACTTCATGTTAATTCAATAGTTATATAAAAAAATAATTAATTAGGATC
    AATATGGATCCTATTGATGAACAAGAAGTTAATGTGTACTTGCCGGATAGCTACTTAAAGGGTGTTATAT
    CTTTTAGTGAAACTAATGCTCTTGGCAGCTGTATCATTGGTAGACCTTTCTTGAAGGATGACTTTACTGC
    CACTACTTCAATCCGTAACCCCCTAATTGAACATAAAAGAATAAGGGACACTAAATTAGTAAAAAATATT
    GTTTCAAACCCTCAATATAGGTTAGTGGAGCCTCTCCAAATGCAGCATGAGCTCTTGAGTGTACTATCGC
    CCAATTTCATATTGCACACTGCCAACTTAAGGAAAATTATACAAAGAAGTGTTGACATAACAGATAAAAA
    GTTGAACCCCATTTTGCACATTTTGAATCTTAATTCTCCTAACCAAGAGGGTAAGGTGTCGGAACGGCTA
    ACTAGGCTAATTAAGAAACATCTCTCTCACATACCTAATTGGGTAAGCAGCTGGTACAATATATGGGTCA
    ATCTTAACAACTTACTGCAGGAGTACCGTTCAAAGGAAGTTATAGACCATAACTGTGTTCTGACTAGGCA
    ATTGTCTGGAAGTTTCATACATGTGGTCATGAGTCAATATGGAGTTGTGATAATTAGCAAAAAAAGTAAA
    AGATATACAATGTGTACTTATAACCAATTCCTAACCTGGAAGGACCTTGCCTTGAGCAGATTTAATGCCA
    ATTATGTGGTCTGGCTAAGTAATGTGTTAAACACACTCAACGAGGGGTTGGGATTAAGGTGTAGATTAAA
    AGGTCATCTGCTCAGTAAGTTGTACATTTCCACTGACATCTTTTTATCTTCAACATCTAATGAATTTTAT
    AATGTGGTCAAGGAATTTGAGGGCTTCATCATGTCACTGATATTGAAACAAACTGAGGAAGCCTTATTTA
    GCACAAGGTTTTATAATAACATGTTGAACAACTTAATTGATGCCATTGATAGGGCTCGACTAGAGTATCT
    GGCCCGCTGTGCCAATTCAGCTGCCAGGATTAATTTACCTAGTACAGATGTTATGATAGCATCATTGGGT
    GATATCTTATCTTTGATAAACGTTTTAGGTGAATCCAACCTTAACAACTTAAGTGAGTTATATTTTATCT
    TCAGGATATTTGGTCACCCTATGGTTGATGAGAGGAAGGCCATGGATGCAGTCAGAGATAACTGTTGTGA
    AACAAAGTTTCTGACGGCTAAGAACCTTGCATCGTTAAGAGGAGCATATGTTTATAGAATTATCAAAGGA
    TTCGTAGCAAATTATAACAGGTGGCCTTACATAAAAACTAGAGTTTGCCTTACACCAACATGGATTAACT
    ATCTTGACACCAATTCATGTCCCTCATTATTAGAGATGACAGAAGATGATTTTATTGTGTTAGCTGGAGT
    GCACTTTATAAGAGAATTCCACATCCCAAAGCTAACTGATCTGGAGATTATATTAAATGACAAGGCCATA
    TCTCCTCCAAAATCACTCATTTGGTCATGCTTTCCAAAAAACTACATACCTCAGGTTATACAAGATGAGT
    ATGCCCGGAGGTATTGTAGAGCTAAAGCACCTTTGAAGACAAGACGTGTCTTGGAGTTCTACTTACAGGA
    CAAGGATTTCAAGTTGGATCAGCTCCATAGAGTAGTAGTGAACCAGGACTACCTTAATGATAAAGAACAT
    ATAATTTCTTTAACAGGAAAAGAAAGAGAGTTGGGTGTTGGTAGGATGTTTGCCATGCAACCTGGGAAGC
    AGAGGCAAGTCCAAATTTTAGCAGAGAAGCTGTTGGCTGATAACATCCTGCAATTCTTTCCGGAGACACT
    GACTAGATACGGTGATTTGGAGCTGCAAAAGATACTAGAGTTAAAAGCTGGACTTTCAAATAAAAATGAC
    AGATCTAAAGACTCCTACAATAATTATATAAGTAGGTGCTCATTAATTACTGATTTAAGTAAATTTAACC
    AAGCTTTTAGGTACGAGTCATCCTGTGTGTGTAGTGATCTTTTAGATGAGCTACATGGGACTCAAAGCTT
    ATTCTCTTGGCTGCATTTAACAGTACCACTGACTACTATAATGTGTACATATAGGCATGCGCCTCCAGAC
    ACTGGCAATAATTATAACGTTGATGATATAGCAGAACAGAGTGGCCTCTATAGGTATCATATGGGTGGTA
    TAGAAGGATGGTGCCAGAAGTTGTGGACTACAGAAGCCATAGCATTATTGGACACAGTAGCAGTCAAGGG
    CAGATTTCAACTAACATCCCTTATAAATGGAGATAATCAGTCTATAGATATAAGTAAACCTACAAGATTG
    GGAACAAGAACTCAGTCAGAGGCTGACTATGATTTAGCCATAAACTCTTTGAGGCTTATATCAGCTGCTT
    ACAAAGGGATAGGTCATAAGCTGAAGGAAGGAGAAACTTACCTATCACGTGACATGCAGTTTATGAGTAA
    AACCATTCAACATGAGGGGGTATATTATCCAGCTTCCATCAAAAAGATCCTGAGAGTTGGTCCATGGATT
    AACACCATACTAGACGATATCAAAACTAGCACAGAGAGTATAGGTAGTTTAACACAGGAATTAGAGTATA
    AGGGGGAAAGTCTAATGTCCAGTTTGTTATTGAGGAACTTCTGGCTATACAGGTTATACTCAGTTGACTT
    GAAAGACCATTCTTTATGTGGGAAGCAATTATATAGGTCATTAATTAAAGTACTTAAGCATCTTAAGAGA
    TGTTTTAACCTGGAAAATTTAGGAGAATGTTTAGAACTGTTTCTTAATGTCCCGATGCAGTTTGGAGGTG
    CTGACCCCAATGTCATCTATAGGTCATTCTATAGAAGGACACCAGATTTCTTGACTGAGTCCATAACTCA
    TCTAATACTGATATTAAAACACTTCAGACGTGATCTCGAGTTTAACAAAGACAATGTCTCAAAAGCAGTG
    TTGTCTTTACTAGAATTTACCAAGAATGATTCTGCTGAGTTTGTAACCTTAATGAGAGACCCTCAAGCAA
    TAGGTTCAGAGAGGCAAGCTAAAATAACTAGTGACATTAACAGAACTGCTGTAACCAGTGTGCTCTCTAA
    TGCTCCTAATGAGATATTTAGAACTAGTGCCTTACATTATTCCTCCACTGAGAATGAACTGAACGGCATA
    GCAAGTGGTGTTAGCCCTGTATATCCTCATGGTTTAAGGGTCTTATATGAATCACTACCATTCTATAAAG
    CTGAGAAAATAGTCAATATGGTGTCTGGAACAAAATCAATCACTAACATACTTGAGAAAACCTCAGCTAT
    AAGTTATACAGATATTATAAGAGCTACTAACATGATGGTCGAGAATTTAACATTGCTGACAAGAATAATG
    AAACCAGGTGCAGACACTTCTCTAGATCCAGACACCATAGTGATTACCATACTAAGTAAGATCATTAGAG
    ATAAATCTTGGGATGTAGGAGATATTATAGGTGTAACCTCACCTTCACCTGTCAGCTGCTTTAAGGTAGT
    TTACACCTCAACCCTCCAAAATAATAGTGTTGTTATTGAGAGATATACCACTGACACATATACAAGAGGC
    AAGAGAGGGCCTACAAAACCCTGGGTGGGCTCTAGCACCCAAGAAAAGAAATCAATGCCTGTATACAACA
    GACAGGTGCTCACAAGAGGCCAGAGAGACCAAATAGAGAACATAGCAAAACTAGAATGGGTTTTCAGCTC
    TGTTGCAAACATAGACTCATTATTGAATGAGCTAAGCACTATGACCTTGGGCTTAAGTCTGAGAAAATGT
    AGGCAATTATTTCCCACTTATTTGAGTTTAAACTTTCTCCATAGACTATCAGTGAGCAGCAGACCTCGGG
    AGTACCCCTCATCTTTACCTGCTTACAGGACTACTAACTTCCACTTTGACACAGGTCCTATAAATAAAGT
    TTTAACTGAGAGGTTTGGAGACGAGGATATTAACCTTGTGTTTCAGAATGCAATTAGCTATGGGCTAAGC
    ACTATGAGTTTGGTAGAACAGTTTACTGGAGTGTGTCCTAATAAGGTTTTGCTTGTGCCAAAGCTTCAGG
    AAATACAACTCATGAAAGTCCCAATATTTCAAGGGGGATTTAATCTACAGTCTATTATACCTATAATTAG
    GCAGCAACACATGTTCCTTCCTAACCATATAACACCAGCTCAATATATAGAATTGTTTCTGAGTAGTAAA
    CAGTTCCACTCACGAATTAACTTAAAACACAATAATAGGTTTAAATTGGTTTTGCAAAAAGATTACTTTA
    ACGGGGAAAACATGATTGAGACCTTAAGCACATGTCTTGCTGGTCATTGGATCATAATTCTTATGTTGAT
    GAAAGAATCACAAGGTATCTTTGACAAAGAATGGTACGATGGGTTTGTCACAGACCACATGTTCCTGGAC
    TTACAACTCTTCCTCTCTAGCTTTAAAACATTTCTCACAGTTTTTAACTTTGCATATCTTAAGGTAGGAT
    CAAACATAGAGGAGATAACAGGTAATCAGGCAAATTTACTAGAACTATTAGACCTTGGTTACTGGAAAAA
    CATGTATAAAGTTTTCAGTGAGACAAAAGTGAGACTAGCTTTATTAAAGCAAGATTTGAGTTTCAACTCA
    GTGAAAAATTCCTCCAGCTTTAGACATTGGTTTATAAACTCACTACAGGAAGTTCAGTGTACTAGTGTCC
    CTTGGGTTGTTAATGTAACTAGAAACCCCACACACCTTAAAGGTGTGTTGCAATATATGAAAATGATAGA
    GTCAGGCATGATTCAGGGTTACTCAGCTAACATCAGTTCAGTCCTATCAATCCCATACAACTATCCTGAC
    ATGGCGCACATGATGACAAAGATTATTAGAAATAGAGGTCATATGTCTTATGATTATCCCAAGATGAAGA
    AGAGTTTAACGTTCTCGATGACGGACATGTCAGATTCTTACATGCTAAATCTCTTCCCTAAAGTTGAGTG
    CTCATATATGAGTGGTTATTTAGATAAATTAGATGATACATTGCAACTGCTCAAAAAACCACCCGTGGGT
    AGGAAAGTACCTTCTGTAGCACTACCCTGGCATCACTGCAACCGATACAATTTTGTGTTCAGTTCCACAG
    GTTGTAAGGTATCTGTAATAGATATGTTACCTAAGCATTTCCGGAGAAGTAATTTAAAGGTTATATGTTT
    CATAGGTGAAGGTGCTGGAAACCTTATGTTAAGAGCAGTCTTAGAAGTAGGTGGGAATATTAAACTTATT
    TACAGGAGCCTAAAAGACCCTGATGACCATCATGTTCCTGTGGAGTTTCTTAGATTAAAACCTTGTTATC
    CTTACATAGATACAGGTGGATCACTGAGTCTGGCATCAACTGATGCTACTAATAAAGCACATTGGGATTA
    CCTGCATTTACATTGGACAGATCCTTTAAATTTAATAGTATGTGATGCTGAAATTAGTGGTGTTAAGCAC
    TGGTTGAAAATATTGCATAGATGGTATGAGCACATGACCAGCTGTAAGCACTGCCTTAAGTCAGAGCATG
    ATAAATATTTGATTATCAAATATCATGCACAGGATGACCTTATAGACTTACCTCATGGTGTGCGCCTATT
    GAAGTGCAATATCTGTCTTGGTAGTAAACTGTCAGGCTCAGAGTCTTACCTGCTTATAGGATTGGGGTTA
    TCCAATAAATTACCTGTGTACAGCGAGGTATTGCACTCTAAACTACTTCTAGCAGAATGTCACCAATTCC
    ATCATCCTAAATATCTGGATGTATCAGGTATTAACACTAACATTAAGTCTCTTCTACCTATGCTGGATTA
    CCCCATCACTTATAATAAGATTACAACATTATTAGAATCTGTTAGAGAATTGTCTTCAAATAAAAATAAA
    AATACAATGTGGATTGGACGAAACCCTGTTTACCATAACAAATGGCTAAAGAGAAAGTATTTTAACATAC
    TTAAATGGTTAAAGTATTGTATTGAATTACCAGCTTTTAGAATGGATTATAATTCATTTGAGAGGATAGA
    AATGCTTTACCCCAACTTAAGGGATTTAGTGGATTCTGTGTCAACAAGTGAACTGAAAAAAGTTATAAAA
    GTCACAGGGATTCTTTTCCGATCTAACACAATGTAAATTAATATGCCAATGCTAACATGTCATCCCCACT
    ACTTTTTTTGTTCAATCACTCTCAGTCTAGACATGTGAGAAGGTCCCAAACCCAACTGCACCCCTCCCAC
    TCGAAATCAGTTGTAGCCTCAGCAGCTCCATCTGCCATGATCTCTGACCAGCAGCAAATGTATTATTATT
    TTAATTTGTCTATAGTTAACAAAAAATTGATATCTCACAGGTTGTAAACATAGTTCTTTTATAATTATTG
    TTAGTTAAACTATTGTGTTTGACTTCCTTTGGGTATTTTTTTCCCGT
    ";
    $conn = mysqli_connect("localhost", "root", "", "fci");
    


    $complement=DNA_complment($Fasta_Seq );

    $Reverse=DNA_Revcomp($Fasta_Seq );
    $Gc=GC_Percentage($Fasta_Seq);
    $translation= DNA_to_protein($Fasta_Seq ) ;
    $transcription=DNA_to_RNA($Fasta_Seq );

    

    $q = "INSERT INTO `pneumonia`(`id`, `Genome_Symbol`, `Genome_Name`,  `Gene_Type`,`Fasta_Seq`,`Complete_Genome`,`Gc`,`Reverse`,`complement`,`translation`,`transcription`) VALUES ('$id','$Genome_Symbol','$Genome_Name','$Gene_Type','$Fasta_Seq','$Complete_Genome','$Gc','$Reverse','$complement','$translation','$transcription')";

    mysqli_query($conn, $q);
    if (mysqli_affected_rows($conn))
     {
        header("LOCATION:index.html");
     }
      else 
      {
        header("LOCATION:Post.php");
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
    <form name="myForm" action="post.php" method="POST" onsubmit="return validateForm()">
<fieldset>
    <legend > Insert Genome </legend>
    <br><label for="GEnome ID">Genome ID:</label>
    
    <br>
    <input type="number" id="GName" name="G_id" required><br>
    <br><label for="GName">Genome Name:</label>
    <br>
    <input type="text" id="GName" name="GName" required><br><br>

    <label for="Gsymbol">Genome Symbol:</label>
    <br>
    <input type="text" id="Gsymbol" name="Gsymbol" required><br><br>

    <label for="Fasta">Fasta Sequence:</label>
    <br>
    <textarea  name="Fasta" required></textarea>
      <br><br>

    

    

  <input type="reset" id="reset">
  <input type="submit" name="submit" value="Submit" /><br><br>
    
  </fieldset>
</form>
</body>
</html>
