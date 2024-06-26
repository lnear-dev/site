import { css, customElement } from "@lnear/blitz";
import { BaseCard } from "../../components/card.js";
import { projects } from "@/data/index.js";
@customElement("posts-card")
export class PostsCard extends BaseCard {
  static styles = [
    BaseCard.styles,
    css`
    :host {
        justify-content: start;
        align-items: start;
        width: 40%;
    }

    fieldset {
      border: 2px solid var(--sec, black);
      color: var(--blue);
      & img { width: 100%; }
      & a h2 { color: var(--blue); }
      & ul li { width: 45%; padding: 1%; }
      & legend {
        justify-content: center;
        text-align: center;
        width: 35%;
        padding: 0;
        border: 6px solid var(--blue);
      }
    }
    @media (max-width: 768px) { :host { width: 100%; } }
  `,
  ];

  constructor() {
    super();
    this.data = projects;
  }
}
