<!DOCTYPE html>
<html>
<head>
<title>Test Page</title>
</head>
<body>

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
