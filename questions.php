<html>
<head>
    <title></title>
</head>
<body>
    <!-- background -->
    <img src="" > 

<script id="entry-template" type="text/x-handlebars-template">
  div.question
</script>
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/handlebars-v1.3.0.js"></script>
<script type="text/javascript">
console.log("welcome mozillians");
    var $data = {};
    var count = 0;
    $.getJSON( "data.json", function( data ) { 
        $data = data;
        showQuestion();
    });

    var showQuestion = function () {
        
    }


</script>
</body>
</html>