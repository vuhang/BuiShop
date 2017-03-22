<?php foreach($listdms as $value):?>
	 <div class="col1 me-one">
        <ul>
	        <li>
	           <?= $this->Html->link($value->name,['action' => '../products/getproduct',$value->id]);?>
	        </li>
   		</ul>                 
    </div>
  

<?php endforeach;?>