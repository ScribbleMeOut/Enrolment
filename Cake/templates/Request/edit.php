<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Request $request
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $request->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $request->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Request'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="request form content">
            <?= $this->Form->create($request) ?>
            <fieldset>
                <legend><?= __('Edit Request') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('lName');
                    echo $this->Form->control('email');
                    echo $this->Form->control('DOB');
                    echo $this->Form->control('gender');
                    echo $this->Form->control('nationality');
                    echo $this->Form->control('telephoneNumber');
                    echo $this->Form->control('extraSupport');
                    echo $this->Form->control('GCSEs');
                    echo $this->Form->control('ALevels');
                    echo $this->Form->control('prevEducation');
                    echo $this->Form->control('CGrade');
                    echo $this->Form->control('courseLevel');
                    echo $this->Form->control('courseApplication');
                    echo $this->Form->control('Accepted');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
