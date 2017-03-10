<div class="users form">
<?= $this->Flash->render() ?>
<?= $this->Form->create() ?>
    <div style="border :1px solid black;width: 421px;height: 413px;margin-left: 500px;
    margin-top: 73px;padding-top: 48px;">
        
        <div style="width: 226px;margin-left: 102px;">
        <?= $this->Form->input('username') ?>
        <?= $this->Form->input('password') ?>
        <?= $this->Form->button(__('Login'), ['style' => 'margin-right: 44px;
    	margin-top: 20px;background: cadetblue;']); ?><br><br><br>
    	</div>
    	 <legend style="width: 321px; margin-left: 64px;"><?= __('Please enter your username and password !') ?></legend>
    </div>
    
<?= $this->Form->end() ?>
</div>
