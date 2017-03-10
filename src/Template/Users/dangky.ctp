<div class="users form">
<?= $this->Flash->render() ?>
<?= $this->Form->create() ?>
    <div style="border :1px solid black;width: 421px;height: 448px;margin-left: 500px;
    margin-top: 73px;padding-top: 48px;">
        
        <div style="width: 226px;margin-left: 102px;">
         <?= $this->Form->input('name') ?>
          <?= $this->Form->input('gmail') ?>
        <?= $this->Form->input('username') ?>
        <?= $this->Form->input('password') ?>
        <?= $this->Form->button(__('Save user'), ['style' => 'margin-right: 44px;
      margin-top: 20px;background: cadetblue;']); ?>
    
<?= $this->Form->end() ?>
</div>
