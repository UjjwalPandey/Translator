<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RechnrUrlInsert extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '1',
			"url"			=>	'/bmi/',
			"memo"			=>	'BMI Page in English',
			"as"			=>	'bmi',
			"domain_id"		=>  '1',
			"page_id"		=>  '1',
			));

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '2',
			"url"			=>	'/bmi-calculation/',
			"memo"			=>	'BMI Result in English',
			'as'			=>	'bmi-calculation',
			"domain_id"		=>  '1',
			"page_id"		=>  '2',
			));

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '3',
			"url"			=>	'/petrol/',
			"memo"			=>	'Petrol Result in English',
			'as'			=>	'petrol',
			"domain_id"		=>  '1',
			"page_id"		=>  '3',
			));

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '4',
			"url"			=>	'/petrol/consumption/',
			"memo"			=>	'Petrol Result in English',
			'as'			=>	'petrol-calculation',
			"domain_id"		=>  '1',
			"page_id"		=>  '4',
			));

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '5',
			"url"			=>	'/currency/',
			"memo"			=>	'Currency in English',
			'as'			=>	'currency',
			"domain_id"		=>  '1',
			"page_id"		=>  '5',
			));

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '6',
			"url"			=>	'/carbon_footprint/',
			"memo"			=>	'Carbon in English',
			'as'			=>	'carbon_footprint',
			"domain_id"		=>  '1',
			"page_id"		=>  '6',
			));

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '7',
			"url"			=>	'/carbon/footprint/calculate/',
			"memo"			=>	'Carbon Result in English',
			'as'			=>	'carbon_footprint_calculate',
			"domain_id"		=>  '1',
			"page_id"		=>  '7',
			));

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '8',
			"url"			=>	'/interest/',
			"memo"			=>	'Interest in English',
			'as'			=>	'interest',
			"domain_id"		=>  '1',
			"page_id"		=>  '8',
			));

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '9',
			"url"			=>	'/interest/calculate/',
			"memo"			=>	'BMI Result in English',
			'as'			=>	'interest_calculate',
			"domain_id"		=>  '1',
			"page_id"		=>  '9',
			));

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '10',
			"url"			=>	'/week/',
			"memo"			=>	'Week Result in English',
			'as'			=>	'week',
			"domain_id"		=>  '1',
			"page_id"		=>  '10',
			));

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '11',
			"url"			=>	'/week/calculate/',
			"memo"			=>	'Week Result in English',
			'as'			=>	'week_calculate',
			"domain_id"		=>  '1',
			"page_id"		=>  '11',
			));

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '12',
			"url"			=>	'/perpetuity/',
			"memo"			=>	'Perpetuity in English',
			'as'			=>	'perpetuity',
			"domain_id"		=>  '1',
			"page_id"		=>  '12',
			));

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '13',
			"url"			=>	'/perpetuity/calculation/',
			"memo"			=>	'Perpetuity Result in English',
			'as'			=>	'perpetuity-calculation',
			"domain_id"		=>  '1',
			"page_id"		=>  '13',
			));

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '14',
			"url"			=>	'/repayment/',
			"memo"			=>	'Repayment in English',
			'as'			=>	'repayment',
			"domain_id"		=>  '1',
			"page_id"		=>  '14',
			));

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '15',
			"url"			=>	'/repayment/calculation/',
			"memo"			=>	'Repayment Result in English',
			'as'			=>	'repayment-calculation',
			"domain_id"		=>  '1',
			"page_id"		=>  '15',
			));

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '16',
			"url"			=>	'/calculator/',
			"memo"			=>	'Calculator Result in English',
			'as'			=>	'calculator',
			"domain_id"		=>  '1',
			"page_id"		=>  '16',
			));

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '17',
			"url"			=>	'/time/',
			"memo"			=>	'Time in English',
			'as'			=>	'time',
			"domain_id"		=>  '1',
			"page_id"		=>  '17',
			));

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '18',
			"url"			=>	'/',
			"memo"			=>	'',
			"as"			=>	'home',
			"domain_id"		=>  '1',
			"page_id"		=>  '18',
			));	

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '19',
			"url"			=>	'/admin/petrol/',
			"memo"			=>	'For changing values in Petrol Calculator',
			"as"			=>	'admin_petrol',
			"domain_id"		=>  '1',
			"page_id"		=>  '19',
			));	

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '20',
			"url"			=>	'/admin/petrol/update/',
			"memo"			=>	'Update values of Petrol from Admin end',
			"as"			=>	'admin_petrol_update',
			"domain_id"		=>  '1',
			"page_id"		=>  '20',
			));	

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '21',
			"url"			=>	'/admin/bmi/',
			"memo"			=>	'For changing values in BMI Calculator',
			"as"			=>	'admin_bmi',
			"domain_id"		=>  '1',
			"page_id"		=>  '21',
			));	

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '22',
			"url"			=>	'/admin/bmi/update/',
			"memo"			=>	'',
			"as"			=>	'admin_bmi_update',
			"domain_id"		=>  '1',
			"page_id"		=>  '22',
			));	

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '23',
			"url"			=>	'/admin/currency/',
			"memo"			=>	'',
			"as"			=>	'admin_currency',
			"domain_id"		=>  '1',
			"page_id"		=>  '23',
			));	

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '24',
			"url"			=>	'/admin/currency/update/',
			"memo"			=>	'',
			"as"			=>	'admin_currency_update',
			"domain_id"		=>  '1',
			"page_id"		=>  '24',
			));	

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '25',
			"url"			=>	'/admin/carbon/',
			"memo"			=>	'',
			"as"			=>	'admin_carbon',
			"domain_id"		=>  '1',
			"page_id"		=>  '25',
			));	

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '26',
			"url"			=>	'/admin/carbon/update/',
			"memo"			=>	'',
			"as"			=>	'admin_carbon_update',
			"domain_id"		=>  '1',
			"page_id"		=>  '26',
			));	

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '27',
			"url"			=>	'/admin/interest/',
			"memo"			=>	'',
			"as"			=>	'admin_interest',
			"domain_id"		=>  '1',
			"page_id"		=>  '27',
			));	

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '28',
			"url"			=>	'/admin/interest/update/',
			"memo"			=>	'',
			"as"			=>	'admin_interset_update',
			"domain_id"		=>  '1',
			"page_id"		=>  '28',
			));	

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '29',
			"url"			=>	'/admin/week/',
			"memo"			=>	'',
			"as"			=>	'admin_week',
			"domain_id"		=>  '1',
			"page_id"		=>  '29',
			));	

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '30',
			"url"			=>	'/admin/week/update/',
			"memo"			=>	'',
			"as"			=>	'admin_week_update',
			"domain_id"		=>  '1',
			"page_id"		=>  '30',
			));	

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '31',
			"url"			=>	'/admin/perpetuity/',
			"memo"			=>	'',
			"as"			=>	'admin_perpetuity',
			"domain_id"		=>  '1',
			"page_id"		=>  '31',
			));	

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '32',
			"url"			=>	'/admin/perpetuity/update/',
			"memo"			=>	'',
			"as"			=>	'admin_perpetuity_update',
			"domain_id"		=>  '1',
			"page_id"		=>  '32',
			));	

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '33',
			"url"			=>	'/admin/repayment/',
			"memo"			=>	'',
			"as"			=>	'admin_repayment',
			"domain_id"		=>  '1',
			"page_id"		=>  '33',
			));	

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '34',
			"url"			=>	'/admin/repayment/update/',
			"memo"			=>	'',
			"as"			=>	'admin_repayment_update',
			"domain_id"		=>  '1',
			"page_id"		=>  '34',
			));	

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '35',
			"url"			=>	'/admin/calculator/',
			"memo"			=>	'',
			"as"			=>	'admin_calculator',
			"domain_id"		=>  '1',
			"page_id"		=>  '35',
			));	

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '36',
			"url"			=>	'/admin/calculator/update/',
			"memo"			=>	'',
			"as"			=>	'admin_calculator_update',
			"domain_id"		=>  '1',
			"page_id"		=>  '36',
			));	

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '37',
			"url"			=>	'/admin/time/',
			"memo"			=>	'',
			"as"			=>	'admin_time',
			"domain_id"		=>  '1',
			"page_id"		=>  '37',
			));	

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '38',
			"url"			=>	'/admin/time/update/',
			"memo"			=>	'',
			"as"			=>	'admin_time_update',
			"domain_id"		=>  '1',
			"page_id"		=>  '38',
			));	

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '39',
			"url"			=>	'/admin/language/add/',
			"memo"			=>	'',
			"as"			=>	'admin_language_add',
			"domain_id"		=>  '1',
			"page_id"		=>  '39',
			));	

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '40',
			"url"			=>	'/admin/language/add/update/',
			"memo"			=>	'',
			"as"			=>	'admin_language_add_update',
			"domain_id"		=>  '1',
			"page_id"		=>  '40',
			));	

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '41',
			"url"			=>	'/admin/language/delete/',
			"memo"			=>	'',
			"as"			=>	'admin_language_delete',
			"domain_id"		=>  '1',
			"page_id"		=>  '41',
			));	

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '42',
			"url"			=>	'/admin/language/delete/update/',
			"memo"			=>	'',
			"as"			=>	'admin_language_delete_update',
			"domain_id"		=>  '1',
			"page_id"		=>  '42',
			));	

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '43',
			"url"			=>	'/admin/authorize/login/',
			"memo"			=>	'',
			"as"			=>	'admin_login',
			"domain_id"		=>  '1',
			"page_id"		=>  '43',
			));	

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '44',
			"url"			=>	'/admin/authorize/login/check/',
			"memo"			=>	'',
			"as"			=>	'admin_login_post',
			"domain_id"		=>  '1',
			"page_id"		=>  '44',
			));	

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '45',
			"url"			=>	'/admin/signout/',
			"memo"			=>	'',
			"as"			=>	'admin_signout',
			"domain_id"		=>  '1',
			"page_id"		=>  '45',
			));	
		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '46',
			"url"			=>	'/admin/change/password/',
			"memo"			=>	'',
			"as"			=>	'admin_change_password',
			"domain_id"		=>  '1',
			"page_id"		=>  '46',
			));	
		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '47',
			"url"			=>	'/admin/change/password/update',
			"memo"			=>	'',
			"as"			=>	'admin_change_password_update',
			"domain_id"		=>  '1',
			"page_id"		=>  '47',
			));	

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '48',
			"url"			=>	'/admin/edit/url/',
			"memo"			=>	'',
			"as"			=>	'admin_edit_url',
			"domain_id"		=>  '1',
			"page_id"		=>  '48',
			));	
		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '49',
			"url"			=>	'/admin/edit/url/update/',
			"memo"			=>	'',
			"as"			=>	'admin_edit_url_update',
			"domain_id"		=>  '1',
			"page_id"		=>  '49',
			));

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '50',
			"url"			=>	'/admin/edit/select/langugae/',
			"memo"			=>	'',
			"as"			=>	'admin_select_language_url',
			"domain_id"		=>  '1',
			"page_id"		=>  '50',
			));	

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '51',
			"url"			=>	'/measurement-converter/',
			"memo"			=>	'',
			"as"			=>	'measurement-converter',
			"domain_id"		=>  '1',
			"page_id"		=>  '51',
			));	

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '52',
			"url"			=>	'/admin/measurement-converter/',
			"memo"			=>	'Measurement Page in English',
			"as"			=>	'admin_measurement',
			"domain_id"		=>  '1',
			"page_id"		=>  '52',
			));

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '53',
			"url"			=>	'/admin/measurement-converter/calculate/',
			"memo"			=>	'Measurement Result Page in English',
			"as"			=>	'admin_measurement_update',
			"domain_id"		=>  '1',
			"page_id"		=>  '53',
			));
		
		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '54',
			"url"			=>	'/color-converter/',
			"memo"			=>	'Color Page in English',
			"as"			=>	'color_converter',
			"domain_id"		=>  '1',
			"page_id"		=>  '54',
			));

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '55',
			"url"			=>	'/admin/color-converter/',
			"memo"			=>	'Admin Color Page in English',
			"as"			=>	'admin_color',
			"domain_id"		=>  '1',
			"page_id"		=>  '55',
			));

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '56',
			"url"			=>	'/admin/color-converter/update/',
			"memo"			=>	'Admin Color Page in English',
			"as"			=>	'admin_color_update',
			"domain_id"		=>  '1',
			"page_id"		=>  '56',
			));

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '57',
			"url"			=>	'/food-indicator/',
			"memo"			=>	'Food Indicator Page in English',
			"as"			=>	'food_indicator',
			"domain_id"		=>  '1',
			"page_id"		=>  '57',
			));

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '58',
			"url"			=>	'/food-indicator/calculate/',
			"memo"			=>	'Food Indicator Result Page in English',
			"as"			=>	'food_indicator_result',
			"domain_id"		=>  '1',
			"page_id"		=>  '58',
			));

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '59',
			"url"			=>	'/admin/food-indicator/',
			"memo"			=>	'Admin Food Indicator Page in English',
			"as"			=>	'admin_food',
			"domain_id"		=>  '1',
			"page_id"		=>  '59',
			));

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '60',
			"url"			=>	'/admin/food-indicator/update/',
			"memo"			=>	'Admin Food Indicator Update Page in English',
			"as"			=>	'admin_food_update',
			"domain_id"		=>  '1',
			"page_id"		=>  '60',
			));

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '61',
			"url"			=>	'/child-benefit/',
			"memo"			=>	'Child Benefit Page in English',
			"as"			=>	'child_benefit',
			"domain_id"		=>  '1',
			"page_id"		=>  '61',
			));

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '62',
			"url"			=>	'/child-benefit/calculate/',
			"memo"			=>	'Child Benefit Result Page in English',
			"as"			=>	'child-benefit_result',
			"domain_id"		=>  '1',
			"page_id"		=>  '62',
			));

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '63',
			"url"			=>	'/admin/child-benefit/',
			"memo"			=>	'Admin Child Benefit Page in English',
			"as"			=>	'admin_child',
			"domain_id"		=>  '1',
			"page_id"		=>  '63',
			));

		DB::table('rechnr_url')->insert(array(
			"id" 			=>  '64',
			"url"			=>	'/admin/child-benefit/update/',
			"memo"			=>	'Admin Child Benefit Update Page in English',
			"as"			=>	'admin_child_update',
			"domain_id"		=>  '1',
			"page_id"		=>  '64',
			));
		

	}

	/**
	 * Reverse the migrations.
	 * 
	 * @return void
	 */
	public function down()
	{
		DB::table('rechnr_url')
			->delete();
	}

}
