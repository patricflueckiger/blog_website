




<
<?php
$entries = getEntries($blogId);
foreach ($entries as $entry ) {
$eid = $entry['eid'];
$title = $entry['title'];
echo "<br/>";
echo "<br/>";
echo $entry['title'];
echo "<li><a href='index.php?function=entries_public&bid=$blogId&eid=$eid'>$title</a></li>";
echo "<br/>";
echo date('d.m.Y H:i',$entry['datetime']);

}

if(isset($_GET['eid'])){
 $eid= $_GET['eid'];
$entry = getEntry($eid);
echo $entry['content'];
}
?>
</div>
