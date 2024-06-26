import { BlitzElement, html, css, customElement } from '@lnear/blitz';
import { global } from '../global.js';
import '../components/body.js';

const kFormLabels: Array<string> = ['Name', 'Email', 'Subject'];

@customElement('app-contact')
export class AppContact extends BlitzElement {
  static styles = [
    global,
    css`      
      form {
        > a {
          text-align: start;
          width: 50%;
          margin: 0.5% 0;
          font-weight: 600;
        }
        flex-flow: column nowrap;
        align-items: center;
        justify-content: center;
        width: 100%;
        & div {
          width: 50%;
        }
        & button {
          width: 100%;
        padding: 1%;
          border: 2px solid var(--sec);
          color: #00b8ff;
          font-weight: 500;
        }
        & button:hover {
          background-color: transparent;
          border: 2px solid var(--blue);
        }
        & button:active {
          background-color: var(--blue);
          border: 2px solid var(--blue);
          color: #fff;
        }
      }
    `,
  ];
  render() {
    return html`
      <app-body>
        <section>
          <form class="contactForm" action="/submit_contact" method="post">
            <a class="socialList" href="mailto:hi@lnear.dev">hi@lnear.dev</a>
            ${kFormLabels.map((item) => {
      return html`
                <div>
                  <input name="${item}" placeholder="${item}" required />
                </div>
              `;
    })}
            <div>
              <textarea name="message" placeholder="Message" required>
              </textarea>
            </div>
            <div>
              <button class="sendButton">Send</button>
            </div>
          </form>
        </section>
      </app-body>
    `;
  }
}

