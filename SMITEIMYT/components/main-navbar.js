import { LitElement, html, css } from 'lit';

export class MainNavbar extends LitElement {
    static styles = [
        css`
        :host {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .nav{
            background-color: #293241;
            height: 80px;
            color: #fff;
        }
        
        .nav__container{
            display: flex;
            height: 100%;
            width: 90%;
            margin: 0 auto;
            justify-content: space-between;
            align-items: center;
        }
        
        .nav__logo{
            font-size: 1.7em;
            font-weight: 900;
        }
        
        .nav__menu{
            display: grid;
            grid-auto-flow: column;
            gap: 2.5em;
        }
        
        .nav__item{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: #fff;
            text-decoration: none;
        }
        
        .nav__item:hover{
            border-bottom: 2px solid #fff;
            padding-bottom: 5px;
            text-decoration: none;
            color: #fff;
        }
        
        .nav__label, .nav__input{
            display: none;
        }
        @media (max-width: 700px){
            .nav__logo{
                font-size: 1em;
                font-weight: 900;
            }
        
            .nav__label{
                display: block;
                cursor: pointer;
            }
        
            .nav__menu{
                position: fixed;
                top: 80px;
                bottom: 0;
                background: #293241;
                width: 100%;
                height: 60%;
                left: 0;
                display: flex;
                justify-content: space-evenly;
                flex-direction: column;
                align-items: center;
                clip-path: circle(0 at center);
                transition: clip-path 1s ease-in-out;
                z-index: 100;
            }
        
            .nav__input:checked + .nav__menu{
               clip-path: circle(100% at center);
            }
        }
        `
    ];

    render() {
        return html`
        <nav class="nav">
        <div class="nav__container">
            <h1 class="nav__logo">SMITEIMYT</h1>
            <label for="menu" class="nav__label">
                <img src="../assets/menu.svg" alt="icono de menu" class="nav__img">
            </label>
            <input type="checkbox" id="menu" class="nav__input">

            <div class="nav__menu">
            <a href="../index.html" class="nav__item">Principal</a>
            <a href="../pages/miembros.html" class="nav__item">Mesa Directiva</a>
            <a href="../pages/conference.html" class="nav__item">Conferencias y Eventos</a>    
            <a href="../pages/membresia.html" class="nav__item">Membresia</a>
            <a href="../pages/pagosYdonaciones.html" class="nav__item">Pagos y Donaciones</a>
            <a href="../pages/anuncios.html" class="nav__item">Revista</a>
            <a href="../pages/acceso.html" class="nav__item">Acceder</a>
                </ul>
            </div>
        </div>
    </nav>
        `;
    }
}
customElements.define('main-navbar', MainNavbar);
