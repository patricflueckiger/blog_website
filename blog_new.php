<?php
$title = "";
$content  ="";
$entry = null;

if (isset($_POST["inputTitel"])) {
  $title = $_POST["inputTitel"];
}

if (isset($_POST["inputContent"])) {
  $content = $_POST["inputContent"];
}
if (strlen($title)>1) {
addEntry($blogId, $title, $content);
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']."?function=blog_new&bid=$blogId"; ?>" method="post">

  <div class="form-group" style="margin-top: 4em; width: 50%">
    <label for="inputTitel">Titel:</label>
    <textarea rows="1" type="text" name="inputTitel" id="inputTitel" placeholder="Titel" class="form-control"></textarea>
<br></br>
  <div  style="margin-top: 4em;  width: 50%;">
    <label for="inputContent">Text:</label>
    <br></br>
    <textarea rows="35" cols="120" type="text" name="inputContent" id="inputContent" placeholder="Content"></textarea>
  </div>
  <br></br>
<button type="submit" name="veröffentlichen">Beitrag veröffentlichen</button>
</form>

<style media="screen">
  textarea{
    resize: none;
  }
</style>
