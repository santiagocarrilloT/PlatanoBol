<style>
  :root{
    display: flex;
    color-scheme: light dark;
    justify-content: center;
    font-family: "Nunito Sans", sans-serif;
    font-optical-sizing: auto;
    font-weight: 100;
    font-style: normal;
    font-variation-settings:
    "wdth" 100,
    "YTLC" 500;
    /* Modificar el tamaño de las letras */
    font-size: 16px;
    line-height: 1.5;
    background-color: #0e1116;
    }

  body{
    display: inline-block;
    justify-content: center;
    align-items: top;
    width: 87%;
  }

  /* Header Components */

    .header{
      display: flex;
      align-items: center;
      flex-direction: column;
      margin: 0;
      padding: 0;
      z-index: 100;
      width: 97%;
      border-radius: 0 0 16px 16px;
      }
    
    .container-header{
      display: inline-block;
      padding: 10px;
      width: 50%;
      border-radius: 16px;
      background:rgb(23, 28, 37);
    }
    .container-search-bar{
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 0;
      margin: 0;
      z-index: 10;
    }
    .form-search{
      display: inline-flex;
      justify-content: center;
      align-items: center;
      background-color: rgba(0, 0, 0, 0.75);
      padding: 0 20px 0 20px;
      border-radius: 13px;
      gap: 15px;
      margin: 0;
      width: 100%;
    }
    .form-search input{
      height: 48px;
      width: 30vw;
      margin: 0;
      padding: 5px;
      background-color: transparent;
      color: white;
      border: none;
      outline: none;
    }
    .form-search input:focus {
      border: none;
      outline: none;
      box-shadow: none;
    }
    .container-search {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      padding: 0;
      margin: 0;
      gap: 10px;
      position: relative;
    }
    .container-search-result{
      display: none;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background-color: gray;
      box-sizing: border-box;
      width: 100%;
      top: 100%;
      left: 0;
      padding-bottom: 15px;
      border-radius: 13px;
      height: fit-content;
      max-height: 300px;
      overflow-y: auto;
      position: absolute;
      z-index: 5;
    }
    .container-search-parameter{
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      gap: 3px;
      padding: 15px 0 15px 0;
      position: sticky;
      top: 0;
      z-index: 10;
      background-color:rgb(90, 90, 90);
      border-bottom:rgb(0, 0, 0) 1px solid;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
    }
    .container-search-parameter button{
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #000000;
      border-radius: 13px;
      height: 10px;
      font-size: 15px;
    }
    .teams-search-result{
      display: flex;
      flex-direction: column;
      justify-content: left;
      align-items: center;
      color: #000000;
      font-weight: 600;
      width: 100%;
      height: fit-content;
    }
    .componentes-team-results{
      display: flex;
      align-items: center;
      justify-content: space-between;
      width: 100%;
    }
    .team-result {
      display: inline-flex;
      flex-direction: row;
      justify-content: left;
      align-items: center;
      gap: 10px;
      padding: 8px;
      width: 100%;
      cursor: pointer;
    }
    .team-result:hover{
      background-color: rgba(0, 0, 0, 0.75);
      border-radius: 13px;
      color: white;
    }
    .team-result-data{
      display: flex;
      flex-direction: column;
      width: fit-content;
    }
    .team-result-founded{
      display: flex;
      justify-content: right;
      align-items: center;
      width: fit-content;
    }
    .container-nav-header{
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      width: 100%;
    }
    .nav-header{
      display: flex;
      
    }
    .nav-header ul{
      margin-top: 5px;
      gap: 5px;
    }
    .nav-header a{
      display: flex;
      justify-content: center;
      align-items: center;
      text-decoration: none;
      width: 100px;
      height: 45px;
      color: white;
    }
    .nav-header a:hover{
      cursor: pointer;
      background-color: rgba(56, 56, 56, 0.75);
      border-radius: 16px 16px 0 0;
    }

    a.disabled {
        pointer-events: none;
        color: gray;
        opacity: 0.6;
        text-decoration: none;
        cursor: default;
    }

    a.disabled:hover {
        cursor: pointer;
        background-color: rgba(56, 56, 56, 0.75);
        border-radius: 16px 16px 0 0;
    }
    .container-header-icon{
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 5px
    }

  /* Componente del Header */
  .container-header-team{
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;

    background-color: #0c1627;
    border:1px solid rgb(60, 78, 104);

    font-weight: 600;
    font-size: 20px;

    width: 100%;
    height: max-content;

    border-radius: 16px;

    gap: 18px;

    padding: 12px;
    margin: 10px 0 15px 0;

    background-position: 50%;
    background-size: 250%;
    backdrop-filter: blur(10px);
  }
  
  .container-header-team::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    backdrop-filter: blur(10px);
    background-color: rgba(187, 186, 186, 0.5);
    border-radius: 16px;
    z-index: -1;
  }

  .container-header-team span{
    font-weight: 600;
    font-size: 20px;
    color: white;
    text-transform: uppercase;
    letter-spacing: 1px;
    background-color:rgba(0, 0, 0, 0.5);
    padding: 5px;
    border-radius: 10px;
  }

  .container-header-team img{
    padding: 5px;
    background-color:rgba(0, 0, 0, 0.5);
    border-radius: 10px;
  }
  
  /*Componente main*/
  .main{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
  }


  .container-main{
    display: flex;
    flex-direction: column;
    background-color: rgb(12, 14, 19);
    justify-content: center;
    gap: 20px;
    width: 100%;
    padding: 20px;
    border-radius: 16px;
    margin-bottom: 30px;
    border: 1px solid rgb(60, 78, 104);
  }

.container-filters{
  display: inline-flex;
  justify-content: space-between;
}

  .container-fixture{
    display: grid;
    grid-template-columns: 1fr 1fr;
    background-color: rgb(12, 14, 19);
    justify-content: space-between;
    gap: 20px;
    width: 100%;
    /* padding: 20px;
    border-radius: 16px;
    margin-bottom: 30px; */
  }

  .container-fixture-filter{
    display: flex;
    justify-content:right;
    align-items: center;
    gap: 10px;
    margin-bottom: 15px;
  }

  .fixture-components-search{
    display: inline-flex;
    flex-direction: column;
    gap: 8px;
    width: 30%;
  }

  .container-fixture-filter-title{
    display: inline-flex;
    justify-content: left;
    align-items: center;
    gap: 5px;
    color: white;
    font-weight: 400;

    
  }

  .select-filter{
    display: inline-flex;
    justify-content: center;
    align-items: center;

    width: 100%;
    height: 40px;
    padding: 0 10px;
    margin: 0;

    border-radius: 16px;
    background-color: rgba(60, 78, 104, 0.36);
    color: white;

    font-weight: 500;

    border: none;
    outline: none;
  }

  .select-filter:hover{
    background-color: rgba(60, 78, 104, 0.50);
    cursor: pointer;
  }

  .select-filter option{
    background-color: rgb(12, 14, 19);
    color: white;
    font-weight: 500;
  }

  .container-nofound-filter{
    display: flex;
    grid-column: 1 / -1;
    width: 100%;

    align-items: center;
    justify-content: center;
    text-align: center;
  }

  .form-filter{
    display: flex;
    justify-content: center;
    align-items: center;

    margin: 0;
    padding: 0;

    width: fit-content;
    height: fit-content;
  }

  .form-filter form{
    margin: 0;
    padding: 0;
  }

  .container-section-fixture{
    display: inline-flex;
    flex-direction: row;
    width: 30%;
    justify-content: right;
    align-items: center;
    gap: 3px;
  }

  .button-next-fixture, 
  .button-number-fixture{
    background: transparent;
    border-radius: 50%;

    width: fit-content;
    height: fit-content;

    padding: 0 6px 0 6px;
    margin: 0;

    border: none;
    outline: none;
    box-shadow: none;
  }
  .container-number-fixture{
    display: flex;
    align-items: right;

    gap: 2px;

    height: min-content;
    width:auto;
  }

  .active {
    background-color: rgb(65, 65, 65);
    color: white;
    font-weight: 600;
  }

  .button-next-fixture:hover,
  .button-number-fixture:hover{
    background-color:rgb(65, 65, 65);  
  }

  .button-number-fixture{
    width: 100%;
    height: 100%;
    text-align: center;
  }

  .container-fixture-match{
    display: flex;
    justify-content: top;
    align-items: center;
    flex-direction: column;
    height: fit-content;
    background-color:#0c1627;
    width: 100%;
    padding: 0px 10px 10px 10px;
    gap: 20px;
    border-radius: 16px;
    box-sizing: border-box;
    color: white;
    font-weight: 500;
    border: 1px solid rgb(60, 78, 104);
  }

  .container-fixture-match:hover{
    background: radial-gradient(circle,rgba(60, 78, 104, 0.40) 0%,rgba(47, 59, 75, 0.18) 100%);
    transform: scale(1.02);
    transition: transform 0.2s ease-in-out;
    cursor:default;
  }


  .container-fixture-match-number{
    display: flex;
    justify-content: center;
    align-items: center;
    top: 0;
    padding: 10px 20px 10px 20px;
    border-radius: 0px 0px 16px 16px;
    background-color: gray;
  }
  .container-fixture-stadium-competition{
    display: inline-flex;
    justify-content: center;
    align-self: center;
    text-align: center;
    flex-direction: column;

    gap: 10px;

    font-size: 15px;
    font-weight: 300;

    width: 100%;
  }

  .container-stadium-competition{
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
  }

  .container-fixture-result{
    display: inline-flex;
    justify-content: space-between;
    align-items: center;
    text-align: left;

    padding: 12px 5px 12px 5px;
    margin: 0;
    width: 100%;

    border-radius: 16px;
    background-color:rgba(60, 78, 104, 0.36);
  }

  .container-fixture-result img{
    width: 30px;
    height: 30px;
    margin: 0;
    padding: 0;
  }

  .container-fixture-result-team-local{
    display: inline-flex;
    justify-content: left;
    align-items: center;
    width: 50%;
    gap: 5px;
  }

  .container-fixture-result-team-visitor{
    display: inline-flex;
    width: 50%;
    justify-content: right;
    align-items: center;
    text-align: right;
    gap: 5px;
  }

  .container-fixture-result-score{
    display: inline-flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    gap: 5px;
    width: 20%;
  }

  .container-fixture-city{
    display: inline;
    justify-content: center;
    align-items: center;
    text-align: center;

    font-size: 15px;
    font-weight: 300;

    width: 100%;
  }

  @media (max-width: 820px) {
    :root{
      font-size: 15px;
    }

    body{
      width: 94%;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      margin: 0;
      padding: 0;
    }

    .header{
      display: flex;
      align-items: center;
      justify-content: center;
      width: 100%;
    }

    .container-header{
      width: 100%;
      padding: 10px;
    }

    .container-header-team{
      width: 100%;
      font-size: 17px;
    }

    .container-fixture{
      grid-template-columns: 1fr;
    }

    .container-filters{
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 10px;
    }

    .fixture-components-search{
      flex-direction: row;
      justify-content: center;
      align-items: center;
      width: 100%;
      padding: 0px;
    }

    .container-section-fixture{
      width: 100%;
      justify-content: center;
      align-items: center;
    }
  }

  @media (max-width: 400px) {
    :root{
      font-size: 13px;
    }
    }

</style>

