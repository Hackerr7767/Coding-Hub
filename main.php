<?php
class Form {
function GET() {
if(isset($_POST["email"])) {
echo $_POST["email"];
}
  if(isset($_POST["password"])) {
  echo $_POST["password"];
  }
}
}
$f = new Form();
$f->GET();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
  </head>
  <body>
    <div id="form">
      <form action="main.php" method="post">
      <input type="email" />
        <input type="password" />
        <input type="submit" />
      </form>
    </div>
  </body>
</html>
