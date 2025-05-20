/* Creando un componente de HTML con JS */
class soccerFieldStadium extends HTMLElement {
  constructor() {
    super();
    this.attachShadow({ mode: "open" });
  }

  static get styles() {
    return /*css*/ `
      :host {
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
    `;
  }

  connectedCallback() {
    this.render();
  }

  render() {
    this.shadowRoot.innerHTML = /*html*/ `
      <style>${soccerFieldStadium.styles}</style>
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
      `;
  }
}

customElements.define("soccer-field-stadium", soccerFieldStadium);
