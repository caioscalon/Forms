$(document).ready(function() {
	$('#registro_form').bootstrapValidator({
		feedbackIcons: {
			valid: 'glyphicon glyphicon-ok',
			invalid: 'glyphicon glyphicon-remove',
			validating: 'glyphicon glyphicon-refresh'
		},
				
		fields: {
			// 'sup[]': {
			// 	validators: {
			// 		required: {
			// 			message: 'Por favor, selecione pelo menos uma das opções'
			// 		},
			// 	}
			// },
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
			acompanhamento: {
				validators: {
					notEmpty: {
						message: 'Por favor, insira o acompanhamento'
					}
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

	$('#btnHide').click(function () {
		//$('td:nth-child(2)').hide();
		// if your table has header(th), use this
		$('td:nth-child(3),th:nth-child(3)').hide();
	});
  
	$('.editbtn').click(function () {
		var currentTD = $(this).parents('tr').find('td');
		if ($(this).html() == 'Edit') {
			currentTD = $(this).parents('tr').find('td');
			$.each(currentTD, function () {
				$(this).prop('contenteditable', true)
			});
		} else {
			$.each(currentTD, function () {
				$(this).prop('contenteditable', false)
			});
		}

		$(this).html($(this).html() == 'Edit' ? 'Save' : 'Edit')

	});

	$(document).on("click", ".delete", function(){
        $(this).parents("tr").remove();
		$(".add-new").removeAttr("disabled");
    });

});