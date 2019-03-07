
<?php
include "Db.php";
class picture extends Db
{
    public function insertPic($images)
{
        foreach ($images['image']['name'] as $key => $val ) {

            $filename = $images['image']['name'][$key];
            $filesize = $images['image']['size'][$key];
            $filetempname = $images['image']['tmp_name'][$key];
        }
            $upload_dir = 'uploads/';

            $img_ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
            $pic = mktime() . rand(1000, 1000000) . "." . $img_ext;
            move_uploaded_file($filetempname, $upload_dir . $pic);




        $sql = "INSERT INTO `insert`(`pic`) VALUES (:pic)
";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindparam(':pic', $pic);


        $stmt->execute();
    }}
?>