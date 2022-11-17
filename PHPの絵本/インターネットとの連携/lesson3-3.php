<?php
if(move_uploaded_file(
  $_FILES["upfile"]["tmp_name"],
  "./".$_FILES["upfile"]["name"]
) == false){
  print "失敗";
}else{
  print ($_FILES["upfile"]["name"]);
  print "をアップロードしました"
}

?>