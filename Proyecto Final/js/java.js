import {MY_API_KEY} from './config.js'

fetch("https://exchangerate-api.p.rapidapi.com/rapid/latest/USD", {
	"method": "GET",
	"headers": {
		"x-rapidapi-host": "exchangerate-api.p.rapidapi.com",
		"x-rapidapi-key": "MY_API_KEY"
	}
})
.then(response => response.json())
.then(response => {
	console.log(response);
	console.log(response.content)
})
.catch(err => {
	console.error(err);
});