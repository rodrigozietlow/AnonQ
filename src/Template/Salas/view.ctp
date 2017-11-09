<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sala $sala
 */
?>
<div class="view large-9 medium-8 columns content">
	<?php
	//debug($sala);
	foreach($sala['perguntas'] as $pergunta){
		echo "<div class='pergunta'>";
		echo "<div class='pergunta-titulo'>".$pergunta['texto']."</div> <div>Feita por: ";
		if($pergunta['user']['anonymous'] == 0 && $this->request->session()->read('Auth.User.id') == $sala->user_id){ // é anônimo mas é o professor que tá vendo
			echo $pergunta['user']['name']." (anônimo)";
		}
		else if ($pergunta['user']['anonymous'] == 0 && $pergunta['user']['id'] == $this->request->session()->read('Auth.User.id')){ // é anonimo e é ele mesmo que tá vendo
			echo "<strong>Você (anônimo)</strong>";
		}
		else if($pergunta['user']['anonymous'] == 0) { // é anônimo e é outro aluno que tá vendo
			echo "Anônimo";
		}
		else if($pergunta['user']['anonymous'] == 1){
			echo $pergunta['user']['name'];
		}
		if(!empty($pergunta['tags'])){
			echo "<div class='pergunta-tags'>";
			foreach($pergunta['tags'] as $tag){
				echo "<span class='pergunta-tags-tag'>".$tag['nome']."</span>";
			}
			echo "</div>";
		}
		echo "</div></div>";
		//debug($tags);
	}
	?>

</div>

<div class="view large-3 medium-2 columns content">
    <ul class="side-nav">
        <li class="heading"><?= h($sala->name) ?></li>
        <hr/>
		<?php
		foreach($sala['users'] as $aluno){
			echo "<li>";
			if($aluno['anonymous'] == 0 && $this->request->session()->read('Auth.User.id') == $sala->user_id){ // é anônimo mas é o professor que tá vendo
				echo $aluno['name']." (anônimo)";
			}
			else if ($aluno['anonymous'] == 0 && $aluno['id'] == $this->request->session()->read('Auth.User.id')){ // é anonimo e é ele mesmo que tá vendo
				echo "<strong>Você (anônimo)</strong>";
			}
			else if($aluno['anonymous'] == 0) { // é anônimo e é outro aluno que tá vendo
				echo "Anônimo";
			}
			else if($aluno['anonymous'] == 1){
				echo $aluno['name'];
			}
			echo "</li>";
		}
		?>
        <hr/>

		<?php
		if($this->request->session()->read('Auth.User.id') == $sala->user_id){ // se é o professor, exibe o menu de tags
			?>
			<?= $this->Form->create(\Cake\ORM\TableRegistry::get('Tags')->newEntity(), ["url" => "/tags/add"]) ?>
			<?php
			   echo $this->Form->control('nome', ["placeholder" => "Digite uma tag para adicionar", "label" => false]);
			   echo $this->Form->control('sala_id', ['type' => 'hidden', "value" => $sala->id]);
			?>
			<?= $this->Form->button(__('Salvar')) ?>
			<?= $this->Form->end() ?>
			<?php
			foreach($sala->tags as $tag){
				echo "<span class='pergunta-tags-tag'>".$tag['nome']."</span>";
			}
		}
		else { // aluno exibe o menu de enviar pergunta
			?>
			<?= $this->Form->create(\Cake\ORM\TableRegistry::get('Perguntas')->newEntity(), ["url" => "/perguntas/add"]) ?>
	        <?php
            echo $this->Form->hidden('sala_id', ["value" => $sala->id]);
            echo $this->Form->control('texto', ["placeholder" => "Digite a pergunta", "rows" => 3, 'label' => false]);

            //echo $this->Form->control('tags._ids', ['options' => $tags]);
			/*
			foreach($sala->tags as $tag){
				//echo 1;
				echo $this->Form->checkbox('tags[]', ['hiddenField' => false, 'value' => $tag->id]);
			}

			echo $this->Form->input('tags._ids', [
			    'label' => false,
			    'type' => 'select',
			    'multiple' => 'checkbox',
			    'options' => $tags
			]);
			//echo $this->Form->input('tags', ['multiple' => 'checkbox', 'options' => $tags]);
			*/
	        ?>
		    <?= $this->Form->button(__('Enviar')) ?>
		    <?= $this->Form->end() ?>
			<?php
			foreach($sala->tags as $tag){
				echo "<span class='pergunta-tags-tag'>".$tag['nome']."</span>";
			}
		}
		?>

    </ul>
</div>
