<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sala $sala
 */
?>
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
</div>
