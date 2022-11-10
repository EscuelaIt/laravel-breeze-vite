import { LitElement, html, css } from 'lit';
import '@dile/dile-modal/dile-modal';
import eitLogo from '../../images/eit-logo.png';

export class EitModal extends LitElement {
    static styles = [
        css`
            :host {
                display: block;
            }
            header {
                margin: 0.4 0 0.7rem;
                text-align: center;
            }
            header img {
                max-width: 80%;
            }
        `
    ];

    render() {
        return html`
            <dile-modal>
                <header>
                    <img src="${eitLogo}" />
                </header>
                <slot></slot>
            </dile-modal>

        `;
    }

    open() {
        this.shadowRoot.querySelector('dile-modal').open();
    }
}
customElements.define('eit-modal', EitModal);
