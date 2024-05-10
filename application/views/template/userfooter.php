</main>
		<!-- MAIN -->
	</section>
	<!-- NAVBAR -->

	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script> 
  
  
  // SIDEBAR DROPDOWN
const allDropdown = document.querySelectorAll('#sidebar .side-dropdown');
const sidebar = document.getElementById('sidebar');

allDropdown.forEach(item=> {
	const a = item.parentElement.querySelector('a:first-child');
	a.addEventListener('click', function (e) {
		e.preventDefault();

		if(!this.classList.contains('active')) {
			allDropdown.forEach(i=> {
				const aLink = i.parentElement.querySelector('a:first-child');

				aLink.classList.remove('active');
				i.classList.remove('show');
			})
		}

		this.classList.toggle('active');
		item.classList.toggle('show');
	})
})





// SIDEBAR COLLAPSE
const toggleSidebar = document.querySelector('nav .toggle-sidebar');
const allSideDivider = document.querySelectorAll('#sidebar .divider');

if(sidebar.classList.contains('hide')) {
	allSideDivider.forEach(item=> {
		item.textContent = '-'
	})
	allDropdown.forEach(item=> {
		const a = item.parentElement.querySelector('a:first-child');
		a.classList.remove('active');
		item.classList.remove('show');
	})
} else {
	allSideDivider.forEach(item=> {
		item.textContent = item.dataset.text;
	})
}

toggleSidebar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');

	if(sidebar.classList.contains('hide')) {
		allSideDivider.forEach(item=> {
			item.textContent = '-'
		})

		allDropdown.forEach(item=> {
			const a = item.parentElement.querySelector('a:first-child');
			a.classList.remove('active');
			item.classList.remove('show');
		})
	} else {
		allSideDivider.forEach(item=> {
			item.textContent = item.dataset.text;
		})
	}
})




sidebar.addEventListener('mouseleave', function () {
	if(this.classList.contains('hide')) {
		allDropdown.forEach(item=> {
			const a = item.parentElement.querySelector('a:first-child');
			a.classList.remove('active');
			item.classList.remove('show');
		})
		allSideDivider.forEach(item=> {
			item.textContent = '-'
		})
	}
})



sidebar.addEventListener('mouseenter', function () {
	if(this.classList.contains('hide')) {
		allDropdown.forEach(item=> {
			const a = item.parentElement.querySelector('a:first-child');
			a.classList.remove('active');
			item.classList.remove('show');
		})
		allSideDivider.forEach(item=> {
			item.textContent = item.dataset.text;
		})
	}
})




// PROFILE DROPDOWN
const profile = document.querySelector('nav .profile');
const imgProfile = profile.querySelector('img');
const dropdownProfile = profile.querySelector('.profile-link');

imgProfile.addEventListener('click', function () {
	dropdownProfile.classList.toggle('show');
})




// MENU
const allMenu = document.querySelectorAll('main .content-data .head .menu');

allMenu.forEach(item=> {
	const icon = item.querySelector('.icon');
	const menuLink = item.querySelector('.menu-link');

	icon.addEventListener('click', function () {
		menuLink.classList.toggle('show');
	})
})



window.addEventListener('click', function (e) {
	if(e.target !== imgProfile) {
		if(e.target !== dropdownProfile) {
			if(dropdownProfile.classList.contains('show')) {
				dropdownProfile.classList.remove('show');
			}
		}
	}

	allMenu.forEach(item=> {
		const icon = item.querySelector('.icon');
		const menuLink = item.querySelector('.menu-link');

		if(e.target !== icon) {
			if(e.target !== menuLink) {
				if (menuLink.classList.contains('show')) {
					menuLink.classList.remove('show')
				}
			}
		}
	})
})





// PROGRESSBAR
const allProgress = document.querySelectorAll('main .card .progress');

allProgress.forEach(item=> {
	item.style.setProperty('--value', item.dataset.value)
})






// APEXCHART
var options = {
  series: [{
  name: 'series1',
  data: [31, 40, 28, 51, 42, 109, 100]
}, {
  name: 'series2',
  data: [11, 32, 45, 32, 34, 52, 41]
}],
  chart: {
  height: 350,
  type: 'area'
},
dataLabels: {
  enabled: false
},
stroke: {
  curve: 'smooth'
},
xaxis: {
  type: 'datetime',
  categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
},
tooltip: {
  x: {
    format: 'dd/MM/yy HH:mm'
  },
},
};

var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();


//datamapping
const key = 'WXaPr09ZJq6ZSNOFofJS';
      const map = L.map('map').setView([15.686141, 120.413924], 12); //starting position

      L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 19,
      attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
      }).addTo(map);

var popup = L.popup();
function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("You clicked the map at " + e.latlng.toString())
        .openOn(map);
     
        var x = document.getElementById("lng").value = e.latlng.lng.toString();
        var e = document.getElementById("lat").value = e.latlng.lat.toString();
        
}


map.on('click', onMapClick);

var Sanclem = L.polygon([
  [15.763868, 120.393017],[15.760541, 120.39005],[15.759426, 120.389101],
  [15.755434, 120.386093],[15.753855, 120.384334],[15.753791, 120.383667],
  [15.753631, 120.381299],[15.753375, 120.379423],[15.752061, 120.378246],
  [15.750941, 120.377253],[15.74823, 120.377951],[15.748234, 120.377948],
  [15.74697, 120.375765],[15.745238, 120.375792],[15.743003, 120.372946],
  [15.741361, 120.37278],[15.739447, 120.373091],[15.739163, 120.372249],
  [15.738469, 120.371106],[15.737342, 120.371033],[15.737807, 120.36807],
  [15.737765, 120.366469],[15.737445, 120.365868],[15.735622, 120.364484],
  [15.735384, 120.363668],[15.735519, 120.362628],[15.735405, 120.361855],
  [15.73304, 120.359666],[15.730436, 120.359119],[15.73023, 120.358229],
  [15.729589, 120.357853],[15.726755, 120.357617],[15.726538, 120.357853],
  [15.724903, 120.358226],[15.722907, 120.358274],[15.722424, 120.356713],
  [15.721907, 120.356512],[15.719798, 120.35659],[15.714867, 120.357641],
  [15.711092, 120.357319],[15.70978, 120.356491],[15.709762, 120.355359],
  [15.709295, 120.354879],[15.708799, 120.354535],[15.708006, 120.35457],
  [15.708094, 120.354063],[15.707983, 120.353173],[15.707425, 120.352698],
  [15.706808, 120.351869],[15.704761, 120.351099],[15.705122, 120.350303],
  [15.704794, 120.349908],[15.703049, 120.349369],[15.702339, 120.34986],
  [15.702083, 120.350415],[15.701696, 120.350362],[15.701466, 120.349965],
  // sito nag kakatalo sa point
  [15.702135, 120.349354],[15.702682, 120.348573],[15.702202, 120.347618],
  [15.702039, 120.346124],[15.701688, 120.34562],[15.70082, 120.345488],
  [15.700541, 120.344635],[15.701347, 120.342932],[15.701058, 120.342699],
  [15.700247, 120.342581],[15.69971, 120.341843],[15.698447, 120.341492],
  [15.698563, 120.340918],[15.698057, 120.340607],[15.696361, 120.341199],
  [15.695775, 120.341816],[15.695424, 120.341607],[15.694788, 120.340687],
  //dito
  
  [15.695429, 120.341602],[15.694788, 120.340691],
  [15.693546, 120.340216],[15.693105, 120.339068],[15.692849, 120.338134],
  [15.692428, 120.337649],[15.691958, 120.337684],[15.691447, 120.337536],
  [15.69044, 120.335948],[15.689923, 120.335318],[15.688581, 120.334991],
  [15.687036, 120.335122],[15.686187, 120.335672],[15.68536, 120.335525],
  [15.6848, 120.334846],[15.684346, 120.333854],[15.683935, 120.333534],
  [15.68314, 120.332317],
  //
  [15.683039, 120.330563],[15.682714, 120.329286],[15.681216, 120.327757],
  [15.679635, 120.32758],[15.678318, 120.326979],[15.677404, 120.326963],
  [15.675948, 120.327784],[15.674512, 120.327832],[15.671661, 120.327301],
  [15.668045, 120.32501],[15.671666, 120.327302],
  [15.674522, 120.327832],[15.671671, 120.327301],[15.668043, 120.325005],
  [15.667103, 120.324184],[15.665265, 120.323412],[15.663057, 120.322115],
  [15.661725, 120.320014],[15.660368, 120.317039],[15.660327, 120.315472],
  [15.656454, 120.315163],[15.658664, 120.3125],[15.655764, 120.302631],
  //
  [15.652682, 120.29887],[15.649545, 120.296824],[15.641188, 120.291719],
  [15.63995, 120.290898],[15.635869, 120.287423],[15.627333, 120.278494],
  [15.624879, 120.273827],[15.623388, 120.267713],[15.621001, 120.255338],
  [15.618645, 120.253801],[15.615202, 120.257873],[15.611637, 120.260566],
  [15.607209, 120.263023],[15.594435, 120.269954],[15.594437, 120.269954],
  [15.594768, 120.281463],[15.60838, 120.302213],[15.61233, 120.305579],
  [15.618112, 120.313969],[15.622737, 120.315267],[15.623631, 120.315919],

  //camiling part
  [15.630238, 120.305345],[15.642934, 120.316447],[15.647234, 120.324657],
  [15.647673, 120.330491],[15.649879, 120.335668],[15.65365, 120.341252],
  [15.65554, 120.347043],[15.662048, 120.356568],[15.665664, 120.35885],
  [15.668833, 120.357442],[15.671699, 120.358775],[15.673241, 120.357498],
  [15.674644, 120.356943],[15.679458, 120.356581],[15.679024, 120.360025],
  [15.678107, 120.360942],[15.677942, 120.362737],[15.679124, 120.36593],
  [15.680152, 120.3663],[15.681247, 120.369337],[15.682688, 120.370121],
  [15.683816, 120.368243],[15.685322, 120.366885],[15.686215, 120.367942],
  [15.686471, 120.373404],[15.68667, 120.374807],[15.689332, 120.375922],
  [15.693014, 120.375651],[15.694698, 120.379664],[15.699293, 120.38082],
  [15.6999, 120.380265],[15.700479, 120.380225],[15.700961, 120.380251],
  [15.701091, 120.380597],[15.701191, 120.380699],[15.701498, 120.380659],
  [15.701661, 120.381029],[15.701659, 120.381255],[15.701772, 120.381394],
  [15.702506, 120.381367],[15.702802, 120.38156],[15.703355, 120.38175],
  [15.703678, 120.381989],[15.703729, 120.382136],[15.703861, 120.382246],
  [15.70445, 120.382136],[15.704832, 120.382324],[15.70531, 120.38274],
  [15.705591, 120.382801],[15.705839, 120.382431],[15.706108, 120.382192],
  [15.706448, 120.382614],[15.706921, 120.381762],[15.707672, 120.381669],
  [15.707837, 120.382371],[15.712539, 120.384793],[15.713211, 120.388176],
  [15.714264, 120.39004],[15.724617, 120.392003],[15.72463, 120.392016],
  [15.728359, 120.393282],[15.735226, 120.393028],[15.73931, 120.395468],
  [15.740007, 120.394798],[15.754198, 120.399068],[15.758744, 120.406597],
  //sanbcle
  [15.763875, 120.393033]
],{
  color: 'black',
  fillColor: '#ADFF2F',
  fillOpacity: 0.10,
  dashArray: '3 , 4'

}).addTo(map);

var Cam = L.polygon([

//camiling part
[15.630238, 120.305345],[15.642934, 120.316447],[15.647234, 120.324657],
[15.647673, 120.330491],[15.649879, 120.335668],[15.65365, 120.341252],
[15.65554, 120.347043],[15.662048, 120.356568],[15.665664, 120.35885],
[15.668833, 120.357442],[15.671699, 120.358775],[15.673241, 120.357498],
[15.674644, 120.356943],[15.679458, 120.356581],[15.679024, 120.360025],
[15.678107, 120.360942],[15.677942, 120.362737],[15.679124, 120.36593],
[15.680152, 120.3663],[15.681247, 120.369337],[15.682688, 120.370121],
[15.683816, 120.368243],[15.685322, 120.366885],[15.686215, 120.367942],
[15.686471, 120.373404],[15.68667, 120.374807],[15.689332, 120.375922],
[15.693014, 120.375651],[15.694698, 120.379664],[15.699293, 120.38082],
[15.6999, 120.380265],[15.700479, 120.380225],[15.700961, 120.380251],
[15.701091, 120.380597],[15.701191, 120.380699],[15.701498, 120.380659],
[15.701661, 120.381029],[15.701659, 120.381255],[15.701772, 120.381394],
[15.702506, 120.381367],[15.702802, 120.38156],[15.703355, 120.38175],
[15.703678, 120.381989],[15.703729, 120.382136],[15.703861, 120.382246],
[15.70445, 120.382136],[15.704832, 120.382324],[15.70531, 120.38274],
[15.705591, 120.382801],[15.705839, 120.382431],[15.706108, 120.382192],
[15.706448, 120.382614],[15.706921, 120.381762],[15.707672, 120.381669],
[15.707837, 120.382371],[15.712539, 120.384793],[15.713211, 120.388176],
[15.714264, 120.39004],[15.724617, 120.392003],[15.72463, 120.392016],
[15.728359, 120.393282],[15.735226, 120.393028],[15.73931, 120.395468],
[15.740007, 120.394798],[15.754198, 120.399068],[15.758744, 120.406597],
[15.745574, 120.44385],[15.737057, 120.474535],[15.733828, 120.487278],
[15.732303, 120.48495],[15.72978, 120.481095],[15.727454, 120.488667],
[15.729534, 120.490126],[15.726495, 120.492567],[15.724189, 120.488973],
[15.722434, 120.489279],[15.719224, 120.493393],[15.714054, 120.491417],
[15.710567, 120.489397],[15.707097, 120.484386],[15.704945, 120.482739],
[15.705554, 120.48439],[15.7039, 120.484634],[15.701362, 120.482965],
[15.701362, 120.482241],[15.70073, 120.483005],[15.698269, 120.482267],
[15.695243, 120.477971],[15.691153, 120.475052],[15.687287, 120.475672],
[15.684051, 120.475087],[15.679615, 120.47189],[15.673794, 120.471922],
[15.671583, 120.470485],[15.668564, 120.470326],[15.665393, 120.471855],
[15.664706, 120.470383],[15.664827, 120.464029],[15.664223, 120.45937],
[15.666307, 120.455767],[15.664776, 120.453133],[15.665548, 120.451521],
[15.664306, 120.451073],[15.662051, 120.448544],[15.660832, 120.450395],
[15.65868, 120.450132],[15.657725, 120.448088],[15.658602, 120.444639],
[15.658296, 120.441678],[15.655328, 120.440551],[15.655937, 120.438467],
[15.65431, 120.437171],[15.646278, 120.437485],[15.644777, 120.435533],
[15.644759, 120.43266],[15.64104, 120.430128],[15.642926, 120.428508],
[15.642347, 120.427771],[15.640663, 120.427272],[15.640302, 120.425032],
[15.637233, 120.423922],[15.637161, 120.419963],[15.631326, 120.419539],
[15.631672, 120.417468],[15.6324, 120.410685],[15.626276, 120.403448],
[15.631724, 120.401871],[15.631016, 120.398532],[15.632801, 120.396724],
[15.63558, 120.394774],[15.64064, 120.398124],[15.643267, 120.396743],
[15.643396, 120.395319],[15.644197, 120.394825],[15.644814, 120.393202],
[15.647397, 120.392454],[15.64726, 120.391979],[15.646227, 120.390088],
[15.645191, 120.388583],[15.641539, 120.381371],[15.641198, 120.379509],
[15.640929, 120.379139],[15.639821, 120.378056],[15.6387, 120.377254],
[15.636698, 120.375049],[15.634653, 120.371589],[15.634054, 120.369524],
[15.633656, 120.369379],[15.633374, 120.367281],[15.634844, 120.367338],
[15.632051, 120.363583],[15.626785, 120.360147],[15.623321, 120.35611],
[15.621076, 120.35568],[15.62081, 120.35556],[15.620529, 120.354587],
[15.620503, 120.353648],[15.6185, 120.34986],[15.617984, 120.346076],
[15.620424, 120.338802],[15.622084, 120.338051],[15.62258, 120.337367],
[15.622789, 120.336339],[15.622856, 120.331986],[15.624081, 120.316724],
[15.623629, 120.315925]  

],{
color: 'black',
fillColor: '#ADFF2F',
fillOpacity: 0.10,
dashArray: '3 , 4'

}).addTo(map);
/*
var aja = new XMLHttpRequest();
    aja.open("GET", "<?= base_url() ?>PageController/mark", true);
    aja.send();
 
    aja.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);
            console.log(data);
            
            for(var a = 0; a < data.length; a++) {
                var id = data[a].id;
                var crops = data[a].crops;
                var hex = data[a].hex;
                var lat = data[a].lat;
                var lng = data[a].lng;
                
                var circle = L.circle([lat, lng], {
                color: hex,
                fillColor: hex,
                fillOpacity: 0.5,
                radius: 20 /////////////////////
              }).addTo(map);

              var imgUrl = '<?php echo base_url();?>upload/images/' + img;
            // Bind a popup with 'crops' and 'count' values
            circle.bindPopup("<table><tr><td>"+crops+"</td><td>" + hex + "</td></tr><tr><td>" + lat + "</td><td>" + lng + "</td></tr></table>", {
              className: 'custom-popup'
            });

            }
        }
    };
*/

var ajax = new XMLHttpRequest();
    ajax.open("GET", "<?= base_url() ?>PageController/sellermark", true);
    ajax.send();
 
    ajax.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);
            console.log(data);
            
            for(var a = 0; a < data.length; a++) {
                var count= data[a].count;
                var fname= data[a].fname;
                var lname= data[a].lname;
                var adds= data[a].adds;
                var crops = data[a].crops;
                var hex = data[a].hex;
                var lat = data[a].lat;
                var lng = data[a].lng;
                var img = data[a].img;
                var shop = data[a].shop;
                var plant = data[a].plant;
                var harvest = data[a].harvest;
                var price = [data].price;
                
                var circle = L.circle([lat, lng], {
                color: hex,
                fillColor: hex,
                fillOpacity: 0.5,
                radius: count * 50 /////////////////////
              }).addTo(map);
             
              var imgUrl = '<?php echo base_url();?>upload/images/' + img;
            // Bind a popup with 'crops' and 'count' values
            circle.bindPopup("<table></tr><tr><td><img src='"+imgUrl+"' width='150px' height ='100px'/></td><td><b>" + crops + "</td></tr><tr><td><b>Shop name:</b> "+ shop +"</td><td><b>Seller name:</b> "+ fname + lname +"</td></td></tr><tr><td>No. of Item sold: ("+ count +")</td><td>"+ adds +"</td></tr><tr><td>Planted at: "+ plant +"</td><td>Harvested on: "+ harvest +"</td></tr></table>", {
  className: 'custom-popup'

});

// Add a click event listener to each circle marker
circle.on('click', function(e) {
  // Get the popup content
  var popupContent = e.target.getPopup().getContent();
  
  // Split the content by the separator "<br>"
  var parts = popupContent.split("<br>");

  // Extract individual pieces of information
  var cropsInfo = parts[0];
  //var sellerInfo = parts[1];
  //var addressInfo = parts[2];
  //var countInfo = parts[3];

  // Display the information in separate HTML elements with appropriate IDs
  document.getElementById('crops-info').innerHTML = cropsInfo;
  document.getElementById('seller-info').innerHTML = sellerInfo;
  document.getElementById('address-info').innerHTML = addressInfo;
  document.getElementById('count-info').innerHTML = countInfo;
});
    }
  }
};
  


</script>
<script src="leaflet-heat.js"></script>
