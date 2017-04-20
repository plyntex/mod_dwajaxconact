<?php
defined('_JEXEC') or die;
?>

<form class="form dw-form" method="post" action="#">

  <div class="form-group">
    <input type="text" class="form-control" name="Name" id="name" required="true" placeholder="<?php echo JText::_('MOD_DW_AJAX_CONTACT_NAME_PLACEHOLDER'); ?>">
  </div>

  <div class="form-group">
    <input type="email" class="form-control" name="Email" id="Email" required="true" placeholder="<?php echo JText::_('MOD_DW_AJAX_CONTACT_EMAIL_PLACEHOLDER'); ?>">
  </div>

  <div class="form-group">
    <textarea class="form-control" name="message" id="message" rows="4" placeholder=""></textarea>
  </div>

  <?php echo JHtml::_( 'form.token' ); ?>

  <div class="form-group text-center">
			<button type="submit" name="Submit" class="btn btn-primary border" value="default">
				<?php echo JText::_('MOD_DW_AJAX_CONTACT_BUTTON_TEXT'); ?>
			</button>
	</div>
</form>
