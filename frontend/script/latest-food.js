var latestFoodDiv = document.getElementById("latest-food");

async function showLatestFood(){
    var foods = await fetchJSON("http://localhost/food-ordering-system-backend/api/common/latest-food.php");
    console.log(foods);
    
    foods.forEach(food => {
        let output= 

        '<a flat href="food.html?food_id=' + food['id']  + '">'
        +
        
        "<h3>" + food['name'] + "</h3>"
        +
        '<img small src=" '+food['photo_link']+'">  <br>'
        + 
        "Price: " + food['price']
        +
        "</a>"
        
        ;

        let newElement = document.createElement("div");
        newElement.innerHTML = output;
        latestFoodDiv.appendChild(newElement);
    });
}

showLatestFood();
showLatestFood();
showLatestFood();