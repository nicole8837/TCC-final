
<style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700display=swap');
        .cadastro{
            padding: 20px 25px;
            color: #fff;
            border: none;
            cursor: pointer; 
           

        }
        body{
            font-family:'Poppins',sans-serif; 
            background-image: linear-gradient(#fe9611, #ff5c00);
        }

        h1{
            color: #fff; 
            align-items: center;
            justify-content: center;
            display: flex;
            font-weight: 300;
            cursor: pointer;
        }
        h2{
            color: #fff; 
            align-items: center;
            justify-content: center;
            display: flex;
            font-weight: 300;
            cursor: pointer;
            
        }

        button{
            color: #fff;
            box-sizing: border-box;
            width: 100%;
            height: 70px;
            align-items: center;
            justify-content: center;
            font-size: 2.0rem;
            background-color: #2f9536;
               
        }
        footer{
            color: #fff;
            
        }
    </style> 

<div clas="funcao">
    <h1>Boas vindos</h1>
    <h2>Você está na página privada para ADM. Seja bem vindo! </h2>
<form action="cadastro.php" >
    <button  type="submit" clas="cadastro"><strong>NOVO CADASTRO</strong></button>
</form>
<form action="verfuncionario.php">
    <button type="submit" clas="verfuncionario"><strong>VER FUNCIONÁRIO CADASTRADO</strong></button>
</form>
</div>
<footer> <hr> <p>AVISO! esta pagina é reservarda somente para administrador, Não disponibilizar para terceiros. Agradeço</p></footer>