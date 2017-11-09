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
    </ul>
</nav>
<div class="perguntas view large-9 medium-8 columns content">
    <h3><?= h($pergunta->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Texto') ?></th>
            <td><?= h($pergunta->texto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pergunta->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id User') ?></th>
            <td><?= $this->Number->format($pergunta->id_user) ?></td>
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
</div>
