<!-- File: src/Template/Users/view.ctp -->

<h1><?= h($user->name) ?></h1>
<p><?= h($user->email) ?></p>
<p><small>Created: <?= $user->created->format(DATE_RFC850) ?></small></p>
<p><?= $this->Html->link('Edit', ['action' => 'edit', $user->id]) ?></p>
