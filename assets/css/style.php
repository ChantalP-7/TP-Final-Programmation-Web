<?php
   header('content-type: text/css');
?>

main {   
    font-family: var(--newsCycle);
    margin: 0;
    background-image: url(../images/fond-fleurs-banniere.jpg);
    background-size: cover;
    background-repeat: none;
    min-height: 100vh;
}

.conteneur {
    display: flex;    
    flex-wrap: wrap;
    flex-direction: column;
    text-align: center;
    max-width: 1000px;
    background-color: var(--blanc);
    margin:50px auto;
    border-radius: 10px;
    position: relative;
    min-height: 100%;
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
    flex: flex-1;
    padding: 20px;
}

main h1 {
    text-align: center;
    margin: 50px auto;
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

.div-form-texte {}

form 
{
    border: solid 2px var(--jade);
    border-radius: 5px;
    background-color: white;
    display: block;
    text-align: left;
    padding: 30px;
    width : 400px;
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

label 
{
    display: flex;
    justify-content: left;
}

table {
    max-width: 1100px;
    margin: 50px auto;
    padding: 20px;
    gap: 5px;    
}

.div-article-unique {
    display: block;
    margin: auto;
    justify-content: center;
    max-width: 1000px;
}

.div-article-unique h3 {
    background-color: tomato;
    border-radius: 3px 3px 0px 0px;
    padding: 8px;
    font-size: 22px;
    font-family: sans-serif;
    font-weight: 400;
    text-align: center;
}

.div-article-unique p {
    font-family: sans-serif;
    font-size: 20px;
    line-height: 1.4em;
    padding-left: 10px;
    padding-right: 10px;
    text-align: justify;
}

.div-article-unique > p {
    margin-top: 20px;
}

.div-article-unique h4 {    
    padding-left: 10px;
}

em {
    font-size: 20px;
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
    padding: 10px;
    font-size:  18px;
}

h1 {
    font-size: 26px;
}

th {
    text-align: left;
}

p {
    font-size: 18px;
}

.article {
    max-width: 800px;
    margin: 20px auto;
}

.article > *+* {
    margin-top: 20px;
}

.bouton {
    background-color: rgba(12, 7, 65, 0.87);
    padding: 8px 15px;
    border-radius: 7px;
    color: var(--blanc);
}

.texte-erreur{
    color: tomato;    
    font-weight: 700;
    margin-bottom: 10px;
}