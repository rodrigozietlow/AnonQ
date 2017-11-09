<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sala[]|\Cake\Collection\CollectionInterface $salas
 */
?>
<div class="salas index large-9 medium-8 columns content">
    <h3><?= __('Salas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('name','Nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('link','Link') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nr_students','N° alunos') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($salas as $sala): ?>
            <tr>
                <td><?= h($sala->name) ?></td>
                <td><?= h($sala->link) ?></td>
                <td><?= $this->Number->format($sala->nr_students) ?></td>
                <td class="actions">
					<?= $this->Html->link(__('View'), ['action' => 'view', $sala->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $sala->id]) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $sala->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sala->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próximo') . ' >') ?>
            <?= $this->Paginator->last(__('Último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}}')]) ?></p>
    </div>
</div>
