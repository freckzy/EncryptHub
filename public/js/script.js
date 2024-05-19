// Importa CryptoJS nel tuo file JavaScript
//import CryptoJS from 'crypto-js';


function copyText() {
    // Seleziona l'elemento di input
    const cypherText = document.getElementById('cypher-area');

    // Seleziona il testo nell'elemento di input

    // Copia il testo negli appunti del sistema
    navigator.clipboard.writeText(cypherText.value).then(r => null);

    // Deseleziona l'input
}


function decryptAES() {
    const inputTextArea = document.getElementById('plain-area');
    const keyInput = document.getElementById('key-input');
    const outputTextarea = document.getElementById('cypher-area');

    const message = inputTextArea.value;
    const key = keyInput.value;

    const bytes = CryptoJS.AES.decrypt(message, key);
    const decryptedMessage = bytes.toString(CryptoJS.enc.Utf8);

    // Restituisce il messaggio decriptato
    outputTextarea.value = decryptedMessage;
}

// Funzione per criptare il messaggio usando AES
function encryptAES() {
    const inputTextArea = document.getElementById('plain-area');
    const outputTextarea = document.getElementById('cypher-area');
    let keyInput = document.getElementById('key-input');

    const message = inputTextArea.value;
    const key = keyInput.value;
    // Cifra il messaggio usando AES
    const encrypted = CryptoJS.AES.encrypt(message, key).toString();

    // Restituisce il messaggio criptato
    outputTextarea.value = encrypted;
}

function randomKey(id){
    const keyInput = document.getElementById(id);

    keyInput.value = (Math.random() + 1).toString(15).substring(7) + (Math.random() + 1).toString(15).substring(7);
}
