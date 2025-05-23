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
    font-size: 17px;
    line-height: 1.5;
    background-color: rgb(14, 17, 22);
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
  }
  .nav-header a{
    display: flex;
    justify-content: center;
    align-items: center;
    text-decoration: none;
    width: 90px;
    height: 45px;
    color: white;
  }
  .nav-header a:hover{
    cursor: pointer;
    background-color: rgba(56, 56, 56, 0.75);
    border-radius: 16px 16px 0 0;
  }


  /*Componente main*/
  .main{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
  }

  .container-fixture{
    display: grid;
    grid-template-columns: 1fr 1fr;
    background-color: rgb(12, 14, 19);
    justify-content: space-between;
    gap: 20px;
    width: 100%;
    padding: 20px;
    border-radius: 16px;
    margin-bottom: 30px;
  }

  .container-fixture-match{
    display: flex;
    justify-content: top;
    align-items: center;
    flex-direction: column;
    height: fit-content;
    background-color:rgb(23, 28, 37);
    width: 100%;
    padding: 10px;
    gap: 20px;
    border-radius: 16px;
    box-sizing: border-box;
    color: white;
    font-weight: 500;
  }

  .container-fixture-stadium-competition{
    display: inline-flex;
    justify-content: center;
    align-self: center;
    text-align: center;
    flex-direction: column;
    width: 100%;
  }

  .container-fixture-result{
    display: inline-flex;
    justify-content: space-between;
    align-items: center;
    text-align: left;
    padding: 0px 5px 0px 5px;
    margin: 0;
    width: 100%;
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

  /* .container-fixture-city{
    display: inline;
    justify-content: center;
    align-items: center;
    text-align: center;
    width: 100%;
  } */

</style>

