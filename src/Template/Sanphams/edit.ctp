<h1>Edit SanPham</h1>
<?php
    echo $this->Form->create($article);
    echo $this->Form->input('name');
    
    echo $this->Form->button(__('Save Article'));
    echo $this->Form->end();
?>