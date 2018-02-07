<?php
	$this->widget('booster.widgets.TbGridView', array(
		'dataProvider' => $students,
		'columns' => array(
			'student_id',
			'name',
			'age',
			array(
				'type'=>'html',
				'value'=>'CHtml::link("Edit",array("Site/Form","id"=> $data->student_id))'
			),
			array(
				'type'=>'html',
				'value'=>'CHtml::link("Delete",array("Site/Delete","id"=> $data->student_id))',
				'htmlOptions'=> array(
					'onclick' => 'return confirm("ยืนยันการลบ")'
				)
			)
		)
	));
?>