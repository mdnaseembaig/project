<?php
if($_SERVER["REQUEST_METHOD"] != "POST"){
  echo "Form not submitted";
  exit;
}

if(!is_dir("uploads")){
  mkdir("uploads");
}

echo "<h2>Uploaded PDFs</h2>";

if(!empty($_FILES["pdfs"]["name"][0])){

  for($i=0; $i<count($_FILES["pdfs"]["name"]); $i++){

    if($_FILES["pdfs"]["error"][$i] == 0){

      $fileName = time()."_".$_FILES["pdfs"]["name"][$i];
      $tmpName  = $_FILES["pdfs"]["tmp_name"][$i];
      $path     = "uploads/".$fileName;

      move_uploaded_file($tmpName,$path);

      echo "<p>
              <b>$fileName</b><br>
              <a href='$path' target='_blank'>View</a> |
              <a href='$path' download>Download</a>
            </p>";
    }
  }

}else{
  echo "No PDF selected";
}
?>
