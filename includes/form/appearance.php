
<div id="admin" class="tab">
<h3><?php _e('Appearance', 'wpbiz'); ?></h3>

<div class="block">
    <h4><img alt="" src="<?php echo $this->get_plugin_url(); ?>/img/check.png" height="24" width="24" /><?php _e('Change admin header logo', 'wpbiz'); ?></h4>
    <div class="block_content">
        <p><?php _e('Upload 30 x 30 pixel image for admin header logo.', 'wpbiz'); ?></p>
        <p><img class="caption" alt="" src="<?php echo $this->get_plugin_url(); ?>/img/admin_header_logo.png"></p>
        <input type="text" id="wfb_custom_logo" name="wfb_custom_logo" class="media" value="<?php $this->op('wfb_custom_logo'); ?>" />
        <a class="media-upload" href="JavaScript:void(0);" rel="wfb_custom_logo"><?php _e('Select File', 'wpbiz'); ?></a>
    </div>
</div>

<div class="block">
    <h4><img src="<?php echo $this->get_plugin_url(); ?>/img/check.png" height="24" width="24" /><?php _e('Change admin footer text', 'wpbiz'); ?></h4>
    <div class="block_content">
        <p><?php _e('You can edit admin footer text. Line breaks will remove.', 'wpbiz'); ?></p>
        <p><img class="caption" alt="" src="<?php echo $this->get_plugin_url(); ?>/img/admin_footer_text.png"></p>
        <div class="poststuff">
        <div class="postdivrich" class="postarea">
        <?php wp_tiny_mce(false); ?>
        <?php the_editor(trim(stripslashes(get_option('wfb_admin_footer_text'))), "wfb_admin_footer_text"); ?>
        </div><!--end #postdivrich-->
        </div><!--end #poststuff-->
    </div>
</div>

<div class="block">
    <h4><img src="<?php echo $this->get_plugin_url(); ?>/img/check.png" height="24" width="24" /><?php _e('Change login logo', 'wpbiz'); ?></h4>
    <div class="block_content">
        <p><?php _e('You can customize logo, URL and Title. The logo image size is recommended 310 x 70 pixel.', 'wpbiz'); ?></p>
        <p><img class="caption" alt="" src="<?php echo $this->get_plugin_url(); ?>/img/login_logo.png"></p>
        <dl>
        <dt><?php _e('Logo:', 'wpbiz'); ?></dt>
        <dd><input type="text" id="wfb_login_logo" name="wfb_login_logo" class="media" value="<?php $this->op('wfb_login_logo'); ?>" />&nbsp;<a class="media-upload" href="JavaScript:void(0);" rel="wfb_login_logo"><?php _e('Select File', 'wpbiz'); ?></a></dd>
        <dt><?php _e('URL:', 'wpbiz'); ?></dt>
        <dd><input class="text" type="text" name="wfb_login_url" value="<?php $this->op('wfb_login_url'); ?>" /></dd>
        <dt><?php _e('Title:', 'wpbiz'); ?></dt>
        <dd><input class="text" type="text" name="wfb_login_title" value="<?php $this->op('wfb_login_title'); ?>" /></dd>
        </dl>
    </div>
</div>

</div><!--end .tab-->

