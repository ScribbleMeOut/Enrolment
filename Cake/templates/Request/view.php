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
            <?= $this->Html->link(__('Edit Request'), ['action' => 'edit', $request->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Request'), ['action' => 'delete', $request->id], ['confirm' => __('Are you sure you want to delete # {0}?', $request->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Request'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Request'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="request view content">
            <h3><?= h($request->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($request->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('LName') ?></th>
                    <td><?= h($request->lName) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($request->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('DOB') ?></th>
                    <td><?= h($request->DOB) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gender') ?></th>
                    <td><?= h($request->gender) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nationality') ?></th>
                    <td><?= h($request->nationality) ?></td>
                </tr>
                <tr>
                    <th><?= __('ExtraSupport') ?></th>
                    <td><?= h($request->extraSupport) ?></td>
                </tr>
                <tr>
                    <th><?= __('PrevEducation') ?></th>
                    <td><?= h($request->prevEducation) ?></td>
                </tr>
                <tr>
                    <th><?= __('CGrade') ?></th>
                    <td><?= h($request->CGrade) ?></td>
                </tr>
                <tr>
                    <th><?= __('CourseLevel') ?></th>
                    <td><?= h($request->courseLevel) ?></td>
                </tr>
                <tr>
                    <th><?= __('CourseApplication') ?></th>
                    <td><?= h($request->courseApplication) ?></td>
                </tr>
                <tr>
                    <th><?= __('Accepted') ?></th>
                    <td><?= h($request->Accepted) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($request->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('TelephoneNumber') ?></th>
                    <td><?= $this->Number->format($request->telephoneNumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('GCSEs') ?></th>
                    <td><?= $this->Number->format($request->GCSEs) ?></td>
                </tr>
                <tr>
                    <th><?= __('ALevels') ?></th>
                    <td><?= $this->Number->format($request->ALevels) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
