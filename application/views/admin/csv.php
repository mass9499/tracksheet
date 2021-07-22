<cener>
    <br><br>
    <form method="POST" action="<?php echo base_url(); ?>csv/importcsv" enctype="multipart/form-data">
        <input type="text" name="csv" value="csv">
        <input type="file" name="csvfile">
        <input type="submit" name="submit" value="Import">
    </form>
</cener>