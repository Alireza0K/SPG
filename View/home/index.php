<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title> </title>
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<body>
    <div class=" container">
        <form action="" method="POST" style="margin:15px 0px;">
            <div class="d-flex justify-content-center">
                <div class="col-5 ">
                    <div class="input-group" style="margin:15px 0px;">
                        <span class="input-group-text">Enter digits of password character</span>
                        <input type="text" aria-label="First name" class="form-control" placeholder="for example 12" name="password_digits" value="<?php echo $_POST['password_digits'] ?? null?>">
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="Alphabet" value="true" <?php if($_POST['Alphabet'] ?? null == true){echo "checked";}?>>
                        <label class="form-check-label" for="inlineCheckbox1">Alphabet (a.b.c.d)</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="Number" value="true" <?php if($_POST['Number'] ?? null == true){echo "checked";}?>>
                        <label class="form-check-label" for="inlineCheckbox1">Numbers (1.2.3.4)</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="Element" value="true" <?php if($_POST['Element'] ?? null == true){echo "checked";}?>>
                        <label class="form-check-label" for="inlineCheckbox1">Element (!@#$%^&*()}{?><}~) </label>
                    </div>

                    <br>
                    <button type="submit" name="SendToGenerate" class="btn btn-md btn-warning" style="margin: 10px 0px; display:inline;">Generate</button>
                </div>
        </form>
    </div>
    <div class="d-flex justify-content-center">
        <div class="row g-3">
            
            <div class="col-auto">
                <label for="staticEmail2" class="visually-hidden"></label>
                <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Select You're password :">
            </div>

            <div class="col-auto">
                <input type="text" class="form-control" placeholder="you're password is here" id="myInput" value="<?php echo $lastResult ?? null;?>">
            </div>

            <div class="col-auto">
                <button class="btn btn-primary" onclick="myFunction()" id="CopyPassword">Copy password</button>
            </div>
        </div>
    </div>
    </div>

    <script>
        function myFunction() {
            // Get the text field
            var copyText = document.getElementById("myInput");

            // Select the text field
            copyText.select();
            copyText.setSelectionRange(0, 99); // For mobile devices

            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText.value);

            // Alert the copied text
            alert("Copied the text: " + copyText.value);
        }
    </script>
</body>

</html>