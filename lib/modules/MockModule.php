<?php

/**
 * A Mock Module for testing the visual stuff without a remote setup
 *
 * @author Jake Worrell (jakeworrell.co.uk)
 * @author D. Rimron (xalior.com)
 */
class Mock {
	public function getAllJobs() {
		$return = array(
			array(
				'name'=>'Fake Job 1',
				'status'=>array('failed'),
				'blame'=>'Robin Banks'
			),
			array(
				'name'=>'Fake Job 2',
				'status'=>array('failed','building'),
				'blame'=>'A N Other'
			),
			array(
				'name'=>'Fake Job 3',
				'status'=>array('successful')
			),
			array(
				'name'=>'Fake Job 4',
				'status'=>array('successful','building')
			),
			array(
				'name'=>'Fake Job 5',
				'status'=>array('cancelled')
			),
			array(
				'name'=>'Fake Job 5',
				'status'=>array('cancelled','building')
			),
			array(
				'name'=>'Fake Job 1',
				'status'=>array('failed'),
				'blame'=>'Mr Smith'
			),
			array(
				'name'=>'Fake Job 2',
				'status'=>array('failed','building'),
				'blame'=>'Seymour Clearly'
			),
			array(
				'name'=>'Fake Job 1',
				'status'=>array('failed'),
				'blame'=>'Mr F Ailure'
			),
			array(
				'name'=>'Fake Job 2',
				'status'=>array('failed','building'),
				'blame'=>'Ada Lovelace'
			),
			array(
				'name'=>'Fake Job 5',
				'status'=>array('cancelled')
			),
			array(
				'name'=>'Fake Job 5',
				'status'=>array('cancelled','building')
			),
			array(
				'name'=>'Fake Job 3',
				'status'=>array('successful')
			),
			array(
				'name'=>'Fake Job 4',
				'status'=>array('successful','building')
			),
			array(
				'name'=>'Fake Job 5',
				'status'=>array('cancelled')
			),
				array(
				'name'=>'Fake Job 3',
				'status'=>array('successful')
			),
			array(
				'name'=>'Fake Job 4',
				'status'=>array('successful','building')
			),
			array(
				'name'=>'Fake Job 5',
				'status'=>array('cancelled','building')
			),
		);
		return ($return);
	}
}

?>
