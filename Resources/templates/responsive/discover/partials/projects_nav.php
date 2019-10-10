<ul class="project-filters list-inline center-block text-center">
  <?php $this->section('project-filters-item-0') ?>
  <li class="<?= $this->filter === 'promoted' ? 'active' : ''?>" data-status="promoted">
        <a href="<?= $this->get_uri() ?>/promoted"><?= $this->text('home-projects-team-favourites') ?></a>
    </li>
  <?php $this->stop() ?>
  <?php $this->section('project-filters-item-1') ?>
    <li class="<?= $this->filter === 'outdated' ? 'active' : ''?>" data-status="outdated">
        <a href="<?= $this->get_uri() ?>/outdated"><?= $this->text('home-projects-outdate') ?></a>
    </li>
  <?php $this->stop() ?>
  <?php $this->section('project-filters-item-2') ?>
    <li class="<?= $this->filter === 'recent' ? 'active' : ''?>" data-status="recent">
        <a href="<?= $this->get_uri() ?>/recent"><?= $this->text('discover-group-recent-header') ?></a>
    </li>
  <?php $this->stop() ?>
  <?php $this->section('project-filters-item-3') ?>
    <li class="<?= $this->filter === 'popular' ? 'active' : ''?>" data-status="popular">
        <a href="<?= $this->get_uri() ?>/popular"><?= $this->text('discover-group-popular-header') ?></a>
    </li>
  <?php $this->stop() ?>
  <?php $this->section('project-filters-item-4') ?>
    <li class="<?= $this->filter === 'succeeded' ? 'active' : ''?>" data-status="succeeded">
        <a href="<?= $this->get_uri() ?>/succeeded"><?= $this->text('discover-group-success-header') ?></a>
    </li>
  <?php $this->stop() ?>
  <?php $this->section('project-filters-item-5') ?>
    <li class="<?= $this->filter === 'fulfilled' ? 'active' : ''?>" data-status="fulfilled">
        <a href="<?= $this->get_uri() ?>/fulfilled"><?= $this->text('regular-success_mark') ?></a>
    </li>
  <?php $this->stop() ?>
  <?php $this->section('project-filters-item-6') ?>
    <li class="<?= $this->filter === 'archived' ? 'active' : ''?>" data-status="archived">
        <a href="<?= $this->get_uri() ?>/archived"><?= $this->text('discover-group-archive-header') ?></a>
    </li>
  <?php $this->stop() ?>
</ul>
