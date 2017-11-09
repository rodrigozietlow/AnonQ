<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sala $sala
 */
?>
<div class="salas form large-8 medium-7 columns content">
    <?= $this->Form->create($sala) ?>
    <fieldset>
        <legend><?= __('Criar sala') ?></legend>
        <?php
            echo $this->Form->control('name',["label" => 'Nome']);
            echo $this->Form->control('link',["label" => 'Link']);
            echo $this->Form->control('nr_students',["label" => 'N° alunos']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Criar')) ?>
    <?= $this->Form->end() ?>
</div>
