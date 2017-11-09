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
		echo "</div></div>";
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
	        <input type="text" name="tags" placeholder="Tags">
			<?php
		}
		else { // aluno exibe o menu de enviar pergunta
			?>
			 <input type="text" name="pergunta" placeholder="Envie sua pergunta">
			<?php
		}
		?>

    </ul>
</div>
