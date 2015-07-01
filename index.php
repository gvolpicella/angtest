<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<h1>Hello World</h1>'; ?> 


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.0-rc.2/angular.min.js"></script>
 <script>


	
var root = 'http://jsonplaceholder.typicode.com';

$.ajax({
  url: root + '/posts/',
  method: 'GET'
}).then(function(data) {
  console.log(data);
});


</script>

 </body>
</html>