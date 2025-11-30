<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Task> $tasks
 */
?>
<div class="tasks filter">
    <p>
        Show:
        <?= $this->Html->link('All', ['action' => 'index', '?' => ['filter' => 'all']]) ?> |
        <?= $this->Html->link('Pending', ['action' => 'index', '?' => ['filter' => 'pending']]) ?> |
        <?= $this->Html->link('Completed', ['action' => 'index', '?' => ['filter' => 'completed']]) ?>
    </p>
</div>
<div class="tasks index content">
    <?= $this->Html->link(__('New Task'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tasks') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('due_date') ?></th>
                    <th><?= $this->Paginator->sort('priority') ?></th>
                    <th><?= $this->Paginator->sort('is_completed') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tasks as $task): ?>
    <?php
        $isOverdue = !$task->is_completed && $task->due_date && $task->due_date < $today;
    ?>
    <tr<?= $isOverdue ? ' style="background-color:#ffe6e6;"' : '' ?>>
        <td><?= h($task->id) ?></td>
        <td><?= h($task->title) ?></td>
        <td><?= h($task->priority) ?></td>
        <td><?= h($task->due_date) ?></td>
        <td><?= $task->is_completed ? 'Completed' : 'Pending' ?></td>
        <td class="actions">
            <?= $this->Html->link('View', ['action' => 'view', $task->id]) ?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $task->id]) ?>
            <?php if (!$task->is_completed): ?>
                <?= $this->Html->link(
                    'Mark done',
                    ['action' => 'complete', $task->id],
                    ['confirm' => 'Mark this task as completed?']
                ) ?>
            <?php endif; ?>
            <?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $task->id],
                ['confirm' => 'Are you sure?']
            ) ?>
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
