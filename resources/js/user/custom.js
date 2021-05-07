function downloadArchive(url, nome) {
    var el = document.createElement("a");
        el.download = nome; //Define o nome
        el.href = url; //Define a url
        el.target = "_blank"; //Força abrir em uma nova janela
        el.className = "hide-link"; //Adiciona uma classe css pra ocultar

    document.body.appendChild(el);

    if (el.fireEvent) {
        el.fireEvent("onclick");//Simula o click pra navegadores com suporte ao fireEvent
    } else {
        //Simula o click
        var evObj = document.createEvent("MouseEvents");
        evObj.initEvent("click", true, false);
        el.dispatchEvent(evObj);
    }
    //Remove o link da página
    setTimeout(function() {
        document.body.removeChild(el);
    }, 100);
}