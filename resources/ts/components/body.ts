import { global } from '../global.js';
import './footer.js';
import './header.js';
import { BlitzElement, html } from '@lnear/blitz';
import { customElement } from '@lnear/blitz/decorators';
@customElement({
  name: 'app-body',
  template: html`
  <app-header></app-header>
  <main><slot></slot></main>
  <app-footer></app-footer>
`})
export class AppBody extends BlitzElement {
  static styles = [global];
}

