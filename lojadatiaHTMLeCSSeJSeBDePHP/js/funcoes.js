function exibir_categoria(categoria) 
{

    let elementos = document.getElementsByClassName("boxProduto"); /* produto*/
    console.log(elementos);
    for (var i = 0; i < elementos.length; i++) {
        console.log(elementos[i].id);
        if (categoria == elementos[i].id)
            elementos[i].style = "display:flex";
        else
            elementos[i].style = "display:none";

    }

}

let exibir_todos = () => {
    let elementos = document.getElementsByClassName("boxProduto");
    for (var i = 0; i < elementos.length; i++) {
        elementos[i].style = "display:flex";
      }
    };


    let destaque = (imagem) =>
    {
        console.log(imagem);
        if (imagem.width == 140)
        imagem.width = 220;
        else
        imagem.width = 140;
    }