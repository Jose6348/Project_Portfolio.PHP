<?php
// Inclui o arquivo server.php
include('includes/server.php');

// Inclui o cabeçalho
include('includes/header.php'); 
?>

<section id="home" class="section">
    <div class="container">
        <h1>Bem-vindo ao Meu Portfólio</h1>
        <p>Sou um desenvolvedor web apaixonado por criar soluções inovadoras.</p>
    </div>
</section>

<section id="skills" class="section">
    <div class="container">
        <h2>Habilidades</h2>
        <ul>
            <li>PHP</li>
            <li>HTML</li>
            <li>CSS</li>
            <li>JavaScript</li>
            <li>MySQL</li>
            <li>Git</li>
        </ul>
    </div>
</section>

<section id="experience" class="section">
    <div class="container">
        <h2>Experiência de Trabalho</h2>
        <div class="job">
            <h3>Desenvolvedor Web - Empresa XYZ</h3>
            <p>Jan 2020 - Presente</p>
            <p>Trabalhei em diversos projetos web utilizando tecnologias como PHP, JavaScript e MySQL.</p>
        </div>
        <div class="job">
            <h3>Estagiário em Desenvolvimento - Empresa ABC</h3>
            <p>Jan 2018 - Dez 2019</p>
            <p>Auxiliei no desenvolvimento de aplicações web e na manutenção de sistemas existentes.</p>
        </div>
    </div>
</section>

<section id="gallery" class="section">
    <div class="container">
        <h2>Galeria de Projetos</h2>
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="images/projeto1.jpg" alt="Projeto 1">
                <p>Projeto 1</p>
            </div>
            <div class="gallery-item">
                <img src="images/projeto2.jpg" alt="Projeto 2">
                <p>Projeto 2</p>
            </div>
            <div class="gallery-item">
                <img src="images/projeto3.jpg" alt="Projeto 3">
                <p>Projeto 3</p>
            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>