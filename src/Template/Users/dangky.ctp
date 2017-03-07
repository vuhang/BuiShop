<html>
<head>
</head>
<body>
<h1>LOGIN</h1>
<?php
    echo $this->Form->create();
    echo '<br><br>';
    echo $this->Form->input('name');
        echo '<br><br>';
    echo $this->Form->input('gmail');
        echo '<br><br>';
    echo $this->Form->input('username');
        echo '<br><br>';
    echo $this->Form->input('password');
      echo '<br><br>';
    echo '<div class="checkbox"><b>Sex</b>
       <label><input type="checkbox" name="sex" value="1"> Nam</label>
       <label><input type="checkbox" name="sex" value="0"> Nữ</label>';
    echo '</div>';
    echo $this->Form->input('sex');
  
    echo $this->Form->button(__('Save User'));
    echo $this->Form->end();
?>
</body>
</html>
<style type="text/css">
     box-shadow{
          width: 40%;
     }
</style>>