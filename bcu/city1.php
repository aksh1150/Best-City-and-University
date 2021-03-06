<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>Information of Canada</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Static navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="city.html" style="color:black">CITY</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a style="color:black" href="index.html">Home</a></li>
            <li><a style="color:black" href="aboutus.html">About US</a></li>
            <li><a style="color:black" href="contactus.html">Contact US</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>


	<div id="citywrap">
	    <div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
				</div>
			</div><! --/row -->
	    </div> <!-- /container -->
	</div><! --/aboutwrap -->

	
<!-- Search form and table of city data -->			
			
	
	
<form style="box-sizing: border-box; padding: 1em; background: #eee;">
    <label class="searchlabel" for="search">Search city here..</label>
    <input id="search" type="text" />
</form>
<script>
$("#search").keyup(function () {
    var value = this.value.toLowerCase().trim();

    $("table tr").each(function (index) {
        if (!index) return;
        $(this).find("td").each(function () {
            var id = $(this).text().toLowerCase().trim();
            var not_found = (id.indexOf(value) == -1);
            $(this).closest('tr').toggle(!not_found);
            return not_found;
        });
    });
});
</script>
<table class="table table-hover" data-filter="search">
    <thead>
         <tr>
            <th class="OverallRank" data-type="numeric">Rank</th>
            
            <th class="name" data-type="alpha" data-hide="all"> Name </th>
           
           
            
            
            <th class="city" data-type="alpha" data-hide="all"> City</th>
           
            <th class="student" data-type="alpha" data-hide="all"> % of International Students(Fall 2015) </th>
           
           
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="OverallRank"> 1 </td>          
            <td class="name"> University of Toronto </td>                                     
            <td class="city"> Toronto </td>          
            <td class="student">22.8 </td>
        </tr>
		<tr>
            <td class="OverallRank"> 2 </td>          
            <td class="name"> Waterloo </td>                                     
            <td class="city"> Toronto </td>          
            <td class="student">16.0 </td>
        </tr>
		<tr>
            <td class="OverallRank"> 3 </td>          
            <td class="name"> UBC </td>                                     
            <td class="city"> Toronto </td>          
            <td class="student">31.0 </td>
        </tr>
		<tr>
            <td class="OverallRank"> 4 </td>          
            <td class="name"> McGill </td>                                     
            <td class="city"> Toronto </td>          
            <td class="student">28.1 </td>
        </tr>
		<tr>
            <td class="OverallRank"> 5 </td>          
            <td class="name"> Alberta </td>                                     
            <td class="city"> Toronto </td>          
            <td class="student">15.2 </td>
        </tr>
		<tr>
            <td class="OverallRank"> 6 </td>          
            <td class="name"> Queen's </td>                                     
            <td class="city"> Toronto </td>          
            <td class="student">6.2 </td>
        </tr>
		<tr>
            <td class="OverallRank"> 7 </td>          
            <td class="name"> McMaster </td>                                     
            <td class="city"> Toronto </td>          
            <td class="student">6.7 </td>
        </tr>
		<tr>
            <td class="OverallRank"> 8 </td>          
            <td class="name"> Western Ontario </td>                                     
            <td class="city"> Toronto </td>          
            <td class="student">9.9 </td>
        </tr>
		<tr>
            <td class="OverallRank"> 9 </td>          
            <td class="name"> Montreal </td>                                     
            <td class="city"> Toronto </td>          
            <td class="student">10.5 </td>
        </tr>
		<tr>
            <td class="OverallRank"> 10 </td>          
            <td class="name"> Simon Fraser </td>                                     
            <td class="city"> Toronto </td>          
            <td class="student">15.0 </td>
        </tr>
		<tr>
            <td class="OverallRank"> 11 </td>          
            <td class="name"> Ryerson University </td>                                     
            <td class="city"> Toronto </td>          
            <td class="student">3.5 </td>
        </tr>
		<tr>
            <td class="OverallRank"> 12 </td>          
            <td class="name"> University of Calgary </td>                                     
            <td class="city"> Toronto </td>          
            <td class="student">6.4</td>
        </tr>
		<tr>
            <td class="OverallRank"> 13 </td>          
            <td class="name"> Guelph </td>                                     
            <td class="city"> Toronto </td>          
            <td class="student">3.7 </td>
        </tr>
		<tr>
            <td class="OverallRank"> 14 </td>          
            <td class="name"> Dalhousie University </td>                                     
            <td class="city"> Toronto </td>          
            <td class="student">16.0 </td>
        </tr>
		<tr>
            <td class="OverallRank"> 15 </td>          
            <td class="name"> University of Ottawa </td>                                     
            <td class="city"> Toronto </td>          
            <td class="student">7.6 </td>
        </tr>
		<tr>
            <td class="OverallRank">16 </td>          
            <td class="name"> Victoria University </td>                                     
            <td class="city"> Toronto </td>          
            <td class="student">7.5 </td>
        </tr>
		<tr>
            <td class="OverallRank"> 17 </td>          
            <td class="name"> Laval University </td>                                     
            <td class="city"> Toronto </td>          
            <td class="student">14.4 </td>
        </tr>
		<tr>
            <td class="OverallRank"> 18 </td>          
            <td class="name"> Concordia University </td>                                     
            <td class="city"> Toronto </td>          
            <td class="student">11.6 </td>
        </tr>
		<tr>
            <td class="OverallRank"> 19 </td>          
            <td class="name"> Sherbrooke </td>                                     
            <td class="city"> Toronto </td>          
            <td class="student">8.9 </td>
        </tr>
		<tr>
            <td class="OverallRank"> 20 </td>          
            <td class="name"> Memorial </td>                                     
            <td class="city"> Toronto </td>          
            <td class="student">8.0 </td>
        </tr>
		<tr>
            <td class="OverallRank"> 21 </td>          
            <td class="name"> York University </td>                                     
            <td class="city"> </td>          
            <td class="student">9.0 </td>
        </tr>
		<tr>
            <td class="OverallRank"> 22 </td>          
            <td class="name">University of Saskatchewan </td>                                     
            <td class="city"> </td>          
            <td class="student">5.2 </td>
        </tr>
		<tr>
            <td class="OverallRank"> 23 </td>          
            <td class="name"> Carleton University </td>                                     
            <td class="city"> </td>          
            <td class="student">12.5 </td>
        </tr>
       <tr>
            <td class="OverallRank"> 24 </td>          
            <td class="name"> Wilfrid Laurier University </td>                                     
            <td class="city"> </td>          
            <td class="student">5.1 </td>
        </tr>
		<tr>
            <td class="OverallRank"> 25 </td>          
            <td class="name"> University of Manitoba</td>                                     
            <td class="city"> </td>          
            <td class="student">9.1 </td>
        </tr>
		<tr>
            <td class="OverallRank"> 26 </td>          
            <td class="name"> New Brunswick </td>                                     
            <td class="city"> </td>          
            <td class="student">8.3 </td>
        </tr>
		<tr>
            <td class="OverallRank"> 27 </td>          
            <td class="name"> Acadia University </td>                                     
            <td class="city"> </td>          
            <td class="student">10.6 </td>
        </tr>
		<tr>
            <td class="OverallRank"> 28 </td>          
            <td class="name"> UQAM </td>                                     
            <td class="city"> </td>          
            <td class="student"> 21.0</td>
        </tr>
		<tr>
            <td class="OverallRank"> 29 </td>          
            <td class="name"> Mount Allison </td>                                     
            <td class="city"> </td>          
            <td class="student"> 9.2</td>
        </tr>
		<tr>
            <td class="OverallRank"> 30 </td>          
            <td class="name"> St.Francis Xavier </td>                                     
            <td class="city"> </td>          
            <td class="student">5.2 </td>
        </tr>
		<tr>
            <td class="OverallRank"> 31 </td>          
            <td class="name"> Lethbridge University </td>                                     
            <td class="city"> </td>          
            <td class="student">7.3 </td>
        </tr>
		<tr>
            <td class="OverallRank"> 32 </td>          
            <td class="name"> Brock University </td>                                     
            <td class="city"> </td>          
            <td class="student">5.7 </td>
        </tr>
		<tr>
            <td class="OverallRank"> 33 </td>          
            <td class="name"> UOIT </td>                                     
            <td class="city"> </td>          
            <td class="student">5.0 </td>
        </tr>
		<tr>
            <td class="OverallRank"> 34 </td>          
            <td class="name"> University of Regina</td>                                     
            <td class="city"> </td>          
            <td class="student"> 14.2</td>
        </tr>
		<tr>
            <td class="OverallRank"> 35 </td>          
            <td class="name"> Trent University </td>                                     
            <td class="city"> </td>          
            <td class="student"> 6.0</td>
        </tr>
		<tr>
            <td class="OverallRank"> 36 </td>          
            <td class="name"> Saint Mary's</td>                                     
            <td class="city"> </td>          
            <td class="student"> 27.0</td>
        </tr>
		<tr>
            <td class="OverallRank"> 37 </td>          
            <td class="name"> UNBC </td>                                     
            <td class="city"> </td>          
            <td class="student"> 4.6</td>
        </tr>
		<tr>
            <td class="OverallRank"> 38 </td>          
            <td class="name">University of Winnipeg</td>                                     
            <td class="city"> </td>          
            <td class="student"> 4.7</td>
        </tr>
		<tr>
            <td class="OverallRank"> 39 </td>          
            <td class="name"> University of Windsor</td>                                     
            <td class="city"> </td>          
            <td class="student">8.0 </td>
        </tr>
		<tr>
            <td class="OverallRank"> 40 </td>          
            <td class="name"> Bishop's </td>                                     
            <td class="city"> </td>          
            <td class="student">23.1 </td>
        </tr>
		<tr>
            <td class="OverallRank"> 41 </td>          
            <td class="name"> UPEI </td>                                     
            <td class="city"> </td>          
            <td class="student">16.0 </td>
        </tr>
		<tr>
            <td class="OverallRank"> 42 </td>          
            <td class="name"> Lakehead University </td>                                     
            <td class="city"> </td>          
            <td class="student">7.2 </td>
        </tr>
		<tr>
            <td class="OverallRank"> 43 </td>          
            <td class="name"> Mount Saint Vincent </td>                                     
            <td class="city"> </td>          
            <td class="student">9.0 </td>
        </tr>
		<tr>
            <td class="OverallRank"> 44 </td>          
            <td class="name"> Laurentian University </td>                                     
            <td class="city"> </td>          
            <td class="student">3.9 </td>
        </tr>
		<tr>
            <td class="OverallRank"> 45 </td>          
            <td class="name"> Moncton </td>                                     
            <td class="city"> </td>          
            <td class="student">17.1 </td>
        </tr>
		<tr>
            <td class="OverallRank"> 46 </td>          
            <td class="name"> Cape Breton </td>                                     
            <td class="city"> </td>          
            <td class="student">18.2 </td>
        </tr>
		<tr>
            <td class="OverallRank"> 47 </td>          
            <td class="name"> St.Thomas University </td>                                     
            <td class="city"> </td>          
            <td class="student">5.6 </td>
        </tr>
		<tr>
            <td class="OverallRank"> 48 </td>          
            <td class="name"> Brandon University </td>                                     
            <td class="city"> </td>          
            <td class="student"> 7.9</td>
        </tr>
		<tr>
            <td class="OverallRank"> 49 </td>          
            <td class="name"> Nipissing University </td>                                     
            <td class="city"> </td>          
            <td class="student"> 0.6</td>
        </tr>
		
       
    </tbody>
</table>
	

		</div><! --/row -->
	</div><! --/container -->
	
	<div id="social">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-2">
					<a href="#"><i class="fa fa-dribbble"></i></a>
				</div>
				<div class="col-lg-2">
					<a href="#"><i class="fa fa-facebook"></i></a>
				</div>
				<div class="col-lg-2">
					<a href="#"><i class="fa fa-twitter"></i></a>
				</div>
				<div class="col-lg-2">
					<a href="#"><i class="fa fa-linkedin"></i></a>
				</div>
				<div class="col-lg-2">
					<a href="#"><i class="fa fa-instagram"></i></a>
				</div>
				<div class="col-lg-2">
					<a href="#"><i class="fa fa-tumblr"></i></a>
				</div>
			
			</div><! --/row -->
		</div><! --/container -->
	</div><! --/social -->

	<div id="footerwrap">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-4">
					<p><b>WEB DESIGNER, DEVELOPER & GAME ADDICT</b></p>
				</div>
			
				<div class="col-lg-4">
					<p>Living in the amazing London.</p>
				</div>
				<div class="col-lg-4">
					<p>hello@instant.com</p>
				</div>
			
			</div>
		
		</div>
	</div><! --/footerwrap -->
	


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
