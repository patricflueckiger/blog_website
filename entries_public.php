



<?php
$entries = getEntries($blogId);
foreach ($entries as $entry ) {
echo "<br/>"; echo "<br/>";
echo $entry['title'];
echo "<br/>";
echo date('d.m.Y H:i',$entry['datetime']);
echo "<br/>";

}
?>


<?php
$entries = getEntries($blogId);
foreach ($entries as $entry ) {
echo "<br/>"; echo "<br/>";
echo $entry['title'];
echo "<br/>";
echo date('d.m.Y H:i',$entry['datetime']);
echo "<br/>";
$content = nl2br($blog['content']);
echo $entry['content'];
}
?>
</div>


  // Alle Blogeinträge holen, die Blog-ID ist in der Variablen $blogId gespeichert (wird in index.php gesetzt)
  // Hier Code... (Schlaufe über alle Einträge dieses Blogs)

  // Nachfolgend das Beispiel einer Ausgabe in HTML, dieser Teil muss mit einer Schlaufe über alle Blog-Beiträge und der Ausgabe mit PHP ersetzt werden
