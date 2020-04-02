<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Request[]|\Cake\Collection\CollectionInterface $request
 */
?>
<div class="request index content">
    <?= $this->Html->link(__('New Request'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Request') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('lName') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('DOB') ?></th>
                    <th><?= $this->Paginator->sort('gender') ?></th>
                    <th><?= $this->Paginator->sort('nationality') ?></th>
                    <th><?= $this->Paginator->sort('telephoneNumber') ?></th>
                    <th><?= $this->Paginator->sort('extraSupport') ?></th>
                    <th><?= $this->Paginator->sort('GCSEs') ?></th>
                    <th><?= $this->Paginator->sort('ALevels') ?></th>
                    <th><?= $this->Paginator->sort('prevEducation') ?></th>
                    <th><?= $this->Paginator->sort('CGrade') ?></th>
                    <th><?= $this->Paginator->sort('courseLevel') ?></th>
                    <th><?= $this->Paginator->sort('courseApplication') ?></th>
                    <th><?= $this->Paginator->sort('Accepted') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($request as $request): ?>
                <tr>
                    <td><?= $this->Number->format($request->id) ?></td>
                    <td><?= h($request->name) ?></td>
                    <td><?= h($request->lName) ?></td>
                    <td><?= h($request->email) ?></td>
                    <td><?= h($request->DOB) ?></td>
                    <td><?= h($request->gender) ?></td>
                    <td><?= h($request->nationality) ?></td>
                    <td><?= $this->Number->format($request->telephoneNumber) ?></td>
                    <td><?= h($request->extraSupport) ?></td>
                    <td><?= $this->Number->format($request->GCSEs) ?></td>
                    <td><?= $this->Number->format($request->ALevels) ?></td>
                    <td><?= h($request->prevEducation) ?></td>
                    <td><?= h($request->CGrade) ?></td>
                    <td><?= h($request->courseLevel) ?></td>
                    <td><?= h($request->courseApplication) ?></td>
                    <td><?= h($request->Accepted) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $request->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $request->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $request->id], ['confirm' => __('Are you sure you want to delete # {0}?', $request->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
