import "./soccer_field_player.js";
import "./movement_player.js";
/* Creando un componente de HTML con JS */
class NewSoccerField extends HTMLElement {
  constructor() {
    super();
    this.attachShadow({ mode: "open" });
  }

  static get styles() {
    return /*css*/ `
        :host {
            --gradient: conic-gradient(#196915 90deg, #168613 0 180deg, #196915 0 270deg, #168613 0);
            --border-color: #fff;
            --circle-size: 90px;
            --player-color: #fff;
            --player-shadow: #0008;

            width: 100%;
            height: 200px;
            display: flex;
            justify-content: center;  
        }

        .stadium {
            width: 70%;
            height: 100%;
            border: 1px solid #fff;
            background: var(--gradient);
            background-size: 67px 67px;
            box-shadow: 
                0 0 0 2px #0004,
                1px 1px 0 2px #0006;
            position: relative;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .half{
            display: flex;
            width: 50%;
            height: 100%;
            border-right: 1px solid #fff;
            align-items: center;
        }

        .half:nth-child(2){
            transform: scaleX(-1);
        }

        .half::before {
            content: '';
            border: 1px solid #fff;
            width: 25px;
            height: 25px;
            position: absolute;
            border-radius: 50%;
            top: -15px;
            left: -15px;
        }

        .half::after {
            content: '';
            border: 1px solid #fff;
            width: 25px;
            height: 25px;
            position: absolute;
            border-radius: 50%;
            bottom: -15px;
            left: -15px;
        }

        .area{
            width: 33%;
            height: 55%;
            border: 1px solid #fff;
            border-left: 0;
            display: flex;
            align-items: center;
        }

        .area::before{
            content: '';
            display: block;
            border: 2px solid #fff;
            position: absolute;
            border-radius: 50%;
            top: 50%;
            left: 11%;
            transform: translate(-50%, -50%);
        }
        
        .half:nth-child(2) .area::before {
            left: auto;
            right: 76%; 
            transform: translate(-50%, -50%); 
        }

        .area::after{
            content: '';
            display: block;
            width: 50%;
            height: 33%;
            border: 1px solid #fff;
            border-radius: 50%;
            transform: translateX(53%);
            clip-path: polygon(100% 0, 65% 0, 65% 100%, 100% 100%);
        }

        .semiarea{
            width: 36%;
            height: 50%;
            border: 1px solid #fff;
            border-left: 0;
            display: flex;
            justify-content: left;
        }
        
        .circle{
            border: 1px solid #fff;
            border-radius: 50%;
            position: absolute;
            width: 90px;
            height: 90px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .circle::before{
            content: '';
            border: 2px solid #fff;
            border-radius: 50%;
            position: absolute;
            display: block;
        }

        .players {
            position: absolute;
            width: 100%;
            height: 100%;
            display: flex;
        }

        .home {
            display: grid;
            grid-template-columns: repeat(11, 1fr);
            grid-template-rows: repeat(11, 1fr);
            grid-template-areas: var(--lineup);
            width: 100%;
        }

        h3 {
            text-align: left;
        }
        
        .dropzone {
            display: inline-block;
            width: 100%;
            height: 100%;
            border: 1px dashed rgba(214, 214, 214, 0.7);
            background-color: rgba(92, 92, 92, 0.45);
            justify-content: center;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

          soccer-field-player[number="1"] { grid-area: d1; }
          soccer-field-player[number="2"] { grid-area: d2; }
          soccer-field-player[number="3"] { grid-area: d3; }
          soccer-field-player[number="4"] { grid-area: d4; }
          soccer-field-player[number="5"] { grid-area: d5; }
          soccer-field-player[number="6"] { grid-area: d6; }
          soccer-field-player[number="7"] { grid-area: d7; }
          soccer-field-player[number="8"] { grid-area: d8; }
          soccer-field-player[number="9"] { grid-area: d9; }
          soccer-field-player[number="10"] { grid-area: d10; }
          soccer-field-player[number="11"] { grid-area: d11; }
          soccer-field-player[number="12"] { grid-area: d12; }
      `;
  }

  connectedCallback() {
    this.lineupsForm = this.getAttribute("lineupsForm") || "0-0-0";
    this.render();
  }

  render() {
    this.shadowRoot.innerHTML = /*html*/ `
    <style>${NewSoccerField.styles}</style>
    <div class="stadium">
        <div class="half">
          <div class="area">
            <div class="semiarea"></div>
          </div>
        </div>
        <div class="half">
          <div class="area">
            <div class="semiarea"></div>
          </div>
        </div>
        <div class="circle"></div>
        <div class="players">
            <div id="alineacion" class="home lineup-1">

                <div class="dropzone" dropzone="copy">
                    <soccer-field-player id="1" number="1"></soccer-field-player>
                </div>
                <div class="dropzone" dropzone="copy">
                    <soccer-field-player id="2" number="2"></soccer-field-player>
                </div>
                <div class="dropzone" dropzone="copy">
                    <soccer-field-player id="3" number="3"></soccer-field-player>
                </div>
                <div class="dropzone" dropzone="copy">
                    <soccer-field-player id="4" number="4"></soccer-field-player>
                </div>
                <div class="dropzone" dropzone="copy">
                    <soccer-field-player id="5" number="5"></soccer-field-player>
                </div>
                <div class="dropzone" dropzone="copy">
                    <soccer-field-player id="6" number="6"></soccer-field-player>
                </div>
                <div class="dropzone" dropzone="copy">
                    <soccer-field-player id="7" number="7"></soccer-field-player>
                </div>
                <div class="dropzone" dropzone="copy">
                    <soccer-field-player id="8" number="8"></soccer-field-player>
                </div>
                <div class="dropzone" dropzone="copy">
                    <soccer-field-player id="9" number="9"></soccer-field-player>
                </div>
                <div class="dropzone" dropzone="copy">
                    <soccer-field-player id="10" number="10"></soccer-field-player>
                </div>
                <div class="dropzone" dropzone="copy">
                    <soccer-field-player id="11" number="11"></soccer-field-player>
                </div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
                <div class="dropzone" dropzone="copy"></div>
            </div>
        </div>
      </div>
    `;
  }
}

customElements.define("new-soccer-field", NewSoccerField);
