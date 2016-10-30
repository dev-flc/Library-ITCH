$(document).ready(function(){
	$('.solo-numero').keyup(function (){
            this.value = (this.value + '').replace(/[^0-9]/g, '');
          });
	$("#formulario").submit(function () {
		if($("#matricula").val().length < 1) {
			$.notify({
					icon: 'glyphicon glyphicon-ban-circle',
					message: "El campo <strong>Matricula</strong>  esta vacío"
					},{
						type: 'danger'
					});
			return false;
		}
		if($("#matricula").val().length < 8) {
			$.notify({
					icon: 'glyphicon glyphicon-ban-circle',
					message: "Su matricula esta conformada por  <strong>minimo</strong> 8 numeros"
					},{
						type: 'danger'
					});
			return false;
		}
		if($("#matricula").val().length > 8) {
			$.notify({
					icon: 'glyphicon glyphicon-ban-circle',
					message: "Su matricula esta conformada por <strong>Maximo</strong> 8 numeros"
					},{
						type: 'danger'
					});
			return false;
		}
		return true;
	});
});
