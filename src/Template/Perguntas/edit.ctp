<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pergunta $pergunta
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pergunta->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pergunta->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Perguntas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="perguntas form large-9 medium-8 columns content">
    <?= $this->Form->create($pergunta) ?>
    <fieldset>
        <legend><?= __('Edit Pergunta') ?></legend>
        <?php
            echo $this->Form->control('id_user');
            echo $this->Form->control('texto');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
