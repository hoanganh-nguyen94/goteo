<?php

if ($this->channel->getResources()):
?>

<div class="section resources">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img class="img-responsive" src="/assets/img/channel/call/resources.png" >
      </div>
      <div class="col-md-6">
        <div class="info">
          <div class="title">
            <?= $this->t('channel-call-resources-title') ?>
          </div>
          <div class="description">
            <?= $this->t('channel-call-resources-description') ?>
          </div>
          <div class="col-button">
            <a href="<?= '/channel/'.$this->channel->id.'/resources' ?>" class="btn btn-transparent"><i class="icon icon-plus icon-2x"></i><?= $this->text('channel-call-resources-button') ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php endif; ?>