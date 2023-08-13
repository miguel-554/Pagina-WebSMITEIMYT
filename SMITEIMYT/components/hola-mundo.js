import { LitElement, html, css } from 'lit';

export class HolaMundo extends LitElement {
    static styles = [
        css`
            :host {
                display: block;
            }
        `
    ];

    static get properties() {
        return {
            name: { type: String },
        };
    }

    constructor(){
        super();
        this.name = "Miguel";
    }

    render() {
        return html`
        <h1>Hola mundo para ${this.name}</h1>
        <a href="./ejemplo-component.js">ir a componente 2</a>
        <p>Hola soy un parrafo</p>
        `;
    }
}
customElements.define('hola-mundo', HolaMundo);
