<?php

$eid = $_GET['eid'];
$entry = getEntry($eid);
$title = $entry['title'];
$content = $entry['content'];
?>


<form action="<?php echo $_SERVER['PHP_SELF']."?function=updateEntry"; ?>" method="post">

  <div class="form-group" style="margin-top: 4em; width: 50%">
    <label for="inputTitel">Titel:</label>
    <input type="text" name="inputTitel" id="inputTitel" placeholder="Titel" class="form-control" value="<?php echo $title?>" required>
  </div>
</br>
  <div  style="margin-top: 4em;  width: 100%">
    <label for="inputContent">Text:</label>
    <input type="text" name="inputContent" id="inputContent" placeholder="Content" value="<?php echo $content?>" required>
  </div>

</form>
