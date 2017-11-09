<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sala $sala
 */
?>
<div class="salas form large-9 medium-8 columns content">
    <?= $this->Form->create($sala) ?>
    <fieldset>
        <legend><?= __('Editar Sala') ?></legend>
        <?php
            echo $this->Form->control('name',["label" => 'Nome']);
            echo $this->Form->control('link',["label" => 'Link']);
            echo $this->Form->control('nr_students',["label" => 'N° alunos']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
