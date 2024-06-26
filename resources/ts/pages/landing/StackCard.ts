import { css, customElement } from "@lnear/blitz";
import { BaseCard } from "../../components/card.js";
import { workflow } from "@/data/index.js";
@customElement("stack-card")
export class StackCard extends BaseCard {
    static styles = [
        BaseCard.styles,
        css`
    :host {
        justify-content: center;
        align-items: center;
        width: 75%;
    }

    fieldset {
        border: 2px solid var(--sec, black);
        text-align: center;
        margin: 5% 0;
        & h2 { color: var(--blue); }
        & img { width: 30%; }
        & ul li { width: 25%; padding: 1%; }
        & legend {
            justify-content: center;
            background-color: transparent;
            border: none;
            width: 20%;
        }
    }

    @media (max-width: 768px) { :host { width: 100%; } }
`,
    ];

    constructor() {
        super();
        this.data = workflow;
    }
}
