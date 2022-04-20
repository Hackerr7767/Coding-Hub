struct TextView {
    value: String,
    color: String,
    font: String
}
fn main() {
    let text = TextView {
        value: String::from("Hello"),
        color: String::from("red"),
        font: String::from("Arial")
    };
}
