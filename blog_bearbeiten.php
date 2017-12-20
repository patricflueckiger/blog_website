<?php

$eid = $_GET['eid'];
$blogId = $_GET['bid'];
$entry = getEntry($eid);
$title = $entry['title'];
$content = $entry['content'];


if(isset($_POST['inputContent'])&&isset($_POST['inputTitel'])){
    $title = $_POST['inputTitel'];
    $content = $_POST['inputContent'];
    updateEntry($eid, $title, $content,time());

}

if(isset($_POST['deleteEntry'])){
  deleteEntry($eid);
  header('Location:index.php?function=meine_blogs&bid='.$blogId);
}

?>


<form action="<?php echo $_SERVER['PHP_SELF']."?function=blog_bearbeiten&eid=$eid&bid=$blogId"; ?>" method="post">

  <div class="form-group" style="margin-top: 4em; width: 50%">
    <label for="inputTitel">Titel:</label>
    <textarea rows="1" type="text" name="inputTitel" id="inputTitel" placeholder="Titel" class="form-control"><?php echo $title?></textarea>
  </div>
  <div  style="margin-top: 4em;  width: 100%">
    <label for="inputContent">Text:</label>
    <br></br>
    <textarea rows="35" cols="120" type="text" name="inputContent" id="inputContent" placeholder="Content"><?php echo $content?></textarea>
  </div>
      <br></br>
<input id="updateButton" class="btn btn-primary mt-2"  type="submit" value="Änderungen Speichern"></input>
<label for"deleteEntry">
<input id="deleteEntry" name="deleteEntry" class="btn btn-primary mt-2"  type="submit" value="Beitrag löschen"></input>
</label>
<a class="btn btn-primary mt-2"  role="button">Änderungen verwerfen</a>
</form>

<?php

?>
<style media="screen">
  textarea{
    resize: none;
  }
</style>
