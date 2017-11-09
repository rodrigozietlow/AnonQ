<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tag $tag
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tag'), ['action' => 'edit', $tag->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tag'), ['action' => 'delete', $tag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tag->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Salas'), ['controller' => 'Salas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sala'), ['controller' => 'Salas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Perguntas'), ['controller' => 'Perguntas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pergunta'), ['controller' => 'Perguntas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tags view large-9 medium-8 columns content">
    <h3><?= h($tag->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($tag->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sala') ?></th>
            <td><?= $tag->has('sala') ? $this->Html->link($tag->sala->name, ['controller' => 'Salas', 'action' => 'view', $tag->sala->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tag->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Perguntas') ?></h4>
        <?php if (!empty($tag->perguntas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Sala Id') ?></th>
                <th scope="col"><?= __('Texto') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tag->perguntas as $perguntas): ?>
            <tr>
                <td><?= h($perguntas->id) ?></td>
                <td><?= h($perguntas->user_id) ?></td>
                <td><?= h($perguntas->sala_id) ?></td>
                <td><?= h($perguntas->texto) ?></td>
                <td><?= h($perguntas->created) ?></td>
                <td><?= h($perguntas->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Perguntas', 'action' => 'view', $perguntas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Perguntas', 'action' => 'edit', $perguntas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Perguntas', 'action' => 'delete', $perguntas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $perguntas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
