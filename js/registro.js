$(document).ready(function() {
	$('#registro_form').bootstrapValidator({
		feedbackIcons: {
			valid: 'glyphicon glyphicon-ok',
			invalid: 'glyphicon glyphicon-remove',
			validating: 'glyphicon glyphicon-refresh'
		},
				
		fields: {
			checkboxes: {
				validators: {
					required: {
						message: 'Por favor, insira o usuário'
					},
				}
			},
			assunto: {
				validators: {
					notEmpty: {
						message: 'Por favor, insira o assunto'
					},
				}
			},
			numero: {
				validators: {
					notEmpty: {
						message: 'Por favor, insira o número'
					},

				}
			},
			dataReg: {
				validators: {
					notEmpty: {
						message: 'Por favor, insira a data do registro'
					},
				}
            },	
            url: {
				validators: {
					notEmpty: {
						message: 'Por favor, insira a url'
					},
				}
            },
            resumo: {
				validators: {
					notEmpty: {
						message: 'Por favor, insira o resumo'
					},
				}
            },
            resolve: {
				validators: {
					notEmpty: {
						message: 'Por favor, insira o objeto'
					},
				}
            },
            recurso: {
				validators: {
					notEmpty: {
						message: 'Por favor, insira o recurso'
					},
				}
            },
            consideracoes: {
				validators: {
					notEmpty: {
						message: 'Por favor, insira as considerações'
					},
				}
            },
            entrega: {
				validators: {
					notEmpty: {
						message: 'Por favor, insira o receptor'
					},
				}
			},				   
		}
	})
				
	.on('success.form.bv', function(e) {
		$('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
		$('#registro_form').data('bootstrapValidator').resetForm();

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