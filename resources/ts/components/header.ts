import { global } from '../global.js';
import { menu } from '../data/index.js';
import { BlitzElement, css, html } from '@lnear/blitz';
import { customElement } from '@lnear/blitz/decorators';

@customElement('app-header')
export class AppHeader extends BlitzElement {
  static styles = [
    global,
    css`
      /* tete */
     
    `,
  ];
  render() {
    return html`
      <header>
        <nav>
          <a href="/" class="logoLink">
            <img class="petit" src="/assets/brand-kit/cl_LNE.svg" />
          </a>

          <ul>
            ${menu.header.map(
      (item) =>
        html`
                  <li>
                    <a
                      title="nav"
                      href="${item.link}"
                      ?download=${item.title === '/cv'}
                    >
                      ${item.title}
                    </a>
                  </li>
                `
    )}
          </ul>
        </nav>
      </header>
    `;
  }
}

