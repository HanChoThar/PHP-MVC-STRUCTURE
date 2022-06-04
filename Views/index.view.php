<?php require("partials/header.php") ?>

<h1>My MVC Structure</h1>
<?php foreach($users as $user): ?>
  <p><?php echo $user->name ?></p>
<?php endforeach; ?>

<h1>submit something</h1>
<form action="/name" method="POST">
  <input type="text" name="name">
  <input type="submit" value="submit">
</form>

<?php require("partials/footer.php") ?>
