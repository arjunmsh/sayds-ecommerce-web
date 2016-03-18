function popup_title(obj)
{
	var $this = obj;
	var title = $this.title;
	var elem = $("popup-title");
	if (elem) {
		elem.parentNode.removeChild(elem);
	}
	var position = $this.getBoundingClientRect();
	$this.style.position = 'relative';
	var popup = document.createElement('p');
	popup.innerHTML = title;
	popup.id = 'popup-title';
	popup.style.position = 'absolute'
	popup.style.top = (position.top-20)+'px';
	popup.style.left = (position.left+10)+'px';
	popup.style.background = 'black';
	popup.style.color = 'white';
	popup.style.cursor = 'pointer';
	popup.style.maxWidth = '400px';
	popup.style.padding = '5px';
	popup.onclick = function() {
		this.parentNode.removeChild(this);
	}
	//$this.appendChild(popup);
	document.body.appendChild(popup);
}

countitSMS = function(input, unicode, output) {
	var self = this;
	this.input = input;
	this.output = output;
	this.unicode = unicode;
	this.chartext1 = 'Characters: ';
	this.chartext2 = 'SMS: ';
	this.alert = 'Text is too long';
	this.marketingCustomers = 'Total customers: ';
	this.marketingTotal = 'Total SMS: ';
	this.limit = 4;
	this.translate = {};
	this.copyFrom;
	
	this.input.addEventListener('change', function(event) { self.count(event)}, false);
	this.input.addEventListener('keyup', function(event) { self.count(event)}, false);
	this.input.addEventListener('mousemove', function(event) { self.count(event)}, false);
	if (typeof this.unicode === 'object') {
		this.unicode.addEventListener('change', function(event) { self.count(event)}, false);
	}

	this.count = function() {
		if (typeof this.copyFrom === 'object') {
			this.input.value = this.copyFrom.value;
		}
		for (var key in this.translate) {
			//alert(this.translate[key]);
			String.prototype.replaceAll = function (find, replace) {
				var str = this;
				return str.replace(new RegExp(find, 'g'), replace);
			};
			this.input.value = this.input.value.replaceAll('{'+key+'}', this.translate[key]);
		}
		var unicode = typeof this.unicode === 'object' ? this.unicode.checked : parseInt(this.unicode);
		if (unicode) {
			var sms1 = 70;
			var header = 3
		} else {
			var sms1 = 160;
			var header = 7;
		}
		var len = this.input.value.length;
		var total = 0;

		if (len > sms1) {
			total = parseInt((len-1) / (sms1-header))+1;
		} else if (len > 0) {
			total = 1;
		}
			
		this.output.innerHTML = this.chartext1 + len + ', ' + this.chartext2 + ' ' + total;
		if (this.marketingCount !== undefined) {
			this.output.innerHTML += ', ' + this.marketingCustomers + ' ' + this.marketingCount + ', ' + this.marketingTotal + ' ' + total*this.marketingCount;
			var cc = document.getElementById('magesms-marketing-countit');
			if (cc)
				cc.innerHTML = this.marketingCount;
		}
		if (this.alert && this.limit < total) {
			this.input.value = this.input.value.substring(0, this.limit*(sms1-header));
			alert(this.alert);
			this.count();
		}
		this.input.focus();
	}

	this.help = function(obj) {
		if (obj.length) {
			for (var i=0; i<obj.length; ++i) {
				for (var key in this.translate) {
					obj[i].innerHTML = obj[i].innerHTML.replaceAll('{'+key+'}', '<span class="help-hook" title="'+this.translate[key]+'">{'+key+'}</span>');
				}
			}
			for (var j=0; j<obj.length; ++j) {
				var hooks = obj[j].getElementsByClassName('help-hook');
				for (var i=0; i<hooks.length; ++i) {
					hooks[i].addEventListener('click', hooksEvent);
				}
			}
		} else {
			for (var key in this.translate) {
				obj.innerHTML = obj.innerHTML.replaceAll('{'+key+'}', '<span class="help-hook" title="'+this.translate[key]+'">{'+key+'}</span>');
			}
			var hooks = obj.getElementsByClassName('help-hook');
			for (var i=0; i<hooks.length; ++i) {
				hooks[i].addEventListener('click', hooksEvent);
			}
		}
	}
	function hooksEvent() {
		var position = self.getCursorPosition(self.copyFrom);
		self.copyFrom.value = [self.copyFrom.value.slice(0, position), this.innerHTML, self.copyFrom.value.slice(position)].join('');
		self.setCursorPosition(self.copyFrom, position + this.innerHTML.length);
		self.count();
	}
	this.getCursorPosition = function(node) {
		node.focus(); 
		/* without node.focus() IE will returns -1 when focus is not on node */
		if(node.selectionStart)
			return node.selectionStart;
		else if(!document.selection)
			return 0;
		var c = "\001";
		var sel = document.selection.createRange();
		var dul = sel.duplicate();
		var len = 0;
		dul.moveToElementText(node);
		sel.text = c;
		len = (dul.text.indexOf(c));
		sel.moveStart('character', -1);
		sel.text = "";
		return len;
	}
	this.setCursorPosition = function(input, position) {
		if (input.setSelectionRange) {
			input.focus();
			input.setSelectionRange(position, position);
		} else if (input.createTextRange) {
			var range = input.createTextRange();
			range.collapse(true);
			range.moveEnd('character', position);
			range.moveStart('character', position);
			range.select();
		}
	}
}
magesmsAddRecipient = function(obj, output, form) {
	var self = this;
	this.object = obj;
	this.output = output;
	this.form = form;
	this.serviceUrl = null;
	this.translate = {notfound: 'not found'};
	
	this.toggle = function() {
		if (self.object.style.display == 'none') {
			self.object.style.display = 'block';
		} else {
			self.object.style.display = 'none';
		}
		return false;
	}

	this.setServiceUrl = function(url) {
		this.serviceUrl = url;
	}
	this.setTranslate = function(data) {
		for (name in data) {
			if (this.translate[name] != undefined)
				this.translate[name] = data[name];
		}
	}
	
	this.load = function(char) {
		if (!this.serviceUrl)
			return;
		new Ajax.Request(this.serviceUrl, {
			method: 'get',
			parameters: {char:char},
			//asynchronous: false,
			onSuccess: function(transport) {
				//document.getElementById('loadingmask').style.display = 'none';
				self.render(transport.responseText, char);
			}
		});
		this.output.innerHTML = '';
		//document.getElementById('loadingmask').style.display = 'block';
		return false;
	}
	
	this.render = function(data, char) {
		var rows = data.split("\n");
		this.output.innerHTML = '';
		if (!data.trim()) {
			this.output.innerHTML = '<div class="popup-notfound"><span>'+char + '</span> ' + this.translate['notfound'];
		}
		for (var i=0; i<rows.length; ++i) {
			if (!rows[i])
				continue;
			var cols = rows[i].split(";");
			var elm = document.createElement('div');
			elm.className = 'popup-row'+(i%2?' even':'');
			elm.innerHTML = cols[0] + '&nbsp;&nbsp;' + '+'+cols[1];
			elm.setAttribute('data', cols[1]);
			elm.addEventListener('click', function() {
				self.form.value += this.getAttribute('data')+', '
				this.style.textDecoration = 'line-through';
			});
			this.output.appendChild(elm);
		}
		
	}
}

function openGridRowMagesms(grid, event){
	var element = Event.findElement(event, 'tr');
	if(['a', 'input', 'select', 'option'].indexOf(Event.element(event).tagName.toLowerCase())!=-1) {
		return;
	}

	if(element.title){
		window.open(element.title, 'magesms_popup_customer');
	}
}
