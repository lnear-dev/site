import { BlitzElement, html, css, customElement } from '@lnear/blitz';
import { property } from '@lnear/blitz/decorators';

@customElement('animated-pre')
class AnimatedPre extends BlitzElement {
    @property({ type: Array }) asciiArts: string[] = [`ASCII_GOES_HERE`];
    @property({ type: Number }) currentIndex = 0;
    @property({ type: String }) currentArt = '';
    @property({ type: Number }) animationTime = 3000; // Time to animate each ASCII art
    @property({ type: Number }) clearTime = 500; // Time to clear the ASCII art

    private chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789 ';

    static styles = css`
    :host {
      display: block;
      font-family: monospace;
      white-space: pre;
      background-color: #000;
      color: #0f0;
      text-align: center;
    }
  `;

    connectedCallback() {
        super.connectedCallback();
        this.currentArt = this.asciiArts[this.currentIndex];
        this.run();
    }

    private getRandomChar() {
        return this.chars[Math.floor(Math.random() * this.chars.length)];
    }

    private scrambleText(text: string) {
        const characters = text.split('');
        for (let i = 0; i < characters.length; i++) {
            if (Math.random() < 0.1 && characters[i].trim()) {
                characters[i] = this.getRandomChar();
            }
        }
        return characters.join('');
    }

    private async run() {
        const startTime = Date.now();
        while (Date.now() - startTime < this.animationTime) {
            this.currentArt = this.scrambleText(this.asciiArts[this.currentIndex]);
            await this.sleep(100); // 10 FPS
        }
        this.currentArt = this.asciiArts[this.currentIndex].replace(/[^\s]/g, ' ');
        await this.sleep(this.clearTime);
        this.currentArt = this.asciiArts[this.currentIndex = (this.currentIndex + 1) % this.asciiArts.length];
        this.run();
    }

    private sleep(ms: number) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }

    render() {
        return html`<pre>${this.currentArt}</pre>`;
    }
}
