import { BlitzElement, html, css, customElement } from "@lnear/blitz";
import { global } from "../../global.js";
import "../../components/body.js";
import "../../components/pre.js";
import "./PostsCard.js";
import "./PackagesCard.js";
import "./StackCard.js";

@customElement("app-landing")
export class AppLanding extends BlitzElement {
    static styles = [
        global,
        css`
            
        `,
    ];

    render() {
        return html` <app-body>
            <section>
                <span>
                    <span>
                        <div>
                            <h1>Hi, my name is Lanre.</h1>
                            <p>
                                Software has been an integral part of my
                                professional journey for over a decade, during
                                which I've honed my skills through self-teaching
                                and dedicated practice. I am excited about the
                                opportunity to contribute to the ecosystem of
                                your company.
                            </p>
                        </div>

                        <stack-card title="my stack" ></stack-card>
                    </span>
                    <packages-card title="packages" ></packages-card>
                </span>
                <posts-card title="posts" ></posts-card>
            </section>
        </app-body>`;
    }
}
