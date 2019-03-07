<?php
include "picture.php";
if (isset($_POST['submit']))
{
    $picture = new picture();
    $picture->insertPic($_FILES);


}


?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</head>
<body>
<form method="post" action="" enctype="multipart/form-data">
    <fieldset id="buildyourform">
        <input type="file" value="" class="addImage" name="image[0]" id="firstField" />
    </fieldset>
    <input type="button" value="+" class="add" id="add"  />
    <input type="submit" name="submit"  />

</form>
<script src="js/script.js"></script>
</body>
</html>
