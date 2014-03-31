<?php
session_start(); 
?>

<html>
<head>
    <title>treasure hunt</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
  <div class="wrapper">
      <div class="content">
      MOZILLA group wants to achieve their dream.They have worked hard to reach to their dream but still something is missing-Something important to make Mozilla a whole .But it is not easy to gain that something.They will have to face a lot of problems to find that something and make Mozilla complete.
      <h3>LET THE HUNT BEGIN!!!</h3>

      </div>
  </div>
    <!-- background -->
    <img src="images/treasure-map.jpg" width="100%" class="map"> 
    

<script id="entry-template" type="text/x-handlebars-template">
  <div class="question" data-imp="{{ans}}">{{question}}</div>
  {{#if ans}}
    <input type="text">
  {{/if}}
    
  {{#if hint}}
    <div class="hint">{{hint}}</div>
  {{/if}}
  
  
  <button>done</button>
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
    $content = $(".content");
    var showQuestion = function () {
      console.log(count);
      // console.log(Object.keys($data).length);
        if (count < Object.keys($data).length) {


            var datas = {
                question : $data[count][0],
                ans : $data[count][1],
                hint : ""
            }
            var source   = $("#entry-template").html();
            var template = Handlebars.compile(source);
            var html = template(datas);
            $content.html(html);
        }
        else {
          alert("u finished this");
        }
        
    }

    $content.on('click','button',function  () {
      if (count === 0) {
        count++;
        showQuestion();
      }
      else {
       correct = $content.find('.question').data('imp');
       answer = $content.find('input').val();
       if (answer===correct) {
            // var name = <?php $_SESSION['name']; ?>
            console.log("bingo");
            $.ajax({
              type: "POST",
              url: "insert.php",
              data: { level : count
              }
            })
            .done(function( msg ) {
              //alert( "Data Saved: " + msg );
            });

            count++;
            showQuestion();
            
          }
          else {
            console.log("sad");
          } 
      }
       
    });

</script>
</body>
</html>