import 'https://smtpjs.com/v3/smtp.js'

var firebaseConfig = {
  apiKey: "AIzaSyD39yRLVKbcw12JmPhL5gk5W8_c3qV-UWk",
  authDomain: "treino-6249d.firebaseapp.com",
  databaseURL: "https://treino-6249d.firebaseio.com",
  projectId: "treino-6249d",
  storageBucket: "treino-6249d.appspot.com",
  messagingSenderId: "929368419310",
  appId: "1:929368419310:web:9fb4eca6295f685e09bcff"
};
  const app = firebase.initializeApp(firebaseConfig);
  var storageRef = app.storage().ref();
  var myform = document.getElementById('myform');

  myform.addEventListener('submit', function(e){
    e.preventDefault()

    let nome = document.getElementById('nome')
    let email = document.getElementById('email')
    let tel = document.getElementById('tel')
    let opções = document.getElementById('opções')

    uploadFile() // Upando imagem <-
    sendmail(nome,email,tel,opções) // Enviando o email, passando os parametros que serão usados.
  })

  var fileUp = document.getElementById('fileupload')

    fileUp.addEventListener('change',()=>{document.getElementById('filehere').innerHTML = "Arquivo carregado! "+ fileUp.files[0].name})

  function uploadFile() {
    var file = document.getElementById('fileupload').files[0]
    var mountainsRef = storageRef.child(file.name);
    mountainsRef.put(file).then(function(snapshot) {
      alert("Currículo submetido no banco de dados!");
    });
  }

  function sendmail(nome,email,tel) {
    var file = document.getElementById('fileupload').files[0]

      Email.send({
        Host : "smtp.gmail.com", // SMTP do Email utilizado.
        Username : 'emailteste@email.com', // Passar o Email do GMAIL
        Password : "ftjxvqfrcxiozseu", // Passar a senha de app do Gmail
        To : 'emailteste@email.com', // Para
        From : "ptkdev@outlook.com", // de
        Subject : `Submissão de currículo para vagas de ${opções.value}`, // Assunto
        Body : `nome: ${nome.value} <br></br>  
                email: ${email.value} <br></br>
                telefone: ${tel.value} <br></br>`,
                Attachments: [{
                  name : file.name, // <- nome do arquivo para passar no email, e no url abaixo como query
                  path: `https://firebasestorage.googleapis.com/v0/b/treino-6249d.appspot.com/o/${file.name}?alt=media&token=c57c732e-e2c2-4eea-a05d-a219f8788ce9` // <- precisará ir no firebase, e olhar o link dos arquivos subidos.
                }]
      }) // Corpo da mensagem, e os anexos.
      .then(message => {
        
        alert(message)

        location.href = "https://absolutasaude.com.br/"

      }).catch(err => {
        alert('houve um error')
        console.log(err)
      })
  }