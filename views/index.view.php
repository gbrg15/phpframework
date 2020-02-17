<!DOCTYPE html>
<html>
<head>
<title>Test Page</title>
</head>
<body>

<nav>
  <ul>
    <li><a href="about">About us</a></li>
    <li><a href="contact">Contact</a></li>
    <li><a href="about/culture">About our culture</a></li>
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
