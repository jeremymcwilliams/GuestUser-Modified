<?php
$user = current_user();
$pageTitle =  get_option('guest_user_dashboard_label');
echo head(array('title' => $pageTitle));
?>
<h1><?php echo $pageTitle; ?></h1>
<?php #var_dump($_SESSION); ?>
<div id='primary'>
<?php echo flash(); ?>
<p><?php echo __("This may eventually be where sets are managed. - JM"); ?></p>

<?php foreach($widgets as $index=>$widget): ?>
<div class='guest-user-widget <?php if($index & 1): ?>guest-user-widget-odd <?php else:?>guest-user-widget-even<?php endif;?>'>
<?php echo guest_user_widget($widget); ?>
</div>
<?php endforeach; ?>

</div>
<?php echo foot(); ?>
