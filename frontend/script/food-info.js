async function food_info(){
    var food_id = GET()['food_id'];
    var food = await fetchJSON("http://localhost/food-ordering-system-backend/api/common/view-food.php?food_id="+food_id);
    var restaurant = await fetchJSON("http://localhost/food-ordering-system-backend/api/common/restaurant-profile.php?restaurant_id="+food['restaurant_id'])


    output("food_name",food['name']);
    output("food_price",food['price']);
    output("restaurant_name", restaurant['name']);
    output("description",food['description']);
    $("#food_img").src= food['photo_link'];
}

food_info();