      </table>

      <h2><?php _e( 'Account Management' ); ?></h2>
      <table class="form-table">
      <tr id="password" class="user-pass1-wrap">
      	<th><label for="pass1"><?php _e( 'New Password' ); ?></label></th>
      	<td>
      		<input class="hidden" value=" " /><!-- #24364 workaround -->
      		<button type="button" class="button button-secondary wp-generate-pw hide-if-no-js"><?php _e( 'Generate Password' ); ?></button>
      		<div class="wp-pwd hide-if-js">
      			<span class="password-input-wrapper">
      				<input type="password" name="pass1" id="pass1" class="regular-text" value="" autocomplete="off" data-pw="<?php echo esc_attr( wp_generate_password( 24 ) ); ?>" aria-describedby="pass-strength-result" />
      			</span>
      			<button type="button" class="button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="<?php esc_attr_e( 'Hide password' ); ?>">
      				<span class="dashicons dashicons-hidden"></span>
      				<span class="text"><?php _e( 'Hide' ); ?></span>
      			</button>
      			<button type="button" class="button button-secondary wp-cancel-pw hide-if-no-js" data-toggle="0" aria-label="<?php esc_attr_e( 'Cancel password change' ); ?>">
      				<span class="text"><?php _e( 'Cancel' ); ?></span>
      			</button>
      			<div style="display:none" id="pass-strength-result" aria-live="polite"></div>
      		</div>
      	</td>
      </tr>
      <tr class="user-pass2-wrap hide-if-js">
      	<th scope="row"><label for="pass2"><?php _e( 'Repeat New Password' ); ?></label></th>
      	<td>
      	<input name="pass2" type="password" id="pass2" class="regular-text" value="" autocomplete="off" />
      	<p class="description"><?php _e( 'Type your new password again.' ); ?></p>
      	</td>
      </tr>