var latestFoodDiv = document.getElementById("latest-food");

var food_id = GET()['food_id'];

async function food_info(){
    var food = await fetchJSON("http://localhost/food-ordering-system-backend/api/common/view-food.php?food_id="+food_id);


    output("food_name",food['name']);
    output("food_price",food['price']);
    output("description",food['description']);
    document.getElementById("food_img").src= food['photo_link'];
}

food_info();