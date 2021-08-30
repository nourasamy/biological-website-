<!DOCTYPE html>
    <html>

    <head>
        <title>Genome Update</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="C.css">
    </head>

    <body>
        <script src="J.js"></script>
        <form name="myForm" action="update.php" method="POST" onsubmit="return validateForm()">
            <fieldset>

                <br><label for="id">Genome Name :</label>
                <input type="text" id="id" name="Genome_Name" required><br><br>

                
                <input type="submit" name="edit" value="edit" /><br><br>

            </fieldset>
        </form>
    </body>

    </html>