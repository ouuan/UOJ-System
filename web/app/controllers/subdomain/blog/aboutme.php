<?php requirePHPLib('form') ?>
<?php echoUOJPageHeader('关于我') ?>

<?php if (UOJContext::user()['username'] != 'ouuan') : ?>
	<h3>博主是个超级大神犇！</h3>
<?php else : ?>
	<h3>博主太弱了！</h3>
<?php endif ?>

（好吧目前暂时不支持定制此页 T_T……）

<?php echoUOJPageFooter() ?>
