


var api = require("gettyimages-api");
var creds =  { apiKey: "3qnrktstw5fdh8yayg43kj87", apiSecret: "zayq6u48afcgZQj9dRSKnWdrVWmcwSz6TURDEWcHSfbe4", username: "palette", password: "tapmine" };
var client = new api (creds);
client.search().images().withPage(3).withPageSize(10).withPhrase('dog')
    .execute(function(err, response) {
        if (err) throw err
        console.log(JSON.stringify(response.images[0]));

    });
