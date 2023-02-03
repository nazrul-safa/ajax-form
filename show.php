<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
.content {
  width: 50%;
  margin: 0 auto;
  margin-top: 5%;
  background-color: #e9e9e9;
  border-left: 8px solid black;
  padding: 20px;
}
.content h3 {
  font-weight:bold;
  margin-bottom: 24px;
}
.content p {
  margin-bottom: 12px;
}
#show-more, #show-less { 
  color: grey;
}
#show-more a, #show-less a{
  cursor: pointer;
  text-decoration:underline;
  color: auto;
}
</style>


<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12">
            <div class="content">
  <h3>Some items need your attention</h3>
  
  <p><a href="#">Error incorrect date format</a></p>
  <p><a href="#">Error incorrect date format</a></p>
  <p><a href="#">Error incorrect date format</a></p>
  <p><a href="#">Error incorrect date format</a></p>
  <p><a href="#">Error incorrect date format</a></p>
  
  <div id="show-more" >Showing 5 of 15 items <a href="javascript:void(0)">View all</a></div>
  
  <div id="show-more-content">
  <p><a href="#">Error incorrect date format</a></p>
  <p><a href="#">Error incorrect date format</a></p>
  <p><a href="#">Error incorrect date format</a></p>
  <p><a href="#">Error incorrect date format</a></p>
  <p><a href="#">Error incorrect date format</a></p>
  <p><a href="#">Error incorrect date format</a></p>
  <p><a href="#">Error incorrect date format</a></p>
  <p><a href="#">Error incorrect date format</a></p>
  <p><a href="#">Error incorrect date format</a></p>
  <p><a href="#">Error incorrect date format</a></p>
  <div id="show-less">Showing 15 of 15 items <a href="javascript:void(0)">View less</a></div>
    </div>
</div>
            </div>
        </div>
    </div>

<script>
$('#show-more-content').hide();

$('#show-more').click(function(){
	$('#show-more-content').show(300);
	$('#show-less').show();
	$('#show-more').hide();
});

$('#show-less').click(function(){
	$('#show-more-content').hide(150);
	$('#show-more').show();
	$(this).hide();
});

</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script>
    </script>
</body>

</html>