<?php require "init.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title><?php echo page_home;?></title>
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<body>
    <div class=" container" >
        <form action="" method="POST" style="margin:15px 0px;">
        <div class="d-flex justify-content-center">
            <div class="col-5 ">
                <div class="input-group" style="margin:15px 0px;">
                    <span class="input-group-text">Enter digits of password character</span>
                    <input type="text" aria-label="First name" class="form-control" placeholder="12" name="password_digits" value="<?php echo !isset($password_digits) ? null : $password_digits ;?>">
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="Alphabet" value="Alphabet" <?php echo !isset($alphabet) ? null :"checked"?>>
                    <label class="form-check-label" for="inlineCheckbox1">Alphabet (a.b.c.d)</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="Object" value="Object" <?php echo !isset($object) ? null :"checked"?>>
                    <label class="form-check-label" for="inlineCheckbox2">Object (@!#$)</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="Number" value="Number" <?php echo !isset($number) ? null :"checked"?>>
                    <label class="form-check-label" for="inlineCheckbox3">Number </label>
                </div>
                <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox4" name="Alphabet-Small" value="Alphabet-Small" <?php echo !isset($alphabet_small) ? null :"checked"?>>
                    <label class="form-check-label" for="inlineCheckbox4">Alphabet (A.B.C.D)</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox5" name="Object-2" value="Object-2" <?php echo !isset($object_2) ? null :"checked"?>>
                    <label class="form-check-label" for="inlineCheckbox5">Object ({} , () , [])</label>
                </div>
                <br>
                <button type="submit" class="btn btn-md btn-secondary" style="margin: 10px 0px; display:inline;">Generate</button>
            </div>
            </form>
        </div>
        <div class="d-flex justify-content-center">
            <div class="col-5 ">
                <h5>Select You're password :</h5>
                <h6 id="complete-password"><?php echo !isset($Password) ? null :$Password ;?></h6>
            </div>  
        </div>       
    </div>
</body>
</html>