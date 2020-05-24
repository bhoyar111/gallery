<?php
 session_start();
 $id= session_id();
 if ($_SESSION['id'] !=$id) {
     session_destroy();
     header('location:login.php');
 }



if (isset($_GET['file'])) {
    if (!empty($_GET['file']))
    {
       $filename = basename($_GET['file']);
       $filepath = 'admin_IG/upload/'.$filename;
       if(!empty($filename) && file_exists($filepath) ){
           
           // define header
            header("Cache-control:public");
            header("content-Description:File Transfer");
            header("Content-Disposition:attachment;Filename= $filename");
            header("Content-Type:application /zip");
            header("Content-Transfer-Encoding:binary");

            readfile($filepath);
            exit;
        } else{
            echo "this file does not exitst";
        }
    }
}

?>