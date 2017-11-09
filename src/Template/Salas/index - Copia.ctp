<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sala[]|\Cake\Collection\CollectionInterface $salas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sala'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="salas index large-9 medium-8 columns content">
    <h3><?= __('Salas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('link') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nr_students') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($salas as $sala): ?>
            <tr>
                <td><?= $this->Number->format($sala->id) ?></td>
                <td><?= h($sala->name) ?></td>
                <td><?= h($sala->link) ?></td>
                <td><?= $this->Number->format($sala->nr_students) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sala->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sala->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sala->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sala->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
