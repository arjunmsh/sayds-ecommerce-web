function showPopup(obj) {
	var url = $(obj).href;
	var title = $(obj).title;
	if ($('template_popup') && typeof(Windows) != 'undefined') {
		Windows.focus('template_popup');
		return;
	}
	Dialog._getAjaxContent = function(transport) {
		var response = transport.responseText.evalJSON();
		Dialog.callFunc(response.html, Dialog.parameters);
		if (response.type && response.type == 'marketing') {
			magesms_filter_template_gridJsObject = new varienGrid('magesms_filter_template_grid');
			magesms_filter_template_gridJsObject.rowClickCallback = submitRestoreFilter;
		} else if (response.type && response.type == 'customer') {
			magesms_customer_gridJsObject = new varienGrid('magesms_customer_grid');
		} else {
			magesms_template_gridJsObject = new varienGrid('magesms_template_grid');
			magesms_template_gridJsObject.rowClickCallback = submitRestoreTemplate;
		}
	}
	var dialogWindow = Dialog.info(
		{
			url:url,
			options: {method: 'get'}
		},
		{
			id:'template_popup',
			className: "magento",
			width:600,
			resizable: true,
			title: title,
			draggable:true,
			resizable:true,
			closable:true,
			onClose: closePopup,
			showProgress: true,
		}
	);
}
function closePopup() {
	Windows.close('template_popup');
}
function submitSaveTemplate(form) {
	var type = $('type') ? $('type').value : 0;
	new Ajax.Request(form.action, {
		method: 'post',
		parameters: {
			saveName: $('saveName').value,
			text: $('text').value,
			unicode: $('unicode').checked ? 1 : 0,
			unique: $('unique').checked ? 1 : 0,
			type: type,
		},
		//asynchronous: false,
		onSuccess: function(transport) {
			if(transport && transport.responseText) {
				var response = transport.responseText.evalJSON();
				if (response.error != true) {
					Windows.close('template_popup');
					$('messages').innerHTML = '<ul class="messages"><li class="success-msg"><ul><li>' + Translator.translate('Template has been saved.') + '</li></ul></li></ul>'
				}
			}
		}
	});
}
function submitRemoveTemplate(obj) {
	if (window.confirm(Translator.translate('Are you sure you want to remove the template?'))) {
		var url = obj.href;
		new Ajax.Request(url, {
			method: 'post',
			parameters: {
				
			},
			//asynchronous: false,
			onSuccess: function(transport) {
				if(transport && transport.responseText) {
					var response = transport.responseText.evalJSON();
					if (!response.error)
						$('modal_dialog_message').innerHTML = '' + response.html + '';
						magesms_template_gridJsObject = new varienGrid('magesms_template_grid');
						magesms_template_gridJsObject.rowClickCallback = submitRestoreTemplate;
				}
			}
		});
	}
	return false;
}
function submitRestoreTemplate(grid, event) {
	var element = Event.findElement(event, 'tr');
	if (Event.element(event).className == 'action-remove') {
		return;
	}
	var url = element.title;
	new Ajax.Request(url, {
		method: 'post',
		parameters: {},
		//asynchronous: false,
		onSuccess: function(transport) {
			if(transport && transport.responseText) {
				var response = transport.responseText.evalJSON();
				if (!response.error) {
					$('text').value = response.data.template;
					$('unicode').checked = (parseInt(response.data.unicode) ? true : false);
					$('unique').checked = (parseInt(response.data.unique) ? true : false);
					countitSMS.count();
					$('messages').innerHTML = '<ul class="messages"><li class="success-msg"><ul><li>' + Translator.translate('Template has been loaded.') + '</li></ul></li></ul>'
				}
				closePopup();
			}
		}
	});
}

function submitSaveFilter(form) {
	var filters = $$('#marketing_filter input', '#marketing_filter select', '#marketing_filter textrea');
	var elements = [];
	for(var i in filters){
		if(filters[i].value && filters[i].value.length && !filters[i].disabled) elements.push(filters[i]);
	}
	new Ajax.Request(form.action, {
		method: 'post',
		parameters: {
			saveName: $('saveName').value,
			params: encode_base64(Form.serializeElements(elements)),
		},
		//asynchronous: false,
		onSuccess: function(transport) {
			if(transport && transport.responseText) {
				var response = transport.responseText.evalJSON();
				if (response.error != true) {
					Windows.close('template_popup');
					$('messages').innerHTML = '<ul class="messages"><li class="success-msg"><ul><li>' + Translator.translate('Filter has been saved.') + '</li></ul></li></ul>'
				}
			}
		}
	});
}
function submitRemoveFilter(obj) {
	if (window.confirm(Translator.translate('Are you sure you want to remove the filter?'))) {
		var url = obj.href;
		new Ajax.Request(url, {
			method: 'post',
			parameters: {
				
			},
			//asynchronous: false,
			onSuccess: function(transport) {
				if(transport && transport.responseText) {
					var response = transport.responseText.evalJSON();
					if (!response.error)
						$('modal_dialog_message').innerHTML = '' + response.html + '';
						magesms_template_gridJsObject = new varienGrid('magesms_filter_template_grid');
						magesms_template_gridJsObject.rowClickCallback = submitRestoreFilter;
				}
			}
		});
	}
	return false;
}

function submitRestoreFilter(grid, event) {
	var element = Event.findElement(event, 'tr');
	if (Event.element(event).className == 'action-remove') {
		return;
	}
	var url = element.title;
	new Ajax.Request(url, {
		method: 'post',
		parameters: {},
		//asynchronous: false,
		onSuccess: function(transport) {
			if(transport && transport.responseText) {
				var response = transport.responseText.evalJSON();
				if (!response.error) {
					$('magesms_applied_filters').innerHTML = response.html.appliedFilters;
					$('magesms-marketing-customer').innerHTML = response.html.customers;
					$('magesms-marketing-deleted').innerHTML = response.html.deleted;
					countitSMS.marketingCount = response.html.count;
					countitSMS.count();
					$('messages').innerHTML = '<ul class="messages"><li class="success-msg"><ul><li>' + Translator.translate('Filter has been applied.') + '</li></ul></li></ul>'
				}
				closePopup();
			}
		}
	});
}

function loadFilter(obj, url) {
	new Ajax.Request(url, {
		method: 'post',
		parameters: {name: obj.value},
		//asynchronous: false,
		onSuccess: function(transport) {
			if(transport && transport.responseText) {
				var response = transport.responseText.evalJSON();
				if (!response.error) {
					$('magesms_load_filter').innerHTML = response.html;
					if (response.js) {
						for (key in response.js) {
							eval(response.js[key]);
						}
					}
				}
			}
		}
	});
}

function applyFilter(formName) {
	var form = $(formName);
	var url = form.action;
	var filter = $('filter');
	if (!filter) {
		filter = [$('filter1').value, $('filter2').value]
	} else {
		filter = filter.value;
	}
	new Ajax.Request(url, {
		method: 'post',
		parameters: {
			name: $('magesms_marketing_filters').value,
			'value[]': filter
		},
		//asynchronous: false,
		onSuccess: function(transport) {
			if(transport && transport.responseText) {
				var response = transport.responseText.evalJSON();
				if (!response.error) {
					$('magesms_applied_filters').innerHTML = response.html.appliedFilters;
					$('magesms-marketing-customer').innerHTML = response.html.customers;
					countitSMS.marketingCount = response.html.count;
					countitSMS.count();
				}
			}
		}
	});
}

function removeFilter(obj) {
	var url = obj.href;
	new Ajax.Request(url, {
		method: 'post',
		parameters: {
		},
		//asynchronous: false,
		onSuccess: function(transport) {
			if(transport && transport.responseText) {
				var response = transport.responseText.evalJSON();
				if (!response.error) {
					$('magesms_applied_filters').innerHTML = response.html.appliedFilters;
					$('magesms-marketing-customer').innerHTML = response.html.customers;
					$('magesms-marketing-deleted').innerHTML = response.html.deleted;
					countitSMS.marketingCount = response.html.count;
					countitSMS.count();
				}
			}
		}
	});
}

function removeCustomer(obj) {
	var url = obj.href;
	new Ajax.Request(url, {
		method: 'post',
		parameters: {
		},
		//asynchronous: false,
		onSuccess: function(transport) {
			if(transport && transport.responseText) {
				var response = transport.responseText.evalJSON();
				if (!response.error) {
					$('magesms-marketing-customer').innerHTML = response.html.customers;
					$('magesms-marketing-deleted').innerHTML = response.html.deleted;
					countitSMS.marketingCount = response.html.count;
					if ($('magesms_customer_grid') && response.html.customer_letter) {
						$('magesms_customer_grid').innerHTML = response.html.customer_letter;
						magesms_customer_gridJsObject = new varienGrid('magesms_customer_grid');
					}
					countitSMS.count();
				}
			}
		}
	});
}

function resetFilter(obj) {
	if (window.confirm(Translator.translate('Are you sure you want to reset the filter?'))) {
		var url = obj.href;
		new Ajax.Request(url, {
			method: 'post',
			parameters: {
			},
			//asynchronous: false,
			onSuccess: function(transport) {
				if(transport && transport.responseText) {
					var response = transport.responseText.evalJSON();
					if (!response.error) {
						$('magesms_applied_filters').innerHTML = response.html.appliedFilters;
						$('magesms-marketing-customer').innerHTML = response.html.customers;
						$('magesms-marketing-deleted').innerHTML = response.html.deleted;
						countitSMS.marketingCount = response.html.count;
						countitSMS.count();
						$('messages').innerHTML = '<ul class="messages"><li class="success-msg"><ul><li>' + Translator.translate('Filter has been reset.') + '</li></ul></li></ul>'
					}
				}
			}
		});
	}
	return false;
}
