<?php
// PhpDoc Comments for code completion in views */
/* @var $this View */
/* @var $html HtmlHelper */
/* @var $javascript JavascriptHelper */
?>
<ul>
    <li><?php echo $html->link('Dashboard', '/admin/'); ?></li>
	<li><?php echo $html->link('Storingen', '/admin/'); ?></li>
    <li><?php echo $html->link('Licentie', '/admin/'); ?></li>
    <li><?php echo $html->link('Webmail', '/admin/'); ?></li>
    <li><?php echo $html->link('Helpdesk', '/admin/faq/'); ?></li>
	<li><?php echo $html->link('Contact', '/admin/contact/'); ?></li>
</ul>
<div class="clear"></div>