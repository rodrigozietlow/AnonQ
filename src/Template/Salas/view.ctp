<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sala $sala
 */
?>
<<<<<<< HEAD
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sala'), ['action' => 'edit', $sala->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sala'), ['action' => 'delete', $sala->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sala->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Salas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sala'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="salas view large-9 medium-8 columns content">
    <h3><?= h($sala->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($sala->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Link') ?></th>
            <td><?= h($sala->link) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sala->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nr Students') ?></th>
            <td><?= $this->Number->format($sala->nr_students) ?></td>
        </tr>
    </table>
=======
<div class="view large-9 medium-8 columns content">

    <li>Qual é a massa do sol?</li>
    <li>Qual é a massa do sol?</li>
    <li>Qual é a massa do sol?</li>
    <li>Qual é a massa do sol?</li>
    
</div>

<div class="view large-3 medium-2 columns content">
    <ul class="side-nav">
        <li class="heading"><?= h($sala->name) ?></li>
        <hr/>
        <li>Aluno 1</li>
        <li>Aluno 2</li>
        <li>Aluno 3 (anônimo)</li>
        <hr/>
        <input type="text" name="tags" placeholder="Tags">

    </ul>
>>>>>>> 34538f9b08b01c1aa5224773d04acb84cf9db3b2
</div>
