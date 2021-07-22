

    <tr id="<?php echo 'row-'.$row; ?>">
        <td style="width:7%;">
            <center>
                <div class="input-group">
                    <span class="input-group-addon" style="height:53px; width:53px;"><b><?php echo $row.'.'; ?></b></span>
                </div>
            </center>
        </td>
        <td>
            <div class="input-group">
                <span class="input-group-addon"><i>Abc</i></span>
                <textarea name="taskdesc[]" id="<?php echo 'taskdesc-'.$row; ?>" class="form-control" placeholder="Describe Task" style="box-shadow:2px 2px 2px silver;"></textarea>
            </div>
        </td>
        <td style="width:20%;">
            <input type="number" name="taskhours[]" id="<?php echo 'taskhours-'.$row; ?>" class="form-control" placeholder="Enter Hours" style="height:53px; box-shadow:2px 2px 2px silver;">
        </td>
    </tr>


<script>
    $(".select2").select2();
</script>