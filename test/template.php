<!-- Данный шаблон будет иметь доступ к переменной $order -->
<div>
    <h3>Номер заказа: <?php echo $order['id'] ?></h3>
    <p>Описание: <?php echo $order['description'] ?></p>
    <p>Стоимость: <?php echo $order['price'] ?>.руб</p>
</div>