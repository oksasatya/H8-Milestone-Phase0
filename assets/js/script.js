let elementsWithBackground = document.querySelectorAll('[data-background]');
elementsWithBackground.forEach(function (element) {
	element.style['background-image'] = 'url(' + element.getAttribute('data-background') + ')';
});


let idr = document.getElementById("idr")
let aed =document.getElementById("aed")
let result = document.getElementById("result")
const button = document.getElementById("convert")
calculation = (value,rate) => {
	return value * rate
}
exchangeRate = {
	idrToAed : 0.000224791 //nilai mata uang 1 rupiah
}
total = () => {
	if(idr.value){
		const idrValue = parseFloat(idr.value)
		const total = calculation(idrValue,exchangeRate.idrToAed)
		result.innerHTML = `Hasil Dari Konversi Aed Ke Rupiah Adalah :  ${total.toFixed(2)} AED `;
	}
}