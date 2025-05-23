/* Creando un componente de HTML con JS */
class soccerFieldPlayer extends HTMLElement {
  constructor() {
    super();
    this.attachShadow({ mode: "open" });
  }

  static get styles() {
    return /*css*/ `
        :host {
            display: flex;
            width: auto;
            height: auto;
            justify-content: center;
            align-items: center;
        }

        .player{
            width: 20px;
            height: 20px;
            background: #fff;
            border-radius: 50%;
            box-shadow: 1px 1px 0 #0008;

            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 12px;
            font-weight: bold;
            color: #000;
            cursor: pointer;
        }
        `;
  }

  connectedCallback() {
    this.number = this.getAttribute("number") || "0"; // Si no hay atributo number, se le asigna el valor por defecto "1"
    this.render();
    this.addEventListener("dragstart", this.onDragStart);
    this.addEventListener("dragend", this.onDragEnd);
  }

  onDragStart(event) {
    this.setAttribute("draggable", "true"); // Establece el atributo draggable en true
    event.dataTransfer.setData("text/plain", this.number); // Almacena el número del jugador en el evento de arrastre
  }

  onDragEnd() {
    this.removeAttribute("dragging");
  }

  render() {
    this.shadowRoot.innerHTML = /*html*/ `
      <style>${soccerFieldPlayer.styles}</style>
      <div draggable="true" class="player">
        ${this.number || ""}
      </div>
      `;
  }
}

customElements.define("soccer-field-player", soccerFieldPlayer);
