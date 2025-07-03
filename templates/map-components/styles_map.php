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
    flex-direction: row;
    margin: 0;
    padding: 0;
    width: 87%;
  }

  /* Header Components */
  .header{
    display: flex;
    align-items: center;
    flex-direction: column;
    margin: 0;
    padding: 0;
    width: 97%;
    border-radius: 0 0 16px 16px;
  }
  .container-header{
    display: inline-block;
    padding: 10px;
    width: 50%;
    border-radius: 16px;
    background:rgb(23, 28, 37);
    z-index: 1000;
  }
  .container-search-bar{
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0;
    margin: 0;
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

  /* Header Component */
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
    .container-header-icon{
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 5px
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

  .main{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 80%;
    gap: 10px;
  }

  .container-map{
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    width: 100%;
    height: 100%;
    border-radius: 16px;
  }

  .container-map a span{
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    width: 100%;
    height: 100%;
  }

  input{
    background: transparent;
    color: transparent;
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
  }
</style>