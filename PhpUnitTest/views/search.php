<h1 class="h2">
    Результат поиска
</h1>
<?php if($this -> params['orders'] !== []): ?>
<table class="table table-dark">
    <thead>

    <tr>

        <th scope="col">Поставщик</th>
        <th scope="col">Имя получателя</th>
        <th scope="col">Город получателя</th>
        <th scope="col">Товар</th>
        <th scope="col">Колличество</th>
        <th scope="col">Цена за шт.</th>
        <th scope="col">Стоимость</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($this -> params['orders'] as $order): ?>
        <tr>

            <td><?= $order['company']; ?></td>
            <td><?= $order['ship_name']; ?></td>
            <td><?= $order['ship_city']; ?></td>
            <td><?= $order['product_name']; ?></td>
            <td><?= $order['quantity']; ?></td>
            <td><?= $order['unit_price']; ?></td>
            <td><?= $order['quantity'] * $order['unit_price']; ?></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>
    <?php else: ?>

<h2 class="h3">
    Товаров не найдено
</h2>
    <?php endif; ?>