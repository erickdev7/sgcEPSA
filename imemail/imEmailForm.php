<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include "../res/x5engine.php";
	$form = new ImForm();
	$form->setField('Fecha', $_POST['imObjectForm_4_1'], '', false);
	$form->setField('Proceso', $_POST['imObjectForm_4_2'], '', false);
	$form->setField('¿Quien genero?', $_POST['imObjectForm_4_3'], '', false);
	$form->setField('Generada por', $_POST['imObjectForm_4_4'], '', false);
	$form->setField('Descripción', $_POST['imObjectForm_4_5'], '', false);

	if(@$_POST['action'] != "check_answer") {
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != "jsactive" || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$form->mailToOwner('eperez@epsa.com.gt', 'eperez@epsa.com.gt', '', '', false);
		@header('Location: ../index.html');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file