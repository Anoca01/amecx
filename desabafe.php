<?php include_once "layout/header.php"; ?>

<link rel="stylesheet" href="assets/css/desabafo.css">
<body>
    <div class="bloco">
    <div class="container">
        <div class="inicio">
            <h1>Espaço de Desabafo</h1>
            <p>Compartilhe seus sentimentos.</p>
        </div>

        <main>
            <section id="desabafar">
                <h2>Desabafe Aqui</h2>
                <form id="form-desabafo">
                    <input type="text" placeholder="Título do desabafo" required />
                    <textarea placeholder="Escreva aqui seu desabafo..." required></textarea>
                    <button type="submit">Enviar</button>
                    <button type=""><a href="psicologos.php">Ver Psicologos</a></button>
                    <button type="">Ver Bate-Bapo</button>
                </form>
            </section>
        </main>
    </div>
    </div>
</body>
</html>
<?php include_once "layout/footer.php"; ?>


