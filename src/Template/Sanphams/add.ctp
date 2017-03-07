<h1>Add Tag</h1>

<?php
    echo $this->Form->create();
    echo $this->Form->input('name');
    echo $this->Form->input('soluong');
    echo $this->Form->input('nguongoc');
    echo $this->Form->button(__('Save Tag'));
    echo $this->Form->end();
?>
