fetch("spotify.php").then(onResponse).then(onJson);

let token;

const ricerca = document.querySelector('.spotify');
ricerca.addEventListener('submit', Cerca);

function onResponse(response) {
    return response.json();
  }
  
function onJson(json) {
  const library = document.querySelector('#Box');
  library.innerHTML = '';
  
  const risultati = json.albums.items;
  let num_risultati = risultati.length;
 
  if(num_risultati > 3) num_risultati = 3;
  
  for(let i=0; i<num_risultati; i++) {
    const risultato = risultati[i]
    const title = risultato.name;
    const image = risultato.images[0].url;
    const link = risultato.url;
    
    const canzoni = document.createElement('div');
    canzoni.classList.add('box');
    const img = document.createElement('img');
    img.src = image;
    const brano= document.createElement('span');
    brano.textContent = title;
    const url = document.createElement('link');
    url.textContent = 'Leggi tutto';
    url.href = link;
   
    canzoni.appendChild(img);
    canzoni.appendChild(brano);
    canzoni.appendChild(link);
    
    library.appendChild(canzoni);
  }
} 

function Cerca(event){
  event.preventDefault();
  const tracce = document.querySelector('#track');
  const tracce_value = encodeURIComponent(tracce.value);

  fetch("spotify.php?q=" + tracce_value).then(onResponse).then(onJson);

 /* fetch("https://api.spotify.com/v1/search?type=album&q=" + tracce_value,
    {
      headers:
      {
        'Authorization': 'Bearer ' + token
      }
    }
  ).then(onResponse).then(onJson);
*/

}
  
function onTokenJson(json){
  token = json.access_token;
}

function onTokenResponse(response){
  return response.json();
}
