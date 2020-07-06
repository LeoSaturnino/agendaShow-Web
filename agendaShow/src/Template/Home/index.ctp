<!DOCTYPE html>
<html>
<title>Agenda Show</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
    body,
    html {
        height: 100%;
        margin: 0px;
    }
    
    body {
        font-family: "BEBAS NEUE", sans-serif;
    }
    
    h1 {
        color: #FFFFFF;
        font-size: 80px;
    }
    
    p {
        color: #FFFFFF;
        font-size: 50px;
        padding-top: 10px;
        padding-right: 20%;
        letter-spacing: 2px;
    }
    
    .fundo {
        background-image: url('/img/fundo_principal.jpeg');
        min-height: 100%;
        background-position: center;
        background-size: cover;
        margin-top: 0px;
        opacity: 90%;
    }
    
    .estrutura {
        padding-top: 70px;
        padding-left: 5%;
    }
    
    .button {
        display: inline-block;
        padding: 5px 5px;
        font-size: 40PX;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: #000;
        background-color: #FFF;
        border: none;
        border-radius: 15px;
        width: 300px;
        font: bold;
    }
    
    .button:hover {
        background-color: #81e485;
    }
    
    .button:active {
        background-color: #81e485;
        transform: translateY(4px);
    }
    
    .cadastrar {
        font-size: 22PX;
        text-align: center;
        color: #FFF;
        width: 300px;
        font: bold;
        margin-top: 25px;
    }
    a{
        text-decoration: none;
        color: white;
    }
    .link{
        color:black;
    }
</style>

<body>

    <div class="fundo">
        <div class="estrutura">
            <h1>AGENDA SHOW</h1>
            <p>
                AQUI VOCÊ ENCONTRA O QUE DESEJA ANTES DE SAIR DE CASA
            </p>
            <button class="button">
            <a class="link" href="/users/login">ENTRAR</a>
            </button>
            <div class="cadastrar">
                <a>
                    NÃO POSSUI CADASTRO?
                </a>
            </div>
            <div class="cadastrar">
                <a href="/users/add">
                    CADASTRAR
                </a>
            </div>
        </div>

    </div>


</body>

</html>