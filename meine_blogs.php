<?php
$bid = $_SESSION['uid'];
$entries = getEntries($_SESSION['uid']);
foreach ($entries as $entry ) {
$eid = $entry['eid'];
$title = $entry['title'];?>

<br/>
<br/>

<a href='index.php?function=meine_blogs&bid=<?php echo $blogId ?>&eid=<?php echo $eid?>'> <?php echo $title?> </a>
<br/>

<?php echo date('d.m.Y H:i',$entry['datetime']);?>
<br/>
<a class="btn btn-primary mt-2" href="index.php?function=blog_bearbeiten&bid=<?php echo $bid?>&eid=<?php echo $eid?>" role="button">Bearbeiten</a>

<div class='form-group' style='margin-top: 20px'>

<?php
}
if(isset($_GET['eid'])){
 $eid= $_GET['eid'];
$entry = getEntry($eid);
echo $entry['content'];
}
 ?>
