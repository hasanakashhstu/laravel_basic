<!DOCTYPE html>
<html>
<body>

<p>Page name : {{$page[0]->name}}</p>
<p>Page description: {{$page[0]->description}}</p>
<br>
<br>
<?php
foreach($page as $page)  {
  echo "Name: $page->name <br> Description: $page->description";
  echo"<br><br>";
}
?>
</body>
</html>
