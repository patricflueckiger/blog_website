<?php
  // Alle Blogs bzw. Benutzernamen holen und falls Blog bereits ausgewählt, entsprechenden Namen markieren
  // Hier Code....
 $blogid = 0;

	$blogs = getUserNames();
	foreach ($blogs as $blog) {
		$blogid++;
			echo "<div><a href='index.php?function=blogs&bid=".$blog['uid']."' title='uid'><h4>".$blog['name']."</h4></a></div>";
	}
  // Schlaufe über alle Blogs bzw. Benutzer
  // Hier Code....

  // Nachfolgend das Beispiel einer Ausgabe in HTML, dieser Teil muss mit einer Schlaufe über alle Blogs und der Ausgabe mit PHP ersetzt werden
?>
