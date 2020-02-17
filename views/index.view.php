<!DOCTYPE html>
<html>
<head>
<title>Test Page</title>
</head>
<body>

<nav>
  <ul>
    <li><a href="/about.view.php">About us</a></li>
    <li><a href="/contact.view.php">Contact</a></li>
    <li><a href="/about.php">About us</a></li>
  </ul>
</nav>
<h1>User list</h1>
<ul>
  <?php foreach ($users as $user): ?>
    <li>
      <?= $user->Name?>
    </li>
  <?php endforeach; ?>
</ul>

</body>
</html>
