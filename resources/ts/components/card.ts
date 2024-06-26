import { global } from "../global.js";
import { BlitzElement, html, css, CSSResultGroup } from "@lnear/blitz";
import { prop } from "@lnear/blitz/decorators";
import { repeat } from "@lnear/blitz/directives";

export type CardEntry = {
  img: string;
  url: string;
  name?: string;
};

export abstract class BaseCard<T extends Partial<CardEntry> = CardEntry> extends BlitzElement {
  static styles = [
    global,
    css`
    
`,
  ] as CSSResultGroup;
  @prop({ type: String }) title = "Tabs";
  @prop({ type: Array }) data: T[] = [];
  render() {
    return html`
            <fieldset>
                <legend><h2>${this.title}</h2></legend>
                <ul>
                    ${repeat(
      this.data as CardEntry[],
      (x: CardEntry) => html`
                            <li>
                                <a target="_blank" href="${x.url}">
                                    <img src="${x.img}" />
                                    <h2>${x.name || ""}</h2>
                                </a>
                            </li>
                        `
    )}
                </ul>
            </fieldset>
        `;
  }
}
