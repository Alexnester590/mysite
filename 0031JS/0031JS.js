async function saveNewPlayer() {
    //Create your Parse Object
    const soccerPlayers = new Parse.Object("SoccerPlayers");

    //Define its attributes
    soccerPlayers.set("playerName", "A. Wed");
    soccerPlayers.set("yearOfBirth", 1997);
    soccerPlayers.set("emailContact", "a.wed@email.io");
    soccerPlayers.set("attributes", ["fast","good conditioning"])
    try{
        //Save the Object
        let result = await soccerPlayers.save()
        alert('New object created with objectId: ' + result.id);
    }catch(error){
        alert('Failed to create new object, with error code: ' + error.message);
    }
}
async function retrievePlayer() {
    //Create your Parse Query, and define the class it will be searched
    const query = new Parse.Query("SoccerPlayers");

    try {
    //Query the soccerPlayers object using the objectId you've copied
    const player = await query.get("HMcTr9rD3s");
    //access each object property using the get method
    const name = player.get("playerName");
    const email = player.get("emailContact");
    const birth = player.get("yearOfBirth");
    const attributes = player.get("attributes");

    alert(`Name: ${name}, email: ${email}, birth: ${birth}, attributes: ${attributes}`);
    } catch (error) {
    alert(`Failed to retrieve the object, with error code: ${error.message}`);
    }
  } 
document.getElementById("createButton").addEventListener("click", async function () {
saveNewPlayer();
retrievePlayer();
  });





//end doc ready

