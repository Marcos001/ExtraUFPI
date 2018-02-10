<h3 class="m-b"><span>Colors</span></h3>
<p class="no-m-t text-sm">
	<label>
		<input name="<?php echo $this->setting->setting_name; ?>[use-default-color]" type="checkbox" <?php if ($this->setting->get_setting('use-default-color') == true) echo 'checked="checked" '; ?>> 
		Use default color
	</label>
</p>
<div class="box">
	<h4 class="active"><span>Default colors</span></h4>
	<div class="box-body b-t hide show">
		<div class="color-selector">
			<label class="ui-check ui-check-color ui-check-lg">
				<input name="<?php echo $this->setting->setting_name; ?>[default-color]" type="radio" value="default" <?php if ($this->setting->get_setting('default-color') == 'default') echo 'checked="checked" '; ?>>
				<i style="background-color: #2c3942"></i>
			</label>
			<label class="ui-check ui-check-color ui-check-lg">
				<input name="<?php echo $this->setting->setting_name; ?>[default-color]" type="radio" value="primary" <?php if ($this->setting->get_setting('default-color') == 'primary') echo 'checked="checked" '; ?>>
				<i style="background-color: #40d050"></i>
			</label>
			<label class="ui-check ui-check-color ui-check-lg">
				<input name="<?php echo $this->setting->setting_name; ?>[default-color]" type="radio" value="purple" <?php if ($this->setting->get_setting('default-color') == 'purple') echo 'checked="checked" '; ?>>
				<i style="background-color: #673ab7"></i>
			</label>
			<label class="ui-check ui-check-color ui-check-lg">
				<input name="<?php echo $this->setting->setting_name; ?>[default-color]" type="radio" value="pink" <?php if ($this->setting->get_setting('default-color') == 'pink') echo 'checked="checked" '; ?>>
				<i style="background-color: #e91e63"></i>
			</label>
			<label class="ui-check ui-check-color ui-check-lg">
				<input name="<?php echo $this->setting->setting_name; ?>[default-color]" type="radio" value="orange" <?php if ($this->setting->get_setting('default-color') == 'orange') echo 'checked="checked" '; ?>>
				<i style="background-color: #ff5722"></i>
			</label>
			<label class="ui-check ui-check-color ui-check-lg">
				<input name="<?php echo $this->setting->setting_name; ?>[default-color]" type="radio" value="green" <?php if ($this->setting->get_setting('default-color') == 'green') echo 'checked="checked" '; ?>>
				<i style="background-color: #54b358"></i>
			</label>
			<label class="ui-check ui-check-color ui-check-lg">
				<input name="<?php echo $this->setting->setting_name; ?>[default-color]" type="radio" value="teal" <?php if ($this->setting->get_setting('default-color') == 'teal') echo 'checked="checked" '; ?>>
				<i style="background-color: #009688"></i>
			</label>
		</div>
	</div>
</div>
<div class="box">
	<h4 class="b-b"><span>Global</span></h4>
	<div class="box-body b-b hide">
		<div class="color-picker">
			<p>
				<label>Base color
					<input name="<?php echo $this->setting->setting_name; ?>[color][base-color]" value="<?php esc_html_e( $this->setting->get_setting('color', 'base-color')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>
			<p>
				<label>Text color
					<input name="<?php echo $this->setting->setting_name; ?>[color][text-color]" value="<?php esc_html_e( $this->setting->get_setting('color', 'text-color')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>
			<p>
				<label>Icon color
					<input name="<?php echo $this->setting->setting_name; ?>[color][icon-color]" value="<?php esc_html_e( $this->setting->get_setting('color', 'icon-color')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>

			<p>
				<label>Highlight color
					<input name="<?php echo $this->setting->setting_name; ?>[color][highlight-color]" value="<?php esc_html_e( $this->setting->get_setting('color', 'highlight-color')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>

			<p>
				<label>Notification color
					<input name="<?php echo $this->setting->setting_name; ?>[color][notification-color]" value="<?php esc_html_e( $this->setting->get_setting('color','notification-color')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>


			<p>
				<label>Body background
					<input name="<?php echo $this->setting->setting_name; ?>[color][body-background]" value="<?php esc_html_e( $this->setting->get_setting('color','body-background')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>

			<p>
				<label>Link color
					<input name="<?php echo $this->setting->setting_name; ?>[color][link]" value="<?php esc_html_e( $this->setting->get_setting('color','link')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>

			<p>
				<label>Form checked
					<input name="<?php echo $this->setting->setting_name; ?>[color][form-checked]" value="<?php esc_html_e( $this->setting->get_setting('color','form-checked')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>

			<p>
				<label>Button color
					<input name="<?php echo $this->setting->setting_name; ?>[color][button-color]" value="<?php esc_html_e( $this->setting->get_setting('color','button-color')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>

			<p>
				<label>Secondary button color
					<input name="<?php echo $this->setting->setting_name; ?>[color][button-secondary]" value="<?php esc_html_e( $this->setting->get_setting('color','button-secondary')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>

			<p>
				<label>Secondary button text
					<input name="<?php echo $this->setting->setting_name; ?>[color][button-secondary-text]" value="<?php esc_html_e( $this->setting->get_setting('color','button-secondary-text')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>
		</div>
	</div>
	<h4 class="b-b active"><span>Menu</span></h4>
	<div class="box-body b-b hide">
		<div class="color-picker">
			<p>
				<label>Menu text color
					<input name="<?php echo $this->setting->setting_name; ?>[color][menu-text]" value="<?php esc_html_e( $this->setting->get_setting('color','menu-text')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>
			<p>
				<label>Menu icon color
					<input name="<?php echo $this->setting->setting_name; ?>[color][menu-icon]" value="<?php esc_html_e( $this->setting->get_setting('color','menu-icon')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>
			<p>
				<label>Menu background
					<input name="<?php echo $this->setting->setting_name; ?>[color][menu-background]" value="<?php esc_html_e( $this->setting->get_setting('color','menu-background')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>

			<p>
				<label>Menu highlight text color
					<input name="<?php echo $this->setting->setting_name; ?>[color][menu-highlight-text]" value="<?php esc_html_e( $this->setting->get_setting('color','menu-highlight-text')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>
			<p>
				<label>Menu highlight icon color
					<input name="<?php echo $this->setting->setting_name; ?>[color][menu-highlight-icon]" value="<?php esc_html_e( $this->setting->get_setting('color','menu-highlight-icon')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>
			<p>
				<label>Menu highlight background
					<input name="<?php echo $this->setting->setting_name; ?>[color][menu-highlight-background]" value="<?php esc_html_e( $this->setting->get_setting('color','menu-highlight-background')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>

			<p>
				<label>Menu current text color
					<input name="<?php echo $this->setting->setting_name; ?>[color][menu-current-text]" value="<?php esc_html_e( $this->setting->get_setting('color','menu-current-text')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>
			<p>
				<label>Menu current icon color
					<input name="<?php echo $this->setting->setting_name; ?>[color][menu-current-icon]" value="<?php esc_html_e( $this->setting->get_setting('color','menu-current-icon')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>
			<p>
				<label>Menu current background
					<input name="<?php echo $this->setting->setting_name; ?>[color][menu-current-background]" value="<?php esc_html_e( $this->setting->get_setting('color','menu-current-background')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>

			<p>
				<label>Submenu text color
					<input name="<?php echo $this->setting->setting_name; ?>[color][menu-submenu-text]" value="<?php esc_html_e( $this->setting->get_setting('color','menu-submenu-text')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>
			<p>
				<label>Submenu focus text color
					<input name="<?php echo $this->setting->setting_name; ?>[color][menu-submenu-focus-text]" value="<?php esc_html_e( $this->setting->get_setting('color','menu-submenu-focus-text')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>
			<p>
				<label>Submenu current text color
					<input name="<?php echo $this->setting->setting_name; ?>[color][menu-submenu-current-text]" value="<?php esc_html_e( $this->setting->get_setting('color','menu-submenu-current-text')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>
			<p>
				<label>Submenu background
					<input name="<?php echo $this->setting->setting_name; ?>[color][menu-submenu-background]" value="<?php esc_html_e( $this->setting->get_setting('color','menu-submenu-background')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>

			<p>
				<label>Bubble text color
					<input name="<?php echo $this->setting->setting_name; ?>[color][menu-bubble-text]" value="<?php esc_html_e( $this->setting->get_setting('color','menu-bubble-text')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>
			<p>
				<label>Bubble background
					<input name="<?php echo $this->setting->setting_name; ?>[color][menu-bubble-background]" value="<?php esc_html_e( $this->setting->get_setting('color','menu-bubble-background')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>
			<p>
				<label>Bubble current text color
					<input name="<?php echo $this->setting->setting_name; ?>[color][menu-bubble-current-text]" value="<?php esc_html_e( $this->setting->get_setting('color','menu-bubble-current-text')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>
			<p>
				<label>Bubble current background
					<input name="<?php echo $this->setting->setting_name; ?>[color][menu-bubble-current-background]" value="<?php esc_html_e( $this->setting->get_setting('color','menu-bubble-current-background')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>

			<p>
				<label>Collapse text color
					<input name="<?php echo $this->setting->setting_name; ?>[color][menu-collapse-text]" value="<?php esc_html_e( $this->setting->get_setting('color','menu-collapse-text')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>
			<p>
				<label>Collapse icon color
					<input name="<?php echo $this->setting->setting_name; ?>[color][menu-collapse-icon]" value="<?php esc_html_e( $this->setting->get_setting('color','menu-collapse-icon')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>
			<p>
				<label>Collapse focus text color
					<input name="<?php echo $this->setting->setting_name; ?>[color][menu-collapse-focus-text]" value="<?php esc_html_e( $this->setting->get_setting('color','menu-collapse-focus-text')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>
			<p>
				<label>Collapse focus icon color
					<input name="<?php echo $this->setting->setting_name; ?>[color][menu-collapse-focus-icon]" value="<?php esc_html_e( $this->setting->get_setting('color','menu-collapse-focus-icon')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>
		</div>
	</div>
	<h4><span>Bar</span></h4>
	<div class="box-body b-t hide">
		<div class="color-picker">
			<p>
				<label>Bar text color
					<input name="<?php echo $this->setting->setting_name; ?>[bar][menu-text]" value="<?php esc_html_e( $this->setting->get_setting('bar','menu-text')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>
			<p>
				<label>Bar icon color
					<input name="<?php echo $this->setting->setting_name; ?>[bar][menu-icon]" value="<?php esc_html_e( $this->setting->get_setting('bar','menu-icon')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>
			<p>
				<label>Bar highlight icon color
					<input name="<?php echo $this->setting->setting_name; ?>[bar][menu-highlight-icon]" value="<?php esc_html_e( $this->setting->get_setting('bar','menu-highlight-icon')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>
			<p>
				<label>Bar background
					<input name="<?php echo $this->setting->setting_name; ?>[bar][menu-background]" value="<?php esc_html_e( $this->setting->get_setting('bar','menu-background')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>
			<p>
				<label>Bar submemu text
					<input name="<?php echo $this->setting->setting_name; ?>[bar][menu-submenu-text]" value="<?php esc_html_e( $this->setting->get_setting('bar','menu-submenu-text')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>
			<p>
				<label>Bar submemu focus text
					<input name="<?php echo $this->setting->setting_name; ?>[bar][menu-submenu-focus-text]" value="<?php esc_html_e( $this->setting->get_setting('bar','menu-submenu-focus-text')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>
			<p>
				<label>Bar submenu background
					<input name="<?php echo $this->setting->setting_name; ?>[bar][menu-submenu-background]" value="<?php esc_html_e( $this->setting->get_setting('bar','menu-submenu-background')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>
			<p>
				<label>Avatar frame
					<input name="<?php echo $this->setting->setting_name; ?>[bar][adminbar-avatar-frame]" value="<?php esc_html_e( $this->setting->get_setting('bar','adminbar-avatar-frame')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>
			<p>
				<label>Input background
					<input name="<?php echo $this->setting->setting_name; ?>[bar][adminbar-input-background]" value="<?php esc_html_e( $this->setting->get_setting('bar','adminbar-input-background')); ?>" type="text" class="widefat color-field" placeholder="#f1f1f1">
				</label>
			</p>
		</div>
	</div>
</div>
