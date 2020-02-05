<!DOCTYPE html>
<html lang="en"><head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="<?=base_url('resources/style404.css');?>">
<title>404 page not found</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arvo">

<script>
  window.console = window.console || function(t) {};
</script>
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
</head>
<body translate="no">
<section class="page_404">
<div class="container">
<div class="row">
<div class="col-sm-12 ">
<div class="col-sm-10 col-sm-offset-1  text-center">
<div class="four_zero_four_bg">
<h1 class="text-center ">404</h1>
</div>
<div class="contant_box_404">
<h3 class="h2">
Look like you're lost
</h3>
<p>the page you are looking for not avaible!</p>
<a href="<?=base_url('index.php/Home');?>" class="link_404">Go to Home</a>
</div>
</div>
</div>
</div>
</div>
</section>


</body></html>