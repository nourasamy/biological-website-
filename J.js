function validateForm() {
    var x = document.forms["myForm"]["ch"].value;
    if (x == "") {
        alert("You must be Choose one process !");
        return false;
    }
    var y = document.forms['myForm']["Fasta"].value;
    for (i in y) {
        if (y[i] != "c" && y[i] != "g" && y[i] != "t" && y[i] != "a" && y[i] != "n" && y[i] != "C" && y[i] != "G" && y[i] != "T" && y[i] != "A" && y[i] != "N") {
            alert(" invalid Genome !");
            return false;
        }

    }

    var z = document.forms['myForm']["G_id"].value;
}