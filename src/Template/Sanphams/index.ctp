
<h1>Blog Tags</h1>
<p><?= $this->Html->link("Add User", ['action' => 'add']) ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>name</th>
        <th>soluong</th>
        <th>nguongoc</th>
    </tr>
    <?php foreach ($kqload as $totl):?>
    <tr>
        <td><?= $totl->id ?></td>
        <td><?= $totl->name ?></td>
        <td>
            <?= $totl->soluong ?>
        </td>
        <td><?= $totl->nguongoc ?></td>
        <td class="actions">
            <?= $this->Html->link('Delete', ['action' => '#']) ?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $totl->id]) ?>
        </td>
    </tr>
    <?php endforeach; ?>
   
</table>