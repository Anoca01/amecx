<?php include_once "layout/header.php"; ?>
<link rel="stylesheet" href="assets/css/index.css">
<body>
    <div class="container">
        <div class="content">
            <div class="text-content">
                <h1 id="saude">Mantenha sua <span class="saudemental">Saúde Mental</span></h1>
                <p class="texto">A Amecx é uma startup que busca ajudar sobre saúde emocional e reunir pessoas anonimamente.</p>
                <button class="button2" onclick="scrollDown()">Saiba mais</button>
            </div>
            <div class="image-background">
                <div class="circle-background"></div> <!-- Círculo grande -->
                <img class="linha" src="assets/img/linha.png" alt="linha" width="500">
            </div>
        </div>
    </div>

    <div class="container3">
        <h1 id="força">Força & <br> Conforto</h1>
        <h4 id="pessoas">
        A saúde mental é um aspecto essencial do bem-estar geral. Em nossa jornada, todos enfrentamos desafios que podem impactar nossa vida cotidiana. Aqui, oferecemos um espaço seguro e acolhedor para discutir suas preocupações e buscar orientação.
        <br>
        <br>
        Buscar apoio psicológico é um passo importante para entender e gerenciar emoções, melhorar relacionamentos e desenvolver estratégias para lidar com dificuldades. Não há problema em pedir ajuda; isso demonstra força e autocuidado.
        <br>
        <br>
        Lembre-se: Você não está sozinho(a). A cada passo que você dá em direção ao bem-estar, está investindo em uma vida mais equilibrada e satisfatória.
        <br>
        <br>
        Explore nossos recursos e saiba que estamos aqui para apoiar sua jornada em direção à saúde mental.
    </h4>
    </div>
    <div class="container4">
    <h1 id="equipe">Nossa Equipe de Desenvolvedores</h1>
    <p class="texto-equipe">
        Conheça a equipe dedicada por trás da Amecx. Somos um grupo apaixonado por saúde mental e tecnologia, 
        comprometidos em criar um espaço acolhedor e seguro. Cada membro traz suas habilidades e experiências 
        únicas para ajudar a fazer a diferença na vida das pessoas.
    </p>
    <div class="equipe-grid">
        <div class="equipe-card">
            <img src="assets/img/ana.jpeg" alt="Membro da equipe 1" class="equipe-img">
            <h4>Ana Clara</h4>
            <p>Desenvolvedora Front-end.</p>
        </div>
        <div class="equipe-card">
            <img src="assets/img/erika.jpeg" alt="Membro da equipe 2" class="equipe-img">
            <h4>Erika</h4>
            <p>Desenvolvedora back-end.</p>
        </div>
        <div class="equipe-card">
            <img src="assets/img/gustavo.jpeg" alt="Membro da equipe 3" class="equipe-img">
            <h4>Gustavo</h4>
            <p>Webdesigner</p>
        </div>
        <div class="equipe-card">
            <img src="assets/img/maria.jpeg" alt="Membro da equipe 4" class="equipe-img">
            <h4>Maria Eduarda</h4>
            <p>Webdesigner</p>
        </div>
    </div>
</div>

    <script>
        function scrollDown() {
            var scrollAmount = 620; // ajuste esse valor conforme necessário
            window.scrollBy({
                top: scrollAmount,
                left: 0,
                behavior: 'smooth'
            });
        }
    </script>
</body>
</html>

<?php include_once "layout/footer.php"; ?>
