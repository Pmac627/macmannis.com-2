var fbg = new function()
{
	var self = this;
	var test_frequency = 20;
	var giveup = 3000;
	var latency = 100;
	this.rfu = null;
	var init = null;
	var onWinLoad = null;
	this.hideFOUT = null;
	this.isFontFaceSupported = null;
	this.onFontFaceFailed = null;

	init = function()
	{
		//rfu
	};

	onWinLoad = function(callback)
	{
		if (window.addEventListener) addEventListener('load',callback,false);
		else attachEvent('onload',callback);
	};

	this.hideFOUT = function(when, delay)
	{
		if (navigator.appName != 'Microsoft Internet Explorer' && !/Firefox\/3/.test(navigator.userAgent))
			return;

		delay = delay || latency;

		var fontnams = [];
		var fontruls = [];
		var selectrs = [];
		var iscompliant = true;

		for (var i = 0; i < document.styleSheets.length; i++)
		{
			var stylsheet = document.styleSheets[i];

			if (!stylsheet.cssRules) 
			{
				iscompliant = false;
				var rls = stylsheet.cssText;
				rls.replace(/@font-face\s*\{([^\}]+)\}/ig, function(r, t){
					var fontnam = r.replace(/([\s\S]*)(font-family:\s*['"]?)([-_0-9a-zA-Z]+)([\s\S]*)/, "$3");
					fontnams.push(fontnam);
					return r;
				});
			}		

			var ffrules = stylsheet.cssRules || stylsheet.rules;

			for (var j = 0; j < ffrules.length; j++)
			{
				var rul = ffrules[j];
					
				if (iscompliant && rul instanceof CSSFontFaceRule)
				{
					var fontnam = rul.cssText.replace(/([\s\S]*)(font-family:\s*['"]?)([-_0-9a-zA-Z]+)([\s\S]*)/, "$3");
					fontnams.push(fontnam);
				}
				else  fontruls.push(rul);
			}
		}

		for (var i = 0; i < fontnams.length; i++)
		{
			for (var j = 0; j < fontruls.length; j++)
			{
				var csstxt = iscompliant ? fontruls[j].cssText : fontruls[j].style.cssText;
				if (csstxt.indexOf(fontnams[i]) != -1)
				{
					selectrs.push(fontruls[j].selectorText);
				}
			}
		}

		var body = document.body || document.documentElement;
		var spn = document.createElement('span');
		spn.setAttribute('style','font:99px _,serif;position:absolute;visibility:hidden');
		spn.style.visibility = 'hidden';
		spn.innerHTML = '-------';
		spn.id = 'fonttest';
		body.appendChild(spn);

		var stl1 = document.createElement('style');
		document.getElementsByTagName("head")[0].appendChild(stl1);
		var allhidden = '';
		for (var i = 0; i < selectrs.length; i++)
			allhidden += (selectrs[i] + (i < (selectrs.length - 1) ? ', ' : ' '));
		allhidden += '{visibility:hidden}';
		if (stl1.styleSheet) stl1.styleSheet.cssText = allhidden;
		else stl1.textContent = allhidden;

		spn.style.font = '99px "' + fontnams[fontnams.length-1] + '",_,serif';

		var wid = spn.offsetWidth;
		var temp1 = '';
		var freq = test_frequency;

		var showHidden = function()
		{
			var fnttest = setInterval(function()
			{			
				if (!wid && document.body)
				{
					body.removeChild(spn);
					document.body.appendChild(spn);
					wid = spn.offsetWidth;
				}
				var nu_wid = spn.offsetWidth;
				temp1 += (nu_wid + '   ');
				giveup -= freq;
				if (wid != nu_wid || giveup <= 0)
				{	
					clearInterval(fnttest);
					setTimeout(function(){stl1.parentNode.removeChild(stl1);}, delay);
					if (giveup <= 0 && self.onFontFaceFailed) self.onFontFaceFailed();
					spn.parentNode.removeChild(spn);
				} 
			}, freq);
		}

		if (when == 'asap')	showHidden();
		else if (when == 'onload') onWinLoad(showHidden);
		else showHidden();

		if (window.TESTCAPTURE)
		{
			onWinLoad(function()
			{
				document.getElementById('hf_monitor_div').innerHTML = temp1;
				setTimeout(function(){ document.getElementById('hf_monitor_div').innerHTML += '<br>Final: ' + spn.offsetWidth; }, 1000);				
			});
		}
				
	};

	this.isFontFaceSupported = function()
	{
		var 
		sheet, doc = document,
		head = doc.head || doc.getElementsByTagName('head')[0] || docElement,
		style = doc.createElement("style"),
		impl = doc.implementation || { hasFeature: function() { return false; } };

		style.type = 'text/css';
		head.insertBefore(style, head.firstChild);
		sheet = style.sheet || style.styleSheet;

		var supportAtRule = impl.hasFeature('CSS2', '') ?
		        function(rule) {
		            if (!(sheet && rule)) return false;
		            var result = false;
		            try {
		                sheet.insertRule(rule, 0);
		                result = !(/unknown/i).test(sheet.cssRules[0].cssText);
		                sheet.deleteRule(sheet.cssRules.length - 1);
		            } catch(e) { }
		            return result;
		        } :
		        function(rule) {
		            if (!(sheet && rule)) return false;
		            sheet.cssText = rule;
		 
		            return sheet.cssText.length !== 0 && !(/unknown/i).test(sheet.cssText) &&
		              sheet.cssText
		                    .replace(/\r+|\n+/g, '')
		                    .indexOf(rule.split(' ')[0]) === 0;
		        };

		return supportAtRule('@font-face { font-family: "font"; src: "font.ttf"; }');		
	};
	init();
}();