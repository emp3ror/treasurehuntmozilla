<!DOCTYPE html>
<html>
<body>
    
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/handlebars-v1.3.0.js"></script>
<script type="text/javascript">
$.ajax({
    url      : "all.php",
    type     : 'json',
    success  : function(Result){
        // var myObj = $.parseJSON(Result);
            console.log(Result);
            console.log(Result[1]);
        }
    }
);
</script>
</body>
</html>