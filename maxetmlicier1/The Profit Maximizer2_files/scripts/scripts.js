const button = document.getElementById('selectedCountryList');
const list = document.getElementById('country-listbox');
const countriesChilds = list.children;

button.addEventListener('click', event => {
	if (list.classList.contains("hide")) {
  		list.classList.remove("hide")
	} else {
		list.classList.add("hide")
	}
});

for (var i = countriesChilds.length - 1; i >= 0; i--) {
	countriesChilds[i].addEventListener('click', function(){
		var countryCode = this.dataset.dialCode;
		var flag = this.dataset.countryCode;
		list.classList.add("hide");
		var selectChilds = button.children;
		selectChilds[0].className = "iti-flag " + flag
		selectChilds[1].innerHTML = "+" + countryCode
	});
}


