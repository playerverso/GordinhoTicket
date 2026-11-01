<?php
$menucomp = <<<HTML
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha384-DyZ88mC6Up2uqS1m1dFZ8iN1X/KsE6qsF5xspAKz5M9K/m49j0Z8cP4D5pbL9G0s" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    
<style>


.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    background-color: #ffffff;
    border-bottom: 2px solid #007BFF;
}

.logo img {
    margin-left: 40px;
    width: 220px;
    height: 60px;
}

/* DESKTOP MENU */
.desktop-menu {
    display: flex;
    align-items: center;
    gap: 15px;
}

.panel-btn {
    background-color: #007BFF;
    color: white;
    border: none;
    padding: 8px 15px;
    border-radius: 4px;
    cursor: pointer;
}

.panel-btn:hover {
    background-color: #0056b3;
}

/* DROPDOWN PERFIL */
.profile-dropdown {
    margin-right: 70px;
    position: relative;
    cursor: pointer;
}

.profile-icon i {
    font-size: 32px;
    color: #007BFF;
}

.profile-menu {
    position: absolute;
    right: 0;
    margin-left: 20px;
    top: 50px;
    background: #fff;
    border: 1px solid #ddd;
    width: 180px;
    border-radius: 8px;
    display: none;
    flex-direction: column;
    box-shadow: 0 3px 8px rgba(0, 0, 0, 0.15);
    z-index: 1000;
}

.profile-menu a {
    padding: 12px;
    display: block;
    text-decoration: none;
    color: #007BFF;
    font-weight: bold;
}

.profile-menu a:hover {
    background: #f5f5f5;
}

.profile-dropdown.open .profile-menu {
    display: flex;
}

/* MOBILE MENU DEFAULT: HIDDEN IN DESKTOP */
.menu-toggle {
    display: none;
    cursor: pointer;
}

.menu-toggle span {
    background-color: #007BFF;
    height: 3px;
    width: 30px;
    margin: 4px 0;
}

#menuzin {
    font-size: 40px;
    font-weight: bold;
    color: #007BFF;
}

/* MOBILE MENU LIST */
.menu-links {
    display: none;
}

/* RESPONSIVO */
@media (max-width: 768px) {

    /* ESCONDE MENU DESKTOP */
    .desktop-menu {
        display: none;
    }

    /* MOSTRA BOTÃO DO MENU */
    .menu-toggle {
        display: flex;
        flex-direction: column;
    }

    /* MENU MOBILE */
    .menu-links {
        z-index: 9999;
        background-color: #ffffff;
        position: absolute;
        flex-direction: column;
        top: 85px;
        left: 50%;
        transform: translateX(-50%) scaleY(0); /* começa fechado */
        transform-origin: top;
        align-items: center;
        width: 400px;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 0;
        opacity: 0;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        transition: transform 0.4s ease-in-out,
                    opacity 0.4s ease-in-out,
                    padding 0.4s ease-in-out;
        display: flex;
    }

           .menu-links.open {
        transform: translateX(-50%) scaleY(1);
        opacity: 1;
        padding: 10px 0;
    }

    .menu-links a,
    .menu-links button {
        padding: 15px 25px;
        width: 90%;
        text-align: left;
        padding-left: 20%;
        background: none;
        border: none;
        color: #007BFF;
        font-weight: bold;
        cursor: pointer;
        text-decoration: none;
    }

    /* botões do mobile iguais aos originais */
    .menu-links button.panel-btn {
        background-color: #007BFF;
        color: #fff;
        border-radius: 4px;
        margin: 5px 0;
        text-align: center;
        padding: 12px 0;
    }
}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<nav class="navbar">
    <a href="index.php">
        <!-- <div class="logo"> -->
            <!-- <img src="img/logo-gordinho-afiliados1.png" alt="Logo"> -->
        <!-- </div> -->
    </a>

    <!-- DESKTOP MENU -->
    <div class="desktop-menu">
       <a href="meus-eventos.php"> <button class="panel-btn">MEUS EVENTOS</button></a>
        <button class="panel-btn"><i class="bi bi-file-text"></i> CRIAR EVENTO</button>

        <!-- PERFIL DESKTOP -->
        <div class="profile-dropdown" id="profileDropdown">
            <div class="profile-icon">
                <i class="bi bi-person-circle"></i>
            </div>

            <div class="profile-menu" id="profileMenu">
                <a href="#"><i class="bi bi-people"></i> Minha Conta</a>
                <a href="#"><i class="bi bi-box-arrow-right"></i> Sair</a>
            </div>
        </div>
    </div>

    <!-- MOBILE MENU BUTTON -->
    <div class="menu-toggle" id="menu-toggle">
        <i class="bi bi-person-circle" id="menuzin"></i>
    </div>

    <!-- MOBILE MENU LINKS -->
    <div class="menu-links" id="menu-links">
        <button class="panel-btn">MEUS EVENTOS</button>
        <button class="panel-btn"><i class="bi bi-file-text"></i> CRIAR EVENTO</button>
        <a href="#"><i class="bi bi-people"></i> Minha Conta</a>
        <a href="#"><i class="bi bi-box-arrow-right"></i> Sair</a>
    </div>
</nav>

<script>
/* MOBILE MENU */
const menuToggle = document.getElementById('menu-toggle');
const menuLinks = document.getElementById('menu-links');

menuToggle.addEventListener('click', () => {
    menuLinks.classList.toggle('open');
});

/* PROFILE DROPDOWN DESKTOP */
const profileDropdown = document.getElementById('profileDropdown');
profileDropdown.addEventListener('click', () => {
    profileDropdown.classList.toggle('open');
});
</script>




HTML;

//echo $sidebar;
?>