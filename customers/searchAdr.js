let ul;
const search = document.getElementById('Floc');
const search2 = document.getElementById('Tloc');
//console.log(search);


const searchStates = async searchText => {
    const res = await fetch('https://mrgrav.github.io/SptsPT23_Ind_Loc/indianArea.json');
    const states = await res.json()

    //console.log(states)
    let matches = states.filter(state => {
        const regx = new RegExp(`^${searchText}`, 'gi');
        return state.Area.match(regx) || state.DISTRICT.match(regx);
    })

    if (searchText.length === 0){
        matches = [];
        ul.innerHTML = '';
        //ul2.innerHTML = '';
    }
    
	//console.log(matches);
    outputHtml(matches);
};
	
search.addEventListener('input', ()=> {
	ul = document.getElementById('FlocList');
		if (search.valure === ''){
			console.log(search.value);
		}else{
			searchStates(search.value);
		}
	});
	
search2.addEventListener('input', ()=> {
	ul = document.getElementById('TlocList');
	console.log(search2.value);
		if (search.valure === ''){
			console.log(search2.value);
		}else{
			searchStates(search2.value);
		}
	});


/*function onType(){
	let ul = document.getElementById('FlocList');
	searchStates(search.value);
}
function onType2(){
	let ul = document.getElementById('TlocList');
	searchStates(search2.value);
}*/


//output
const outputHtml = matches => {
    if (matches.length > 0){
        const html = matches.map(match => `
			<option value="${match.Area}, ${match.DISTRICT}, ${match.STATE}">
		`).join('');
        ul.innerHTML = html;
        //ul2.innerHTML = html;
        //console.log(htmlString);
    }
}
