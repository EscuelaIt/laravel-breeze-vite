import { LitElement, html, css } from 'lit';

export class EitFoo extends LitElement {
    static styles = [
        css`
            :host {
                display: block;
            }
            p {
                padding: 1rem;
                background-color: red;
                color: #fff;
            }
        `
    ];

    render() {
        return html`
            <p>Foo!!!</p>
        `;
    }
}
customElements.define('eit-foo', EitFoo);
