async function showLatestFood() {
    let foods = await fetchJSON("http://localhost/food-ordering-system-backend/api/common/latest-food.php");

    foods.forEach(food => {

        $("#latest-food").innerHTML +=

            '<a flat href="food.html?id=' + food['id'] + '">'
            + "<h3>" + food['name'] + "</h3>"
            + '<img type="thumbnail" src=" ' + food['photo_link'] + '">  <br>'
            + "Price: " + food['price']
            + "<br><br> </a>"
            ;
    });
}

showLatestFood();
showLatestFood();
showLatestFood();

