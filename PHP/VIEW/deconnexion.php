<?php
session_destroy();

echo '<p>Vous êtes à présent déconnecté</p>';
header('refresh:3,url=index.php?action=connexion');