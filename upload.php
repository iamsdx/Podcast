<?php
if
  (
    ($_FILES["file"]["type"] == "audio/mpeg")||
    ($_FILES["file"]["type"] == "audio/x-m4a")
  )
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "上传：" . $_FILES["file"]["name"] . "<br />";
    echo "类型：" . $_FILES["file"]["type"] . "<br />";
    echo "大小：" . number_format(($_FILES["file"]["size"] / 1048576),2) . " MB<br />";
    //echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo "<br />重复提示：" . $_FILES["file"]["name"] . " 已存在";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      echo "存储位置： " . "upload/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "未知音频格式";
  }
?>