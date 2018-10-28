<?php

class BP_Admin_Integration_Learndash extends BP_Admin_Integration_tab {

	public function initialize() {
		$this->tab_label       = __( 'LearnDash', 'buddyboss' );
		$this->tab_name        = 'bp-learndash';
		$this->required_plugin = 'sfwd-lms/sfwd_lms.php';
		$this->intro_template  = buddypress()->plugin_dir . '/bp-integrations/learndash/admin/templates/tab-intro.php';

		$this->add_section('bp_ld_section_1', 'Integration Setting', [$this, 'integration_description']);
		$this->add_input_field('bp_ld_boo', __('Dummy Text'), [
			'input_description' => 'Dummy Text',
		]);
		$this->add_checkbox_field('bp_ld_yeah', __('Dummy Text'), [
			'input_text' => 'Dummy Text',
		]);


		$this->add_section('bp_ld_section_2', 'Sync Setting');
		$this->add_field('bp_id_asdf', 'Dummy Text', [$this, 'fake_dropdown']);
	}

	public function integration_description() {
		echo wpautop(__('Dummy Text'));
	}

	public function fake_dropdown() {
		echo '<select name="bp_id_asdf">';

		$value = bp_get_option('bp_id_asdf');

		foreach (['Dummy Text', 'Dummy Text', 'Dummy Text'] as $option):
			printf(
				'<option value="%s" %s>%s</option>',
				$option,
				$option == $value? 'selected' : '',
				strtoupper($option)
			);
		endforeach;

		echo '</select>';
	}
}

return new BP_Admin_Integration_Learndash;
