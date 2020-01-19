<?php
if(isset($_FILES["fileToUpload"]))
{
$target_dir = "files/";
if($_POST['txt'])
{
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]).".txt";
}
    else
    {
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    }
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
}
?>

<!DOCTYPE html>
<html>
<body>

<form action="index.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <br>
    
    <input placeholder="enter 1 for convert to txt" name="txt" type="number" /><br>
    <input type="submit" value="Upload file" name="submit">
</form>
<a href="files/">
    go to files</a>
    
      
    
    
</body>
</html>