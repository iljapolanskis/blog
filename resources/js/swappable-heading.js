export default class SwappableHeading {
    constructor(element, headings = []) {
        this.element = element;
        this.headings = headings;
        this.current = 1;
        this.speed = 150;
    }

    async swap() {
        while (true) {
            await this.wait(1000);

            await this.clear();

            await this.type(this.nextHeading());
        }
    }

    async type(text) {
        while (text.length) {
            await this.append(text[0]);

            text = text.substring(1);
        }
    }

    text() {
        return this.element.innerHTML;
    }

    append(text) {
        this.element.innerHTML += text;

        return this.wait(this.speed);
    }

    async clear() {
        while (this.length()) {
            await this.backspace();
        }
    }

    backspace() {
        this.element.innerHTML = this.text().slice(0, -1);

        return this.wait(this.speed);
    }

    nextHeading() {
        let heading = this.headings[this.current - 1];

        this.increment();

        return heading;
    }

    empty() {
        return this.length() === 0;
    }

    length() {
        return this.text().length;
    }

    increment() {
        this.current++;

        if (this.current > this.headings.length) {
            this.current = 1;
        }
    }

    async wait(milliseconds) {
        return new Promise(resolve => {
            setTimeout(resolve, milliseconds);
        });
    }
}
