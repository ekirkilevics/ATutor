<form method="POST" action="<?php echo url_rewrite('mods/social/edit_profile.php'); ?>">
<div>
	<div>
		<label for="url"><?php echo _AT('url'); ?></label>
		<input type="text" id="url" name="url" value="<?php echo $url; ?>" />
	</div>

	<div>
		<label for="site_name"><?php echo _AT('site_name'); ?></label>
		<input type="text" name="site_name" value="<?php echo $site_name; ?>" />
	</div>

	<input type="hidden" name="add" value="websites" />
	<input type="submit" name="submit" value="<?php echo _AT('save'); ?>" />
	<input type="submit" name="cancel" value="<?php echo _AT('cancel'); ?>" />
</div>
</form>