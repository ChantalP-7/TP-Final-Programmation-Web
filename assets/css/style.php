<?php
   header('content-type: text/css');
?>

@import "/assets/css/general.css";
@import "/assets/css/langage.css";
@import "/assets/css/div.css";
@import "/assets/css/boutons.css";
@import "/assets/css/exceptions.css";

main { 
    margin: 0;
    background-size: cover;
    background-repeat: none;
    min-height: 100vh;
}


h1, h2, h3, h4, th {
    font-family: var(--mohave)
}


h1 {
    font-size: var(--h1);
    color: var(--charbon);
    letter-spacing: 0.03em;
    font-weight: 700;
}


h2 {
    font-size: var(--h2);
    margin-top: 30px;
    margin-bottom: 30px;
}


h3 {
    font-size: var(--h3);
}

p {
    font-size: var(--p);
}

td, p, a {
    font-family: var(--barlow);
}

footer {
    position: abolute;
}


header {       
    background-color: var(--jade);
}

nav {    
    display: flex;
    justify-content: space-between;
    padding: 20px
}

nav  div {
    background-color: var(--jade);
    display: flex;
    gap: 20px;
    margin: auto 20px ;
}

nav a {
    background-color: white;
    padding: 8px 15px;
    border-radius: 7px;
    color: var(--bleuMarin);
}

main {
    display: flex;
    padding: 20px;
}

main h1 {
    text-align: center;
    margin-bottom: 20px;
}

header title {
    text-align: center;
    margin: 50px auto;
}

footer {
    padding: 20px;
    display: flex;
    justify-content: space-between;
    background-color: var(--jade);
}

footer p {
    color: var(--blanc);
    margin: auto 20px;
}

form {
    border: solid 2px var(--jade);
    border-radius: 5px;
    background-color: white;
    display: block;
    margin: 10px auto;
    text-align: left;
    padding: 30px;
    max-width: 800px;
    font-size: 20px;
}

form button.bouton {
    margin-top: 15px;
    background-color: var(--jade);
}

form button:hover.bouton {
    cursor: pointer;
    background-color: var(--bleuMarin);
    color: var(--blanc)
}

form *+* {
    margin-top: 15px;
}

form label, input {
    display: flex;
    flex-direction: column;
}

label {
    display: flex;
    justify-content: left;
}

table {
    diplay: flex;
    flex-wrap: wrap;
    max-width: 1000px;
    gap: 5px; 
    border-radius: 5px;
}

table> tbody{
    padding: 20px;
}

em {
    font-size: 18px;
    text-align: left;
}

thead, tbody {
    background-color: var(--blanc);     
}

th {
    border: 1px dotted black;
    border-radius: 5px;
    padding: 5px 10px;
    background-color: var(--jade);
    color: var(--blanc);
    font-size: 20px;
    font-weight: 400;
}

td {
    border: 1px dotted var(--jade);
    border-radius: 5px;
    padding: 20px;
    font-size:  18px;
    max-width: 45ch;
}


th {
    text-align: center;
    font-size: 22px;
}
