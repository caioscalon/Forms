$(document).ready(function() {
	$('#registro_form').bootstrapValidator({
		feedbackIcons: {
			valid: 'glyphicon glyphicon-ok',
			invalid: 'glyphicon glyphicon-remove',
			validating: 'glyphicon glyphicon-refresh'
		},
				
		fields: {
      // Index
      usuarioInd: {
				validators: {
					notEmpty: {
						message: 'Por favor, insira o usuário'
					}
				}
			},
			senhaInd: {
				validators: {
					notEmpty: {
						message: 'Por favor, insira a senha'
					}
				}
      },
            
      // Registro
			'sup[]': {
				validators: {
					choice: {
						min: 1,
						message: 'Por favor, selecione pelo menos uma das opções'
					},
				}
			},
			assunto: {
				validators: {
					notEmpty: {
						message: 'Por favor, insira o assunto'
					}
				}
			},
			numero: {
				validators: {
					stringLength: {
						min: 3,
						message: 'O número inserido não é válido'
					},
					notEmpty: {
						message: 'Por favor, insira o número'
					}
				}
			},
			dataReg: {
				validators: {
					stringLength: {
						min: 10,
						message: ' '
					},
					notEmpty: {
						message: 'Por favor, insira a data do registro'
					},
					date: {
						format: 'DD/MM/YYYY',
						message: 'O formato inserido não é válido'
					},
					// callback: {
					// 	message: 'O formato inserido não é válido',
                    //     callback: function(value, validator) {
                    //         var m = new moment(value, 'DD/MM/YYYY', true);
                    //         if (!m.isValid()) {
                    //             return false;
                    //         }
					// 		return m.isAfter('01/01/1990') && m.isBefore('12/12/2015');
                    //     }
                    // }
				}
      },	
      url: {
  validators: {
    notEmpty: {
      message: 'Por favor, insira a url'
    }
  }
      },
      resumo: {
  validators: {
    notEmpty: {
      message: 'Por favor, insira o resumo'
    }
  }
      },
      resolve: {
  validators: {
    notEmpty: {
      message: 'Por favor, insira o objeto'
    }
  }
      },
      recurso: {
  validators: {
    notEmpty: {
      message: 'Por favor, insira o recurso'
    }
  }
      },
      consideracoes: {
  validators: {
    notEmpty: {
      message: 'Por favor, insira as considerações'
    }
  }
      },
      entrega: {
				validators: {
					notEmpty: {
						message: 'Por favor, insira o receptor'
					}
				}
			},
			acompanhamento: {
				validators: {
					notEmpty: {
						message: 'Por favor, insira o acompanhamento'
					}
				}
      },	
            
      // Acompanhamento
      dataAcomp: {
  validators: {
    stringLength: {
      min: 10,
      message: ' '
    },
    notEmpty: {
      message: 'Por favor, insira a data do acompanhamento'
    },
    date: {
      format: 'DD/MM/YYYY',
      message: 'O formato inserido não é válido'
    },
  }
      },
      obsAcomp: {
  validators: {
    notEmpty: {
      message: 'Por favor, insira a observação'
    }
  }
      },

      // Cadastro
      usuario: {
				validators: {
					stringLength: {
						min: 10,
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