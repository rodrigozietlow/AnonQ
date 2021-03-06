<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
	<!--
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-2 medium-3 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li><a target="_blank" href="https://book.cakephp.org/3.0/">Documentation</a></li>
                <li><a target="_blank" href="https://api.cakephp.org/3.0/">API</a></li>
            </ul>
        </div>
    </nav>
	-->
	<?php
	$session = $this->request->session();
	$user_data = $session->read('Auth.User');
	if($user_data){
		?>
			<nav class="large-2 medium-3 columns menu-fix" id="actions-sidebar">
				<ul class="side-nav">
					<?php echo $this->Html->image('chapeu.png', ['alt' => 'logo']); ?>
					<li class="heading"><?= $user_data['name'];?></li>
					<li><?= $this->Html->link(__('Minhas salas'), ['controller' => 'salas', 'action' => 'index']) ?></li>
					<li><?= $this->Html->link(__('Criar sala'), ['action' => 'add']) ?></li>
		            <li><?= $this->Html->link(__('Sair'), ['controller' => 'users', 'action' => 'logout']) ?></li>
				</ul>
				<div class='cr'>Criado por Rodrigo Zietlow, Bruno Griebler e Caio Kiefer.</div>
			</nav>
		<?php
	}
	?>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
		<div>
		</div>
    </footer>
</body>
</html>
