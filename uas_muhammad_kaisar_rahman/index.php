<?php
require_once __DIR__.'/application/config/config.php';
$name='Muhammad Kaisar Rahman'; $nim='2201010187';
?><!doctype html><html lang="id"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>UAS Web Design - <?=htmlspecialchars($name)?></title><link rel="stylesheet" href="assets/css/style.css"></head><body><main class="card"><div class="badge">UAS WEB DESIGN</div><h1>Selamat Datang</h1><p class="lead">Project website CodeIgniter-style untuk tugas UAS.</p><div class="info"><div><span>Nama</span><strong><?=htmlspecialchars($name)?></strong></div><div><span>NIM</span><strong><?=htmlspecialchars($nim)?></strong></div></div><a class="btn" href="application/views/home.php">Buka Project</a></main></body></html>
