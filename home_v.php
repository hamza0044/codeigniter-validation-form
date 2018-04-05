<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<TITLE> login app</TITLE>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<script src="<?php echo base_url(); ?>assets/js/jquery.js "></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.js "></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>



</head>
<body>
<div class="container">
	<h1 id="TITLE">Lists </h1>
</div>
	<div class="container-fluid">	
		<div class="row">

		<div class="col -md-4 col-sm-4 col-xs-12"> </div>
		<div class="col -md-4 col-sm-4 col-xs-12">  
<form id="for" method="post" action ="<?php echo base_url()?>Home/save">
	<div class ="form_group">
		<label  > name * <span> (req) </span></label>
		<input class="form-control" name="name"  type="text" id="name" />
		</div>

		<div class ="form_group">
		email *
		<input class="form-control" name="email"  type="email" id="email" />
		</div>

		<div class ="form_group">
		phone *	
		<input class="form-control" name="phone"  type="tel" id="phone " />
		</div>

         <div class ="form_group">
		city
		<input name="city" class="form-control" type="text" id="city"/>
		</div>

		<div class ="form_group">
		marque
		<input  class="form-control" name="mark"  type="text" id="mark"/>
		</div>

		<div class ="form_group">
		modele
		<input class="form-control" name="modele"  type="text" id="mod"/>
		</div>

		<div class ="form_group">
		<input   class="btn btn-success" type="submit" id="insert" name="insert" value= "enregistrer"/>
		</div>
		</form>
		</div>
	</div>
		</div> 


<script>
$(document).ready(function()
{

	$("#TITLE").css("float","center");
	$("#TITLE").css("width","300");
	$("#TITLE").hide().show(1000);
	$("#for").hide().show(1000);
    $("#for").validate({
       rules: {
       	email: {
       		required: true
       	},
       	name : "required",
       	phone: {
       		required: true,
       		minlength: 10,
       		maxlength: 10       	}
       },
       messages:  {
       	email: "veuillez remplir ce champ",
       	name: "veuillez remplir ce champ",
       	phone: {
       		required: "veuillez remplir ce champ",
       		minlength: "entrer un numero valide",
       		maxlength: "entrer un numero valide",
       	}

       }

    });


		});
	


	




    </script>
</body>
</html>