<?php use_helper('I18N', 'Date') ?>
<?php include_partial('twSubscriptionList/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Your List: %%listname%%
', array('%%listname%%' => $tw_subscription_list->getListname()), 'messages') ?></h1>

  <?php include_partial('twSubscriptionList/flashes') ?>

  <div id="sf_admin_content">
    <?php include_partial('twSubscriptionList/code_form', array('tw_subscription_list' => $tw_subscription_list, 'form' => $form)) ?>
  </div>

</div>

<?php slot('contentViews') ?>
      <ul class="contentViews">
        <li id="contentview-info" class="plain"><?php echo link_to(__('Informations', null, 'subskrypcja'), 'twSubscriptionInfo/index', array('accesskey' => 'i')) ?></li>
        <li id="contentview-info" class="selected"><?php echo link_to(__('Your Lists', null, 'subskrypcja'), '@tw_subscription_list', array('accesskey' => 'l')) ?></li>
        <li id="contentview-info" class="plain"><?php echo link_to(__('Your Emails', null, 'subskrypcja'), 'twSubscriptionEmail/ListClean', array('accesskey' => 'l')) ?></li>
        <li id="contentview-info" class="plain"><?php echo link_to(__('Messages', null, 'subskrypcja'), '@tw_subscription_message', array('accesskey' => 'l')) ?></li>
        <li id="contentview-info" class="plain"><?php echo link_to(__('Your Mailer', null, 'subskrypcja'), '@tw_subscription_mailing', array('accesskey' => 'l')) ?></li>
        <li id="contentview-info" class="plain"><?php echo link_to(__('Emails Queue', null, 'subskrypcja'), '@tw_subscription_mail_queue', array('accesskey' => 'l')) ?></li>
        <li id="contentview-info" class="plain"><?php echo link_to(__('Sent Emails', null, 'subskrypcja'), '@tw_subscription_mail_sent', array('accesskey' => 'l')) ?></li>
        <li id="contentview-info" class="plain"><?php echo link_to(__('Questions', null, 'subskrypcja'), 'twSubscriptionInfo/pytania', array('accesskey' => 'h')) ?></li>
        <li id="contentview-info" class="plain"><?php echo link_to(__('Import', null, 'subskrypcja'), 'twSubscriptionInfo/import') ?></li>
        <li id="contentview-info" class="plain"><?php echo link_to(__('Templates', null, 'subskrypcja'), '@tw_subscription_template', array('accesskey' => 't')) ?></li>
        <li id="contentview-info" class="plain"><?php echo link_to(__('Setup', null, 'subskrypcja'), '@tw_subscription_setup', array('accesskey' => 's')) ?></li>
      </ul>
<?php end_slot() ?>