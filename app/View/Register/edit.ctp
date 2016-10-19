<h1>Add Register</h1>
<?php 
echo $this->Form->create('Register');
echo $this->Form->input('nombre');
echo $this->Form->input('telefono',array('type'=>'tel'));
echo $this->Form->input('celular',array('type'=>'tel'));
echo $this->Form->input('email',array('type'=>'email'));
echo $this->Form->input('id',array('type'=>'hidden'));
echo $this->Form->end('Save Register');
?>