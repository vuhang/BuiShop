<h1>Edit User</h1>
<?php
    echo $this->Form->create($users);
    echo $this->Form->input('name');
    echo $this->Form->input('gmail');
    echo $this->Form->input('address');
    echo $this->Form->input('phonenumber');
    echo '<div class="checkbox"><b>Sex</b>
       <label><input type="checkbox" name="sex" value="1"> Nam</label>
       <label><input type="checkbox" name="sex" value="0"> Nữ</label>';
    echo $this->Form->input('username'); 
    echo $this->Form->input('password');  
    echo '</div>';
    echo $this->Form->button(__('Save User'));
    echo $this->Form->end();
?>
<style>
    form {
        width: 180px;
        margin-top: 1px;
        margin-right: 1px;
        margin-left: 568px;
        }
</style>