


<link rel="stylesheet" href="//code.jquery.com/ui/1.8.18/themes/base/jquery-ui.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.8.18/jquery-ui.min.js"></script>

<script>
    $(function() {
        $("#datepicker1, #datepicker2").datepicker({
            dateFormat: 'yy-mm-dd'
        });
    });

</script>

<p>조회기간:
    <input type="text" id="datepicker1"> ~
    <input type="text" id="datepicker2">
</p>


