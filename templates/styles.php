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
        align-items: center;
        margin: 0;
        padding: 0;
        width: 97%;
        place-content:top;
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
        box-sizing: fit-content;
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
    main{
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
        padding: 0;
        width: auto;
        height: auto;
        box-sizing: border-box;
    }


    /* Logo e información del equipo, parte inicial */
    .container{
        display: flex;
        justify-content: left;
        align-items: top;
        flex-direction: row;
        padding: 0;
        margin: 0;
        gap: 10px;
        width: 100%;
        height: 100%;
        max-width: 3000px;
        box-sizing: border-box;
    }

    /* Contenedor izquierda */
    .container-left{  
        width: 55%;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    /* Información del Equipo */
    .container-div-team {
        display: flex;
        justify-content: left;
        align-items: center;
        border-radius: 16px;
        background-position: 50%;
        background-size: 250%;
        backdrop-filter: blur(10px);
        font-weight: bold;
        color: black;
        padding: 22px;
    }

    .container-div-team::before{
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

    .container-team{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: row;
        text-align: left;
        background-color: transparent;
        margin: 0;
        padding: 0;
        gap: 20px;
    }

    .logo_team{
        display: flex;
        margin: 0;
        padding: 8px;
        background-color:rgba(0, 0, 0, 0.51);
        border-radius: 16px;
    }

    .info_team{
        display: block;
        margin: 0;
        padding: 0;
        word-break: break-all;
    }

    .info_team_league{
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: left;
        padding: 0;
        margin: 0;
        padding-bottom: 7px;
        gap: 10px;
    }

    .info_team_country{
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: left;
        padding-bottom: 7px;
        gap: 10px;
    }

    .info_team span{
        display: block;
    }

    .info_team h3{
        margin: 0;
        padding: 0;
    }

    /* Resultados temporada */
    .container-results{
        display: flex;
        flex-direction: column;
        background-color: rgba(0, 0, 0, 0.75);
        justify-content: center;
        align-items: center;
        border-radius: 16px;
        padding: 30px;
    }


    .container-results-info{
        display: flex;
        text-align: left;
        flex-direction: column;
        gap: 15px;
        width: 100%;
    }
    
    .container-results-items{
        display: inline-flex;
        flex-direction: row;
        flex-wrap: wrap;
    }

    .container-resume-items-win,
    .container-resume-items-degrade,
    .container-resume-items-loss{
        display: inline-flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        font-weight: 300;
        padding: 10px;
    }

    .container-resume-items-win:hover{
        cursor: pointer;
        background-color: #003403;
        border-radius: 16px;
        transform: scale(1.1);
        transition: all 0.3s ease;
    }

    .container-resume-items-degrade:hover{
        cursor: pointer;
        background-color: #545454;
        border-radius: 16px;
        transform: scale(1.1);
        transition: all 0.3s ease;
    }

    .container-resume-items-loss:hover{
        cursor: pointer;
        background-color: #560000;
        border-radius: 16px;
        transform: scale(1.1);
        transition: all 0.3s ease;
    }

    .container-titles{
        display: flex;
        justify-content: space-between;
        padding: 0px 25px 0px 25px;
    }

    .results-item-win,
    .results-item-degrade,
    .results-item-loss{
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 7px;
        height: 35px;
        width: 35px;
        color: black;
        font-weight: bold;
        background-color: rgba(199, 199, 199, 0.75);
        border: none;
        margin: 2px;
        text-decoration: none;
    }

    .results-item-win{
        background-color: #003403;
    }

    .results-item-degrade{
        background-color: #888888;
    }

    .results-item-loss{
        background-color: #560000;
    }


    .results-item-win:hover,
    .results-item-degrade:hover,
    .results-item-loss:hover{
        /* Aumentar el tamaño del contenedor */
        transform: scale(1.2);
        transition: all 0.3s ease;
        cursor: pointer;
    }

    /* Contenido Derecha */
    .container-right{
        display: flex;
        flex-direction: column;
        width: 45%;
        gap: 20px;
    }

    .container-right h3{
        text-align: center;
    }

    /* Resumen del Equipo */
    .container-resume-right,
    .container-minutes-goals{
        display: flex;
        flex-direction: column;
        width: 100%;
        height: fit-content;
        box-sizing: border-box;
        margin: 0;
        gap: 12px;
        padding: 15px;
        border-radius: 16px;
        background-color: rgba(0, 0, 0, 0.75);
    }

    .button-points{
        display: flex;
        justify-content: center;
        align-items: center;
        box-sizing: border-box;
        background: none;
        border: none;
        /* box-shadow: none; */
        height: 10px;
    }

    .container-parent-details{
        display: block;
        background-color:rgb(77, 77, 77);
        border-radius: 16px;
    }
    .container-parent-details:hover{
        cursor: pointer;
        background-color:rgb(44, 44, 44);
        border-radius: 16px;
    }

    .container-init-details{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        padding: 10px;
        width: 100%;
    }

    .container-details{
        display: none;
        flex-direction: column;
        margin: 5px;
    }

    .details{
        display: flex;
        flex-direction: row;
        padding-left: 12px;
        padding-right: 12px;
        padding-bottom: 7px;
        justify-content: space-between;
    }

    .container-lineups{
        display: flex;
        flex-direction: column;
        background-color: rgba(0, 0, 0, 0.75);
        justify-content: center;
        align-items: center;
        margin: 0 auto;
        gap: 20px;
        padding: 30px;
        border-radius: 16px;
        width: 100%;
        height: 100%;
    }

    .container-new-lineup{
        display: inline-block;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 0;
    }

    .new-lineup{
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: rgba(0, 0, 0, 0.75);
        border-radius: 16px;
        width: 100%;
        height: fit-content;
    }

    .div-new-lineup{
        display: none;
        align-items: center;
        justify-content: center;
        margin: 0;
        padding: 0;
    }

    .container-lineup-form{
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        margin: 0 auto;
        text-align: left;
        gap: 10px;
        padding-bottom: 13px;
        border-radius: 16px;
        justify-content: space-between;
        background-color:rgba(155, 155, 155, 0.57);
    }

    .container-lineup-text{
        display: inline-flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 18%;
        text-align: center;
        font-weight: bold;
        margin: 0;
        padding: 0;
    }

    /* Modal de nueva alineación */
    .modal-lineup{
        display: flex;
        position: fixed;
        justify-content: center;
        align-items: center;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color:rgba(0, 0, 0, 0.64);
        z-index: 1000;
    }

    .modal-lineup-content{
        width: 90%;
        background-color: #a8dfff;
        padding: 10px;
        border-radius: 5px; 
        max-width: 500px;
        position: relative;
        gap: 10px;
    }

    .modal-lineup-content h3{
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        margin: 5px;
        padding: 0;
        color: #001442;
    }

    .container-modal-close{
        display: flex;
        justify-content: right;
        align-items: center;
        text-align: center;
        width: 100%;
        height: 3%;
    }

    .close-modal-lineup{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80%;
        width: 10%;
        font-size: 20px;
        cursor: pointer;
        color: #000000;
        font-weight: 700;
        transition: all .3s ease;
        padding: 0;
        margin: 0;
    }

    .close-modal-lineup:hover{
        transform: scale(1.2);
    }

    .lineup-area{
        padding: 10px;
    }

    .input-new-lineup{
        display: flex;
        justify-content: center;
        align-items: center;
        font-weight: 900;
        margin: 10px;
        gap: 5px;
        color: #000000;
        box-sizing: border-box;
    }

    .input-new-lineup input{
        display: flex;
        width: 10%;
        height: 30px;
        margin: 0;
        padding: 5px;
        gap: 10px;
        font-size: 20px;
        text-align: center;
        color:rgb(255, 255, 255);
        background-color: #001442;
    }

    .input-new-lineup input:focus{
        border: none;
        outline: none;
        box-shadow: none;
    }

    .container-save-lineup{
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 10px;
        padding: 0;
        gap: 10px;
    }

    .button-save{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 71%;
        background-color: #001442;
        height: 10px;
        padding: 15px;
        font-size: 15px;
    }
</style>