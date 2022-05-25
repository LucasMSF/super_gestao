<!DOCTYPE html>
<html lang="ptbr">
<head>
    <title>Super Gestao - Contato</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        
        * {
            font-family: 'Poppins', sans-serif;;
        }
    
        h1 {
            background-color: dodgerblue;
            padding: 18px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div>
        <h1>{{ $user['name'] }}, obrigado por entrar em contato conosco!</h1>
        <p>Estaremos analisando sua mensagem e te retornaremos em breve.</p>
        <p>Email deixado para contato: {{ $user['email'] }}</p>
        <p>Telefone deixado para contato: {{ $user['tel'] }}</p>
        <br>
        <br>
        <br>
        <p>Att, Lucas Mathias | CEO - Super Gestao</p>
    </div>
</body>
</html>