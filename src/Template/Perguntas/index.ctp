<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pergunta[]|\Cake\Collection\CollectionInterface $perguntas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pergunta'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="perguntas index large-9 medium-8 columns content">
    <h3><?= __('Perguntas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_user') ?></th>
                <th scope="col"><?= $this->Paginator->sort('texto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($perguntas as $pergunta): ?>
            <tr>
                <td><?= $this->Number->format($pergunta->id) ?></td>
                <td><?= $this->Number->format($pergunta->id_user) ?></td>
                <td><?= h($pergunta->texto) ?></td>
                <td><?= h($pergunta->created) ?></td>
                <td><?= h($pergunta->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pergunta->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pergunta->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pergunta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pergunta->id)]) ?>
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
