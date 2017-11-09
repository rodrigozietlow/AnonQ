<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sala $sala
 */
?>
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
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
