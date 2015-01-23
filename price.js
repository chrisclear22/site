<script type="text/javascript">
"use strict";

document.getElementById('book').addEventListener('submit', estimateTotal);

function estimateTotal(event) {
	event.preventDefault();

	var adultprice = 0;
	if (adult === '1') {
		adultprice = 0; 
	} else if (state === "2"){
		adultprice = 350
	} else if (state === "3"){
		adultprice = 700
	} else if (state === "4"){
		adultprice = 1050
	} else if (state === "5"){
		adultprice = 1400
	} else if (state === "5"){
		adultprice = 1750
	}
	var childprice = 0;
	if (child === '1') {
		adultprice = 250; 
	} else if (state === "2"){
		adultprice = 500
	} else if (state === "3"){
		adultprice = 750
	} else if (state === "4"){
		adultprice = 1000
	} else if (state === "5"){
		adultprice = 1250
	} 	
		
	}
	
	var estimate = "$" + (adultprice + childprice).toFixed(2);
	document.getElementById('cost').value = estimate;
}
</script>