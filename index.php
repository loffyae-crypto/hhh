<?php require 'config.php'; $pageTitle='Главная'; require 'header.php'; ?>
<section class="hero">
    <h1>Информационная система заявок</h1>
    <p>Выберите нужный объект или услугу и отправьте заявку администратору.</p>
    <a class="btn" href="register.php">Начать работу</a>
</section>
<section class="cards">
<?php
$result = $mysqli->query("SELECT * FROM rooms ORDER BY id");
while ($room = $result->fetch_assoc()): ?>
    <div class="card">
        <h3><?= htmlspecialchars($room['name']) ?></h3>
        <p><b>Тип:</b> <?= htmlspecialchars($room['type']) ?></p>
        <p><?= htmlspecialchars($room['description']) ?></p>
        <p class="price">от <?= number_format($room['price'], 0, ',', ' ') ?> ₽</p>
    </div>
<?php endwhile; ?>
</section>
<?php require 'footer.php'; ?>
