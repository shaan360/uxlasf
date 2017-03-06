
	window.onload = function(){
		var ctx = document.getElementById("canvas").getContext("2d");
		window.myLine = new Chart(ctx).Line(lineChartData, {
			responsive: true
		});
                
                var ctx2 = document.getElementById("canvas2").getContext("2d");
		window.myLine = new Chart(ctx2).Bar(BarChartData, {
			responsive: true
		});

	}
        

        