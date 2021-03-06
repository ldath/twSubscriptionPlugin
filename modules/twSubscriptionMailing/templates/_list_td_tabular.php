<?php $queue = $tw_subscription_mailing->getInQueue(); ?>
<td class="sf_admin_text sf_admin_list_td_id">
    <?php echo link_to($tw_subscription_mailing->getId(), 'tw_subscription_mailing_edit', $tw_subscription_mailing) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_list">
    <?php echo $tw_subscription_mailing->getList() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_message">
    <?php echo $tw_subscription_mailing->getMessage() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_time_to_send">
    <?php echo false !== strtotime($tw_subscription_mailing->getTimeToSend()) ? format_date($tw_subscription_mailing->getTimeToSend(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_text sf_admin_list_td_in_queue">
    <?php if ($queue > 0): ?>
        <?php echo $queue ?><?php echo link_to('<i class="icon-remove-sign"></i>', 'twSubscriptionMailing/stop?id=' . $tw_subscription_mailing->getId(), array()) ?>
    <?php else: ?>
        <?php echo $queue ?>
    <?php endif; ?>
</td>
<td class="sf_admin_text sf_admin_list_td_in_sent">
    <?php echo $tw_subscription_mailing->getInSent() ?>
</td>