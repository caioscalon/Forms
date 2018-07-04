$(document).ready(function() {
	$('#reg_form').bootstrapValidator({
		feedbackIcons: {
			valid: 'glyphicon glyphicon-ok',
			invalid: 'glyphicon glyphicon-remove',
			validating: 'glyphicon glyphicon-refresh'
		},
				
		fields: {
			usuario: {
				validators: {
					stringLength: {
						min: 6,
						message: 'O nome de usuário inserido não é válido'
					},
					notEmpty: {
						message: 'Por favor, insira o usuário'
					}
				}
			},
			senha: {
				validators: {
					stringLength: {
						min: 6,
						message: 'A senha inserida não é válida'
					},
					notEmpty: {
						message: 'Por favor, insira a senha'
					},
					identical: {
						field: 'confirmarSenha',
						message: 'Confirme sua senha no campo abaixo'
					}
				}
			},
			confirmarSenha: {
				validators: {
					notEmpty: {
						message: 'Por favor, insira a confirmação da senha'
					},
					identical: {
						field: 'senha',
						message: 'As senhas devem ser idênticas'
					}
				}
			},
			codigo: {
				validators: {
					notEmpty: {
						message: 'Por favor, insira o código'
					},
					between: {
						min: 11145,
						max: 11147,
						message: 'Por favor, insira um código válido'
					}
				}
			},					   
		}
	})
				
	.on('success.form.bv', function(e) {
		$('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
		$('#reg_form').data('bootstrapValidator').resetForm();

		// Prevent form submission
		e.preventDefault();

		// Get the form instance
		var $form = $(e.target);

		// Get the BootstrapValidator instance
		var bv = $form.data('bootstrapValidator');

		// Use Ajax to submit form data
		$.post($form.attr('action'), $form.serialize(), function(result) {
			console.log(result);
		}, 'json');
	});
});