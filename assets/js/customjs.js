/*for time display at top*/
jQuery(document).ready(function() {

	jQuery.ajax({
		type: 'GET',
		cache: false,
		url: location.href,
		complete: function(req, textStatus) {
			var dateString = req.getResponseHeader('Date');
			if (dateString.indexOf('GMT') === -1) {
				dateString += ' GMT';
			}
			localStorage.setItem("date", dateString);
		}
	});
});
function display_ct() {
	document.getElementById("ct").innerHTML = new Date(localStorage.getItem("date"));
}
/*for video pause on click of close button*/
function closeVideo() {
	var vid = document.getElementById("v1");
	vid.pause();
}

function closeVideo2() {
	var vid = document.getElementById("v2");
	vid.pause();
}

function closeVideo3() {
	var vid = document.getElementById("v3");
	vid.pause();
}

jQuery(document).ready(function() {

	// FETCHING DATA FROM JSON FILE
	jQuery.getJSON("./getJson",
		function(data) {
			var newsElement1 = '';
			var newsElement = '<marquee  onmouseover="this.stop();" onmouseout="this.start();" scrolldelay="0" scrollamount="7" style="background:#4a595e;">';
			newsElement += '<h5 id="scroll" style="font-weight: bold;">';

			var filteredData = jQuery.grep(data, function(a) {
				var dt = new Date(localStorage.getItem("date"));

				var eDate = new Date(a.endDate);
				var sDate = new Date(a.startDate);

				return dt <= eDate && dt >= sDate;
			});
			newsElement1 += "<ol id='announcement' style='list-style: disc;'>"
			// ITERATING THROUGH OBJECTS
			jQuery.each(filteredData, function(key, value) {

				//CONSTRUCTION OF ROWS HAVING
				// DATA FROM JSON OBJECT
				newsElement += '<a style="color: white;font-family: rockwell">';
				newsElement += value.Data;

				if (value.url != '') {
					newsElement += ' <a style="color:cyan;" href="' + value.url + '" target="_blank">[Click here]</a>';
				}

				newsElement += '</a>'
				//newsElement +=value.Data;
				newsElement += '<a style="color: red;">' + " || " + '</a>';



				//CONSTRUCTION OF ROWS HAVING
				// DATA FROM JSON OBJECT
				newsElement1 += '<li style="color: black;font-family: rockwell">';
				newsElement1 += value.Data;

				if (value.url != '') {
					newsElement1 += ' <a style="color:blue"; href="' + value.url + '" target="_blank">[Click here]</a>';
				}

				if (value.navin == 'true') {
					newsElement1 += '<img style="padding-bottom: 5px;" class="blinking" src="./img/new/new.gif">';
				}

				newsElement1 += '</li>'
				//newsElement +=value.Data;
				newsElement1 += '<a style="color: red;">' + " <br> " + '</a>';

			});

			//INSERTING ROWS INTO TABLE 
			newsElement += "</h5>"
			newsElement += ' </marquee>';
			jQuery('#news').append(newsElement);

			newsElement1 += "</ol>"
			//INSERTING ROWS INTO TABLE 
			jQuery('#news1').append(newsElement1);
		});

});