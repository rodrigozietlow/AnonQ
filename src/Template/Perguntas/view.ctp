<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pergunta $pergunta
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pergunta'), ['action' => 'edit', $pergunta->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pergunta'), ['action' => 'delete', $pergunta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pergunta->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Perguntas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pergunta'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Salas'), ['controller' => 'Salas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sala'), ['controller' => 'Salas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="perguntas view large-9 medium-8 columns content">
    <h3><?= h($pergunta->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $pergunta->has('user') ? $this->Html->link($pergunta->user->name, ['controller' => 'Users', 'action' => 'view', $pergunta->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sala') ?></th>
            <td><?= $pergunta->has('sala') ? $this->Html->link($pergunta->sala->name, ['controller' => 'Salas', 'action' => 'view', $pergunta->sala->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Texto') ?></th>
            <td><?= h($pergunta->texto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pergunta->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($pergunta->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($pergunta->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Tags') ?></h4>
        <?php if (!empty($pergunta->tags)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Sala Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pergunta->tags as $tags): ?>
            <tr>
                <td><?= h($tags->id) ?></td>
                <td><?= h($tags->nome) ?></td>
                <td><?= h($tags->sala_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tags', 'action' => 'view', $tags->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tags', 'action' => 'edit', $tags->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tags', 'action' => 'delete', $tags->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tags->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
