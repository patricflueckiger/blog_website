<?php
  // Alle Blogs bzw. Benutzernamen holen und falls Blog bereits ausgewählt, entsprechenden Namen markieren
  // Hier Code....
 $blogid = 0;
 $styleid = $_GET['bid'];
	$blogs = getUserNames();
	foreach ($blogs as $blog) {
		$blogid++;
		if($blog['uid'] == $styleid){
			echo "<div ><a href='index.php?function=entries_public&bid=".$blog['uid']."' title='uid' ><h4 style='color: green;'>".$blog['name']."</h4></a></div>";
		}
		else{
			echo "<div><a href='index.php?function=entries_public&bid=".$blog['uid']."' title='uid'><h4>".$blog['name']."</h4></a></div>";
		}
	}
  // Schlaufe über alle Blogs bzw. Benutzer
  // Hier Code....

  // Nachfolgend das Beispiel einer Ausgabe in HTML, dieser Teil muss mit einer Schlaufe über alle Blogs und der Ausgabe mit PHP ersetzt werden
?>
