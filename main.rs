struct TextView {
    value: String,
    color: String,
    font: String
}
struct Button {
button_value: String,
    button_color: String,
}
fn main() {
    let text = TextView {
        value: String::from("Hello"),
        color: String::from("red"),
        font: String::from("Arial")
    };
    let my_btn = Button {
    button_value: String::from("Click this"),
        button_color: String::from("red")
    };
}
