<!DOCTYPE html>
<html>
<head>
  <title>Create Project</title>
  <link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>/bootstrap/bootstraptag/bootstrap-tagsinput.css">
  <script src="<?php echo base_url();?>/bootstrap/bootstraptag/bootstrap-tagsinput.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
<script>
$('input').tagsinput({
  typeahead: {
    source: function(query) {
      return $.getJSON('citynames.json');
    }
  }
});
</script>
</head>
<body>
  <input type="text" value="Amsterdam,Washington,Sydney,Beijing,Cairo" data-role="tagsinput" >
<br>
  <select multiple data-role="tagsinput">
  <option value="Amsterdam">Amsterdam</option>
  <option value="Washington">Washington</option>
  <option value="Sydney">Sydney</option>
  <option value="Beijing">Beijing</option>
  <option value="Cairo">Cairo</option>
</select>

<br>


<input type="text" value="Amsterdam,Washington" data-role="tagsinput" />
<script>
var citynames = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  prefetch: {
    url: 'assets/citynames.json',
    filter: function(list) {
      return $.map(list, function(cityname) {
        return { name: cityname }; });
    }
  }
});
citynames.initialize();

$('input').tagsinput({
  typeaheadjs: {
    name: 'citynames',
    displayKey: 'name',
    valueKey: 'name',
    source: citynames.ttAdapter()
  }
});
</script>


</body>
</html>