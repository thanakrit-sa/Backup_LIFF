exports.ThaiPostWebHook = functions.region(REGION).https.onRequest((req, res) => {
    console.log('Start Webhook');   
    
    res.status(200).send("OK").end();
});