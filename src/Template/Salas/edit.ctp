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
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sala->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sala->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Salas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="salas form large-9 medium-8 columns content">
    <?= $this->Form->create($sala) ?>
    <fieldset>
        <legend><?= __('Edit Sala') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('link');
            echo $this->Form->control('nr_students');
=======
<div class="salas form large-9 medium-8 columns content">
    <?= $this->Form->create($sala) ?>
    <fieldset>
        <legend><?= __('Editar Sala') ?></legend>
        <?php
            echo $this->Form->control('name',["label" => 'Nome']);
            echo $this->Form->control('link',["label" => 'Link']);
            echo $this->Form->control('nr_students',["label" => 'N° alunos']);
>>>>>>> 34538f9b08b01c1aa5224773d04acb84cf9db3b2
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
