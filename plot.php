<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Upload your property details </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="row block-9">
          <div class="col-md-6 plot-form" style="margin: 0 auto !important">
        <form action="#" method="post" name="plot_form" id="plot_form" class="bg-white">
            <div class="form-group">
            <input type="text" name="loc" id="loc" class="form-control" placeholder="Enter the location of your plot">
            </div>
            <div class="form-group">
            <label>Type of Land:</label><br>
            <div class="radio"><label><input type="radio" name="miyadi">Miyadi</label></div>
            <div class="radio"><label><input type="radio" name="non-miyadi">Non Miyadi</label></div>
            <div class="radio"><label><input type="radio" name="other">Other(Specify below)</label></div>
            </div>
            <div class="form-group">
            <input type="text" name="speci" id="speci" class="form-control" placeholder="Please specify">
            </div>
            
            
            <div class="form-group">
            <label>Measurement of Land:</label><br>
            </div>
            <div class="row">
            <div class="col-md-4 form-group">
            <input type="text" name="bigha" class="form-control" id="bigha" placeholder="Bigha"></div>
             <div class="col-md-4 form-group">
            <input type="text" name="katha" class="form-control" id="katha" placeholder="Katha"></div>
            <div class="col-md-4 form-group">
            <input type="text" name="lesha" class="form-control" id="lesha" placeholder="Lesha"></div>
            </div>
            <div class="form-group">
            <label>If Miyadi, provide Daag Number and Patta Number:</label><br></div>
            <div class="row">
            <div class="col-md-4 form-group">
            <input type="text" name="daag" class="form-control" id="daag" placeholder="Enter Daag Number"></div>
             <div class="col-md-4 form-group">
            <input type="text" name="patta" class="form-control" id="patta" placeholder="Enter Patta Number"></div>
            </div>
            <div class="form-group">
            <input type="tel" name="phone" id="phone" class="form-control" placeholder="Please enter your contact number">
            </div>
            </form>
            </div>
        </div>
    </body>
</html>