<nav class="fixed-top container">
    <div>
        <a class="nav-logo" href=" {{ route('home') }} ">
            <img src="/images/esteve-logo.svg" height="40" alt="esteve_logo"/>
        </a>
    </div>
    <ul>
        <li>
            <a class="link-hover" href=" {{ route('education') }} ">
                <img class="icon-nav" src="/images/icono-education.svg" height="18" alt="education"/>EDUCATION</a>
        </li>
    </ul>
</nav>

<style>
    nav {
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        padding: 0 1em;
        background: white;
        box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
    }

    .fixed-top {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 10;
    }

    .nav-logo {
        display: inline-block;
        margin-right: 1em;
        padding: 6px 0 2px 0;
    }

    nav ul {
        display: flex;
        width: auto;
        margin-left: auto;
        list-style: none;
    }

    nav li {
        margin: 0 1em;
    }

    nav li a {
        color: black;
        text-decoration: none;
    }

    .icon-nav {
        margin-right: 5px;
     }

    .link-hover {
        display: flex;
    }

    .link-hover:hover {
        opacity: 0.6;
    }
</style>
