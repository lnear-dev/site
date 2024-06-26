import { global } from '../global.js';
import './footer.js';
import './header.js';
import { BlitzElement, html, css } from '@lnear/blitz';
import { customElement } from '@lnear/blitz/decorators';
@customElement({
  name: 'app-pre',
  template: html`
  
<div class="container">
  <div class="header">
    <span>php</span>
    <div class="controls">
      <span data-state="closed">
        <button class="copy-button">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" class="icon-sm">
            <path fill="currentColor" fill-rule="evenodd" d="M7 5a3 3 0 0 1 3-3h9a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3h-2v2a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3v-9a3 3 0 0 1 3-3h2zm2 2h5a3 3 0 0 1 3 3v5h2a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1h-9a1 1 0 0 0-1 1zM5 9a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h9a1 1 0 0 0 1-1v-9a1 1 0 0 0-1-1z" clip-rule="evenodd"></path>
          </svg>
          Copy code
        </button>
      </span>
    </div>
  </div>
  <div class="content" dir="ltr">
   <slot></slot>
  </div>
</div>

`})
export class AppPre extends BlitzElement {
  static styles = [global, css`
    :host {
        background-color: #0b0c0d; /* bg-gray-950 */
        border-radius: 8px; /* rounded-md */
        border: 0.5px solid #383a3f; /* border-token-border-medium */
        color: #b0b1b3; /* text-token-text-secondary */
      }
      
      .header {
        display: flex;
        align-items: center;
        position: relative;
        color: #b0b1b3; /* text-token-text-secondary */
        background-color: #1c1e21; /* bg-token-main-surface-secondary */
        padding: 8px 16px; /* px-4 py-2 */
        font-size: 12px; /* text-xs */
        font-family: sans-serif; /* font-sans */
        justify-content: space-between;
        border-top-left-radius: 8px; /* rounded-t-md */
        border-top-right-radius: 8px; /* rounded-t-md */
      }
      
      .controls {
        display: flex;
        align-items: center;
      }
      
      .copy-button {
        display: flex;
        gap: 4px; /* gap-1 */
        align-items: center;
        background: none;
        border: none;
        color: inherit;
        cursor: pointer;
      }
      
      .icon-sm {
        width: 24px;
        height: 24px;
        fill: currentColor;
      }
      
      .content {
        overflow-y: auto;
        padding: 16px; /* p-4 */
        text-align: left;
        direction: ltr;
      }
      
      .php-code {
        white-space: pre; /* !whitespace-pre */
        font-family: monospace; /* hljs */
      }
      
    `];
}
