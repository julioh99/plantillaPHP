$("#email").change(function(){
    $(".alert").remove();

    const email = $(this).val();
    console.log(email);
    if (email.includes("@")&&email.includes(".")) {
       // alert("Email correcto");
    }else{
        $("#email").parent().after(`
					<div class="alert alert-warning">
							<b>ERROR:</b>
                            El correo electrónico Debe el contener el caracter <b>@</b> y un . <hr>  
                            Por Favor verifique su información
					</div>
        `);
        $('#recuperarPass').hide();

    }
    /*
    $(".alert").remove();

	var email = $(this).val();
	
	var datos = new FormData();
	datos.append("validarEmail", email);

	$.ajax({

		url: "ajax/formularios.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success:function(respuesta){
			
			if(respuesta){

				$("#email").val("");

				$("#email").parent().after(`
					
					<div class="alert alert-warning">

							<b>ERROR:</b>

							El correo electrónico ya existe en la base de datos,  por favor ingrese otro diferente
					</div>


				`);

			}

		}

	});*/


})