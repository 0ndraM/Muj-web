<?php
// Zde zadej adresu, kam se má uživatel přesměrovat
$nova_url = "https://0ndra.maweb.eu/p2j/";

// Odeslání HTTP hlavičky s novou lokací
header("Location: " . $nova_url);

// Okamžité ukončení skriptu
exit;
?>