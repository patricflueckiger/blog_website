





<?php
$entries = getEntries($blogId);
foreach ($entries as $entry ) {
$eid = $entry['eid'];
$title = $entry['title'];
echo "<br/>";
echo "<br/>";
echo "<a href='index.php?function=entries_public&bid=$blogId&eid=$eid'>$title</a>";
echo "<br/>";
echo date('d.m.Y H:i',$entry['datetime']);

}
echo "<div class='form-group' style='margin-top: 20px;'>";
if(isset($_GET['eid'])){
 $eid= $_GET['eid'];
$entry = getEntry($eid);
echo $entry['content'];
}
?>
</div>
</div>
