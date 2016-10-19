<h1>Add Register</h1>
<?php 
echo $this->Form->create('Register');
echo $this->Form->input('nombre');
echo $this->Form->input('telefono');
echo $this->Form->input('celular');
echo $this->Form->input('email',array('type'=>'email'));
echo $this->Form->end('Save Register');
?>