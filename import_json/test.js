
const http = require('http');

const hostname = 'dkmahomologar.ga';
const port = 3000;

const admin = require('./node_modules/firebase-admin');
const serviceAccount = require("./service-key.json");

const data = require("./teste.json");

admin.initializeApp({
    credential: admin.credential.cert(serviceAccount),
    databaseURL: "https://beauty-fair-214318.firebaseio.com"
});

data && Object.keys(data).forEach(key => {
    const nestedContent = data[key];

    if (typeof nestedContent === "object") {
        Object.keys(nestedContent).forEach(docTitle => {
            admin.firestore()
                .collection(key)
                .doc(docTitle)
                .set(nestedContent[docTitle])
                .then((res) => {
                    console.log("Document successfully written!");
                })
                .catch((error) => {
                    console.error("Error writing document: ", error);
                });
        });
    }
});

const server = http.createServer((req, res) => {
  res.statusCode = 200;
  res.setHeader('Content-Type', 'text/plain');

  res.end();


});

server.listen(port, hostname, () => {
  console.log(`Server running at http://${hostname}:${port}/`);
});


