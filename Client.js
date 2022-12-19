class Str {
    static #regex = /[A-Z]{2,}(?=[A-Z][a-z]+[0-9]*|\b)|[A-Z]?[a-z]+[0-9]*|[A-Z]|[0-9]+/g;

    static startWith(text, checker) {
        return text.startsWith(checker);
    }

    static kebab(text) {
        return text
            .match(this.#regex)
            .map(x => x.toLowerCase())
            .join('-');
    }

    static snake(text) {
        return text
            .match(this.#regex)
            .map(s => s.toLowerCase())
            .join('_');
    }

    static log(text) {
        console.log(text)
    }
}

console.log(Str.snake("Hello world"))
console.log(Str.kebab("Hello world"))
console.log(Str.startWith("Hello World", "Hel"))
Str.log("console log this statement")

