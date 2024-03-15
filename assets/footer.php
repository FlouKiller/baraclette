<br>
<footer>
  <div>
    <p>Suivez-nous sur :</p>
    <ul>
      <li><a href="https://www.facebook.com/Baraclette/" target="_blank">Facebook</a></li>
      <li><a href="https://twitter.com/Baraclette" target="_blank">Twitter</a></li>
      <li><a href="https://www.instagram.com/Baraclette/" target="_blank">Instagram</a></li>
      <?php
      if (isset($_SESSION["username"])){
        echo "<li><p>Connecté en tant que : " . $_SESSION["username"] . "</p> <a href='assets/logout.php'>déconnexion</a></li>";
      } else {
        echo "<li><a href='administration.php'>Se connecter</a></li>";
      }
      ?>
    </ul>
  </div>
</footer>