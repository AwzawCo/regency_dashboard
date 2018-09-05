$(document).ready(function() {
    $('#bid_form_bridgestreet').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            live: 'enabled',
            validating: 'glyphicon glyphicon-refresh'

        },
        fields: {
            repFirstName: {
                validators: {
                        stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                        notEmpty: {
                        message: 'Please supply your first name'
                    }
                }
            },
             repLastName: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your last name'
                    }
                }
            },
            repPhone: {
                validators: {
                    phone: {
                        country: 'US'
                    },
                    notEmpty: {
                        message: 'Please supply your phone number'
                    }
                }
            },
            repEmail: {
                validators: {
                    emailAddress: {
                    },
                    notEmpty: {
                        message: 'Please supply a valid Email Address'
                    }
                }
            },
            // coreInventory: {
            //     validators: {
            //         notEmpty: {
            //             message: 'Please select Inventory'
            //         },
            //     }
            // },
            propertyName: {
                validators: {
                        notEmpty: {
                        message: 'Please supply the Property Name'
                    }
                }
            },
            // propertyURL: {
            //     validators: {
            //             notEmpty: {
            //             message: 'Please supply the Property Name'
            //         }
            //     }
            // },
            propertyAddress: {
                validators: {
                        notEmpty: {
                        message: 'Please supply the Property Name'
                    }
                }
            },
            // propertyAddress2: {
            //     validators: {
            //             notEmpty: {
            //             message: 'Please supply the Property Name'
            //         }
            //     }
            // },
             propertyCity: {
                validators: {
                    notEmpty: {
                        message: 'Please supply the city name'
                    }
                }
            },
            propertyState: {
                validators: {
                    notEmpty: {
                        message: 'Please supply the state'
                    }
                }
            },
            propertyZip: {
                validators: {
                    notEmpty: {
                        message: 'Please supply the zipcode'
                    }
                }
            },
            propertyCountry: {
                validators: {
                    notEmpty: {
                        message: 'Please supply the Country'
                    }
                }
            },
            dateAvailable: {
                validators: {
                    notEmpty: {
                        message: 'Please select the date availability'
                    }
                }
            },
            quoteValidType: {
                validators: {
                    notEmpty: {
                        message: 'Please select how long the quote is valid for'
                    }
                }
            },
            budgetTypeID: {
                    notEmpty: {
                        message: 'Please supply the rate recurrence'
                    }
                }
            },
            tax: {
                validators: {
                    notEmpty: {
                        message: 'Please select the Tax/VAT/TVA'
                    }
                }
            },
            leaseTerm: {
                validators: {
                    notEmpty: {
                        message: 'Please select the lease terms'
                    }
                }
            },
            noticeTerm: {
                validators: {
                    notEmpty: {
                        message: 'Please select the notice term'
                    }
                }
            },
            cancellation: {
                    notEmpty: {
                        message: 'Please supply cancellation policy'
                    }
            },
            comment: {
                validators: {
                      stringLength: {
                        min: 4,
                        max: 1000,
                        message: 'The username must be more than 4 and less than 1000 characters long'
                    },
                    notEmpty: {
                        message: 'Please supply a description of the property'
                    }
                    
                }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#bid_form_bridgestreet').data('bootstrapValidator').resetForm();

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