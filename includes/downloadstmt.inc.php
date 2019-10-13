<?php
    session_start();
    include 'includes/statements.inc.php';


    if(isset($_POST['submit']))
    {
        //header("Content-attachment: download; filename='$file'");
        $stat->bindParam(1, $id);
        $data = $stat->fetch();

        $the_file = '/Users/antonioguzman/Downloads/' . $file;

        if(file_exists($the_file)) {
            readfile($the_file);
            exit;
        }
        
    }
?>