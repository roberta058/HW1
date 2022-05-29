
function aggiungiRecensione(event){
    event.preventDefault();
    const rece = document.querySelector("#addComment").value;    
    console.log('Recensione' + rece);   
    fetch("recensioni.php?recensione=" + rece).then(onResponse).then(onJsonAddRece);
}

function onJsonAddRece(json){
    console.log('Ok');
    console.log(json);
}
function onResponse(response){
    if (!response.ok) {return null};
    return response.json();
}



const recens = document.querySelector(".recensioni");
recens=addEventListener('Invia', aggiungiRecensione);

