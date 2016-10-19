<h1>Registers List</h1>
<table>
    <tr>
        <td>Id</td>
        <td>Nombre</td>
        <td>Telefono</td>
        <td>Celular</td>
        <td>Mail</td>
        <td></td>
    </tr>
    <?php foreach($registers as $register): ?>
    <tr>
        <td><?php echo $this->Html->link($register['Register']['id'],array('controller'=>'register','action'=>'view',$register['Register']['id'])); ?></td>
        <td><?php echo $register['Register']['nombre']; ?></td>
        <td><?php echo $register['Register']['telefono']; ?></td>
        <td><?php echo $register['Register']['celular']; ?></td>
        <td><?php echo $register['Register']['email']; ?></td>
        <td>
            <?php echo $this->Html->link('Edit',array('action'=>'edit',$register['Register']['id'])); ?>
            <?php echo $this->Form->postLink('Delete',array('action'=>'delete',$register['Register']['id']),array('confirm'=>'Are u sure?')); ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<?php echo $this->Html->link('Add Register',array('action'=>'add')); ?>