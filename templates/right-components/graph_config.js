class GraphComponent extends HTMLElement {
  constructor() {
    super();
    this.attachShadow({ mode: "open" });
  }

  connectedCallback() {
    this.tipoGoles = this.getAttribute("tipoGoles");
    this.dataGraph = this.getAttribute("dataGraph");
    this.data = JSON.parse(this.dataGraph);
    this.render();
  }

  render() {
    this.shadowRoot.innerHTML = /*html*/ `
      <style>
        :host {
          width: 100%;
          height: 200px;
        }
      </style>
      <canvas id="graph"></canvas>
    `;

    const graph = this.shadowRoot.querySelector("#graph");

    const labels = Object.keys(this.data);
    const numberGoals = labels.map((key) => this.data[key].total);

    const data = {
      labels: labels,
      datasets: [
        {
          label: this.tipoGoles,
          data: numberGoals,
          backgroundColor: "#a54f00",
        },
      ],
    };

    const config = {
      type: "bar",
      data: data,
      options: {
        responsive: true,
        plugins: {
          legend: {
            position: "top",
          },
          title: {
            display: true,
            text: this.tipoGoles + " por intérvalo de tiempo",
          },
        },
      },
    };
    new Chart(graph, config);
  }
}

customElements.define("graph-component", GraphComponent);
