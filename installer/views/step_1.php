<!-- Intro page -->
<section class="title">
	<h3>{header}</h3>
</section>

<section class="item">
	<p>{intro_text}</p>
</section>

<?php echo form_open(uri_string(), 'id="install_frm"'); ?>

	<section class="title">
		<h3>{db_settings}</h3>
	</section>
	
	<section class="item">
		<p>{db_text}</p>

		<hr>
		
		<span class="help">
			Here we can add some explantions for the section. Etiam scelerisque, nunc ac egestas consequat, odio nibh euismod nulla, eget auctor orci nibh vel nisi. Aliquam erat volutpat. Mauris vel neque sit amet.</p>
		</span>
		
		<div class="input">
			<label for="hostname">{server}</label><br>
			
			<?php
			echo form_input(array(
				'id' => 'hostname',
				'name' => 'hostname',
				'value' => set_value('hostname', 'localhost'),
			));
		?>
		
		</div>
		
		
		<div class="input">
			<?php echo lang('username','username'); ?><br>
			<?php
				echo form_input(array(
					'id' => 'username',
					'name' => 'username',
					'value' => set_value('username')
				));
			?>
		</div>
		
		<div class="input">
			<?php echo lang('password','password'); ?><br>
			<?php
				echo form_password(array(
					'id' => 'password',
					'name' => 'password',
					'value' => set_value('password')
				));
			?>
			
		</div>
		
		<div class="input">
			<?php echo lang('portnr','port'); ?><br>
			<?php
				echo form_input(array(
					'id' => 'port',
					'name' => 'port',
					'value' => set_value('port', $port)
				));
			?>
			
		</div>

		<div id="notification">
	   		<p class="text" id="confirm_db"></p>
		</div>
	</section>
	
	<section class="title">
		<h3>{server_settings}</h3>
	</section>
	
	<section class="item">
		<p>{httpserver_text}</p>
		
		<div class="input">
			<?php echo lang('httpserver','http_server'); ?>
			<?php
				echo form_dropdown('http_server', $server_options, set_value('http_server'), 'id="http_server"');
			?>
		</div>
		
		<hr>
	
		<input type="hidden" name="installation_step" value="step_1" />
		<input id="next_step" type="submit" id="submit" value="{step2}" />
	</section>
	
<?php echo form_close(); ?>