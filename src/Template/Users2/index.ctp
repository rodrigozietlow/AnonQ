<!-- File: src/Template/Users/index.ctp -->

<h1>Users</h1>
<table>
    <tr>
        <th>Name</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->

    <?php foreach ($users as $user): ?>
    <tr>
        <td>
            <?= $this->Html->link($user->name, ['action' => 'view', $user->id]) ?>
        </td>
        <td>
            <?= $user->created->format(DATE_RFC850) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
