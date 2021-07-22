

    <tr id="<?php echo 'row-'.$row; ?>" class="<?php echo 'rows-'.$maintaskid; ?>">
        <td style="width:7%;">
            <center>
                <div class="input-group">
                    <span class="input-group-addon" style="height:53px; width:53px; border:2px solid #e2e2e2; border-radius:3px; box-shadow:2px 2px 2px silver;"><b><?php echo $row.'.'; ?></b></span>
                </div>
            </center>
        </td>
        <td>
            <div class="input-group">
                <span class="input-group-addon" style="background-color:#ECF0F5; box-shadow:2px 2px 2px silver;"><i>Abc</i></span>
                <textarea name="subtaskdesc[]" id="<?php echo 'subtaskdesc-'.$row; ?>" class="form-control" placeholder="Describe Subtask" style="box-shadow:2px 2px 2px silver;"></textarea>
            </div>
        </td>
        <td style="width:20%;">
            <input type="number" min="1" name="subtaskhours[]" id="<?php echo 'subtaskhours-'.$row; ?>" class="<?php echo 'form-control subtaskhours subtaskhour_'.$maintaskid; ?>" data-maintaskid="<?php echo $maintaskid; ?>" placeholder="Enter Hours" style="height:53px; box-shadow:2px 2px 2px silver;">
        </td>
    </tr>
    
    