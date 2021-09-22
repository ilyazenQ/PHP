<h1>
    Перечень часто используемых фраз для менеджеров
</h1>
<?php if($this -> params['success']): ?>
<div class="alert alert-success" role="alert">
    Фраза успешно добавлена!
</div>
<?php endif; ?>
<a href="/phrase/create" type="button" class="btn btn-primary m-1">Добавить новую фразу</a>
<table class="table table-dark">
    <thead>

    <tr>

        <th scope="col">Фраза</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach($this -> params['phrases'] as $phrase): ?>
        <tr>

            <td><?= $phrase['string_data']; ?></td>

        </tr>
    <?php endforeach;?>
    </tbody>
</table>