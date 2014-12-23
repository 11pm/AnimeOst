var pager = {

	loadTo: $('.content'),

	click: function(e){
		e.preventDefault();

		var routeTo = $(this).attr("href");

		pager.loadTemplate(routeTo);
	},

	loadTemplate: function(name){
		function loadPage(){
			return $.ajax({
				url: name,
				type: "GET"
			});
		}

		$.when(loadPage()).done(function(response){

			pager.loadTo.html(response);

		});
	}

};

$('body').on('click', 'nav a', pager.click);

$(document).ready(function(){
	pager.loadTemplate('/home');
});