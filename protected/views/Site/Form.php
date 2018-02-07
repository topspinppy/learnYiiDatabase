<?php $form = $this->beginWidget('CActiveForm', array()); ?>

<div>
    <?php echo $form->labelEx($students, "name"); ?>
    <?php echo $form->textField($students, "name"); ?>
</div>
<div>
    <?php echo $form->labelEx($students, "age"); ?>
    <?php echo $form->textField($students, "age"); ?>
</div>
<div>
    <?php echo $form->labelEx($students, "sex"); ?>
    <br>
    <?php
        echo $form->radioButton($students, 'sex', array(
            'value'=>'ช',
            'uncheckValue'=>null));
        echo " ชาย";
        echo $form->radioButton($students, 'sex', array(
            'value'=>'ช',
            'uncheckValue'=>null));
        echo "หญิง";
    ?>
</div>
<?php echo $form->hiddenField($students,"student_id"); ?>

<input type="submit" value="บันทึก" />

<?php $this->endWidget(); ?>
